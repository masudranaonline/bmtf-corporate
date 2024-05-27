<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Notice;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function getData(){

        $newsList = News::all();
        
        return view('pages/news')->with('newsList', $newsList);
    }

    function addData(Request $req){

        $req->validate([
            'file' => 'required|mimes:jpg, jpeg, png',
        ]);
      
        $fileName = time().'.'.$req->file->extension();  
       
        $req->file->move(public_path('uploads/news'), $fileName);

        $directory='uploads/news/'.$fileName;
        
        $news = new News();
        $news->title=$req->input('title');
        $news->short_intro=$req->input('short_intro');
        $news->description=$req->input('description');
        $news->date=$req->input('date');
        $news->feature_image=$directory;
        $news->save();

        return redirect()->back()->with('status', 'New news added successfully');
    }
}