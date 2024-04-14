<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileController extends Controller
{

    public function showPdf($id)
    {
        $file = File::where('course_id', $id)->first();
        $path = public_path('storage/'.$file->filepath);

        if (!file_exists($path)) {
            abort(404);
        }
        return response()->file($path);
    }
}
