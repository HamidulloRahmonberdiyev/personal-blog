<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download(File $file)
    {
        $data = File::where('id', $file->id)->first();
        $path = public_path('storage/'. $data->file_url);
        return response()->download($path);
    }
}
