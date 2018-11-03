<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(request $request)
    {
        if($request->hasFile('file'))
        {
            $request->file('file');
            // return $request->file->path();               //To See Path of File

            // return $request->file->extension();          //To See extention of file
            
            // return $request->file->store('public');      //To store file
            
            return Storage::putFile('public',$request->file('file'));   //To store file
        }
        else
        {
            return 'No file Selected';
        }
    }

    public function show()
    {
        // return Storage::files('public');            //For files of this directory

        // return Storage::allFiles('public');         //For files of this directory and sub directory
        
        // if(Storage::makeDirectory('public/newDirectory2'))       //For Create New Directory
        // {
        //     return 'directory Created';
        // } 
        
        // if(Storage::deleteDirectory('public/newDirectory2'))       //For create new directory
        // {
        //     return 'directory Deleted';
        // }

        // return Storage::size('public/CCNA.txt');                     //Size in KB
        // return Storage::size('public/CCNA.txt')/1024;                //Size in MB
        // return Storage::lastModified('public/CCNA.txt');                //Last Modified At
        
        // if(Storage::copy('public/CCNA.txt','public/demo.txt')))       //Copy
        // {
        //     return 'File Copied';
        // }

        // if(Storage::move('public/CCNA.txt','demo.txt'))      //Move
        // {
        //     return 'File Moved';
        // }

        // return Storage::get('public/me.jpg');                   //Return RAW Data of Image
    
        // $rowContent = Storage::get('public/me.jpg');                   //Create file form RAW Data of Image
        // if(Storage::put('public/newImage.jpg',$rowContent))
        // {
        //     return 'File Created from RAW';
        // }      
        
        // if(Storage::delete('public/me.jpg'))             //Delete Image
        // {
        //     return 'Image Deleted';
        // }
        
        // if(Storage::delete('public/me.jpg','public/me2.jpg'))             //Delete Multiple Images
        // {
        //     return 'Images Deleted';
        // }
        

    }   
}
