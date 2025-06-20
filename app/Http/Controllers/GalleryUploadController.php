<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryUploadController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120', // 5MB
        ]);

        try {
            $file = $request->file('file');

            // Generate unique filename
            $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();

            // Store the file
            $path = $file->storeAs('gallery', $filename, 'public');

            return response()->json([
                'success' => true,
                'path' => $path,
                'url' => Storage::url($path),
                'filename' => $filename
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Upload failed: ' . $e->getMessage()
            ], 500);
        }
    }
}
