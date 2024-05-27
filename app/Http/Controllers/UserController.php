<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function getData(){

        $data = User::all();
        
        return view('pages/user')->with('userList', $data);
    }

    function addData(Request $req){
        
        $user = new User();
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->password = Hash::make($req->input('password'));
        $user->save();

        return redirect()->back()->with('status', 'New user added successfully');

    }

    function getProfileData(){
        
        return view('pages/profile');
    }

    // Edit User----------------------------------
    function getEditUser($id){
        $data=User::find($id);
        return response()->json([
            'status'=>200,
            'data'=>$data,
        ]);
    }

    function editUserData(Request $req){

        $id = $req->input('type_id');

        $data = Document_type::find($id);
        $data->name = $req->input('name');
        $data->description = $req->input('description');
        $data->mandatory = $req->input('mandatory');
        $data->update();

        return redirect('user')->with('status', 'User information updated successfully');
    }
}