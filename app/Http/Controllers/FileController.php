<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function storeFile(request $request)
    {
        //For Single File

        // if($request->hasFile('file'))
        // {
        //     $filename = $request->file->getClientOriginalName();
        //     $filesize = $request->file->getClientSize();
        //     // $request->file->store('public/upload');     //Store file and return full path with random name
        //     $request->file->storeAs('public/upload',$filename);     //Store file and return full path with original name
        //     $file = new File;
        //     $file->name = $filename;
        //     $file->size = $filesize;
        //     $file->save();
            
        //     return 'yes';
        // }


        // For Multiple File

        if($request->hasFile('file'))
        {
            foreach($request->file as $file)
            {
                $filename = $file->getClientOriginalName();
                // print_r($filename);
                $filesize = $file->getClientSize();
                $file->storeAs('public/upload',$filename);     //Store file and return full path with original name
                $filemodel = new File;
                $filemodel->name = $filename;
                $filemodel->size = $filesize;
                $filemodel->save();
            }
        
            return 'yes';
        }
        // return $request->all();
    }

    public function getFile($filename)
    {
        try{
            return response()->download(Storage_path('app/public/upload/'.$filename,null,[],null));
        }
        catch(\Exception $e)
        {
            return 'File not Found';
        }
    }
}