<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreResumeRequest;
use App\Models\Resume;
use Illuminate\Http\Request;

class AdminResumeController extends Controller
{
    public function index()
    {
        return view('backend.resumes.index')->with([
            'resumes' => Resume::paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.resumes.create');
    }

    public function store(StoreResumeRequest $request)
    {
        Resume::create([
            'title' => $request->title,
            'information' => $request->information,
        ]);

        return redirect()->route('resumes.index')->with('success', "Resume created!");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Resume $resume)
    {
        return view('backend.resumes.edit')->with([
            'resume' => $resume,
        ]);
    }

    public function update(StoreResumeRequest $request, Resume $resume)
    {
        $resume->update([
            'title' => $request->title,
            'information' => $request->information,
        ]);

        return redirect()->route('resumes.index')->with('success', "Resume changed!");
    }

    public function destroy(Resume $resume)
    {
        $resume->delete();

        return redirect()->route('resumes.index')->with('success', "Resume deleted!");
    }
}
