<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileRequest;
use App\Models\File;
use App\Models\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminFileController extends Controller
{
    public function index()
    {
        return view('backend.files.index')->with([
            'files' => File::paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.files.create');
    }

    public function store(StoreFileRequest $request)
    {
        $path = $request->file('file_url')->store('files', 'public');

        File::create([
            'name' => $request->name,
            'file_url' => $path,
        ]);

        return redirect()->route('files.index')->with('success', 'File created!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(File $file)
    {
        return view('backend.files.edit')->with([
            'file' => $file,
        ]);
    }

    public function update(StoreFileRequest $request, File $file)
    {
        if (isset($file->file_url)) {
            Storage::delete('public/' . $file->file_url);
        }
        $path = $request->file('file_url')->store('files', 'public');

        $file->update([
            'name' => $request->name,
            'file_url' => $path,
        ]);

        return redirect()->route('files.index')->with('success', 'File created!');
    }

    public function destroy(File $file)
    {
        if (isset($file->file_url)) {
            Storage::delete('public/' . $file->file_url);
        }
        $file->delete();

        return redirect()->back()->with('success', "File deleted!");
    }
}
