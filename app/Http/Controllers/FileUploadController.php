<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    //
    public function index(Request $request)
    {
        //dd($request);
        $name = $request->file('file_upload')->getClientOriginalName();
        $path = $request->file('file_upload')->store('public/storage/resume');
        print "$name, $path";
        exit;
    }
}
