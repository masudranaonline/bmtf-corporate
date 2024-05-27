<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function getData(){

        $projectList = Project::all();
        
        return view('pages/project')->with('projectList', $projectList);
    }

    function addData(Request $req){

        $req->validate([
            'file' => 'required|mimes:jpg, jpeg, png',
        ]);
      
        $fileName = time().'.'.$req->file->extension();  
       
        $req->file->move(public_path('uploads/project'), $fileName);

        $directory='uploads/project/'.$fileName;
        
        $project = new Project();
        $project->title=$req->input('title');
        $project->short_intro=$req->input('short_intro');
        $project->description=$req->input('description');
        $project->date=$req->input('date');
        $project->feature_image=$directory;
        $project->save();

        return redirect()->back()->with('status', 'New project added successfully');
    }
}