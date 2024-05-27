<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Video;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    function getImageData(){

        $imageList = Image::all();
        
        return view('pages/imageGallery')->with('imageList', $imageList);
    }

    function addImageData(Request $req){

        $req->validate([
            'file' => 'required|mimes:jpg,jpeg,png',
        ]);
      
        $fileName = time().'.'.$req->file->extension();  
       
        $req->file->move(public_path('uploads/gallery'), $fileName);

        $directory='uploads/gallery/'.$fileName;
        
        $image = new Image();
        $image->image=$directory;
        $image->save();

        return redirect()->back()->with('status', 'New image added in gallery successfully');

    }

    function editImageData(Request $req){
        $image_id = $req->input('image_id');

        $data = Image::find($image_id);
        $data->status=$req->input('status');
        $data->update();

        return redirect()->back()->with('status', 'Image status updated successfully');
    }

    function getVideoData(){

        $videoList = Video::all();
        
        return view('pages/videoGallery')->with('videoList', $videoList);
    }

    function addVideoData(Request $req){
        
        $video = new Video();
        $video->title=$req->input('title');
        $video->language=$req->input('language');
        $video->duration=$req->input('duration');
        $video->link=$req->input('link');
        $video->save();

        return redirect()->back()->with('status', 'New video added in gallery successfully');

    }
}