<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    function getData(){

        $careerList = Career::all();
        
        return view('pages/career')->with('careerList', $careerList);
    }

    function addData(Request $req){

        $req->validate([
            'file' => 'required|mimes:pdf,docx,jpg, jpeg, png',
        ]);
      
        $fileName = time().'.'.$req->file->extension();  
       
        $req->file->move(public_path('uploads/career'), $fileName);

        $directory='uploads/career/'.$fileName;
        
        $career = new Career();
        $career->title=$req->input('title');
        $career->department=$req->input('department');
        $career->capacity=$req->input('capacity');
        $career->upload_date=$req->input('upload_date');
        $career->application_deadline=$req->input('application_deadline');
        $career->file=$directory;
        $career->save();

        return redirect()->back()->with('status', 'New career opportunity added successfully');
    }
}