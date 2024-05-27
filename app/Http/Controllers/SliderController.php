<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    function getData(){

        $sliderList = Slider::all();
        
        return view('pages/slider')->with('sliderList', $sliderList);
    }

    function addData(Request $req){

        $req->validate([
            'file' => 'required|mimes:mp4',
        ]);
      
        $fileName = time().'.'.$req->file->extension();  
       
        $req->file->move(public_path('uploads/slider'), $fileName);

        $directory='uploads/slider/'.$fileName;
        
        $slider = new Slider();
        $slider->title=$req->input('title');
        $slider->subtitle=$req->input('subtitle');
        $slider->description=$req->input('description');
        $slider->video=$directory;
        $slider->save();

        return redirect()->back()->with('status', 'New slider added successfully');
    }
}