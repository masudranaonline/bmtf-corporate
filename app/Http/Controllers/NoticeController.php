<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    function getData(){

        $noticeList = Notice::all();
        
        return view('pages/noc')->with('noticeList', $noticeList);
    }

    function addData(Request $req){

        $req->validate([
            'file' => 'required|mimes:pdf,docx,jpg, jpeg, png',
        ]);
      
        $fileName = time().'.'.$req->file->extension();  
       
        $req->file->move(public_path('uploads/noc'), $fileName);

        $directory='uploads/noc/'.$fileName;
        
        $notice = new Notice();
        $notice->name=$req->input('name');
        $notice->authority=$req->input('authority');
        $notice->date=$req->input('date');
        $notice->file=$directory;
        $notice->save();

        return redirect()->back()->with('status', 'New NOC added successfully');
    }
}