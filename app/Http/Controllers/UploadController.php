<?php

namespace App\Http\Controllers;

use App\Http\Requests\FileUploadRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function postUpload(FileUploadRequest $request)
    {
        $file = $request->file('file');

        $ext_num = 0 - (strlen($file->getClientOriginalExtension()) + 1);
        $clean_filename = mb_substr($file->getClientOriginalName(), 0, $ext_num);
        $slug_filename = str_slug($clean_filename, '_');
        $filename = $slug_filename
            . '_'
            . str_random(3)
            . '.'
            . $file->getClientOriginalExtension();

        $uploaded_image = Storage::putFileAs(env('TEMP_DIR', 'temp'), $file, $filename);
        $contentType = mime_content_type(storage_path('app/' . $uploaded_image));

        if ($uploaded_image) {
            return response()->json([
                'path' => $uploaded_image,
                'originalName' => $slug_filename . '.' . $file->getClientOriginalExtension(),
                'mime' => $contentType
            ]);
        } else {
            return response()->json('error', 400);
        }
    }

    public function deleteUpload(Request $request)
    {
        $data['path'] = $request->input('path');
        Storage::delete($data['path']);

        return response()->json($data);
    }

    public function getUpload($folder, $filename)
    {
        $storagePath = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
        $pathToFile = $storagePath . $folder . '/' . $filename;

        return response()->file($pathToFile);
    }

    public static function moveToStorage($file, $movePath)
    {

        $file = json_decode($file);
        $name = str_replace('.', time() . '-' . Auth::user()->id . '.', $file->originalName);
        Storage::move($file->path, 'public'. $movePath . '/' . $name);

        $file->path = storage_path('public'). $movePath . '/' . $name;
        return ['path' => $file->path, 'mime' => $file->mime, 'name' => $name];


    }
}
