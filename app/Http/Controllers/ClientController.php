<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function getData(){

        $clientList = Client::all();
        
        return view('pages/client')->with('clientList', $clientList);
    }

    function addData(Request $req){

        $req->validate([
            'file' => 'required|mimes:jpg,jpeg,png',
        ]);
      
        $fileName = time().'.'.$req->file->extension();  
       
        $req->file->move(public_path('uploads/client'), $fileName);

        $directory='uploads/client/'.$fileName;
        
        $client = new Client();
        $client->name = $req->input('name');
        $client->logo=$directory;
        $client->save();

        return redirect()->back()->with('status', 'New client added successfully');

    }
}