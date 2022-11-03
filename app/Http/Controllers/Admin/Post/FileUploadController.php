<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Http\Request;

use App\Models\File;


class FileUploadController extends Controller
{
    public function index()
    {
        return view('file-upload');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'files' => 'required',
            'files.*' => 'mimes:jpg.png,jpeg'
        ]);


        if($request->hasfile('files'))
        {
            foreach($request->file('files') as $key => $file)
            {
                $path = $file->store('public/post/img');
                $name = $file->getClientOriginalName();

                $insert[$key]['name'] = $name;
                $insert[$key]['path'] = $path;

            }
        }

        File::insert($insert);

        return redirect('files-upload')->with('status', 'Multiple File has been uploaded Successfully');

    }
}
