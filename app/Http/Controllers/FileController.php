<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function storeFile(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048',
        ]);

        $path = $request->file('file')->store('files');

        return back()->with('status', 'File uploaded successfully! Path: ' . $path);
    }

    public function listFiles()
    {
        $files = Storage::files('files');
        return view('files', compact('files'));
    }
}