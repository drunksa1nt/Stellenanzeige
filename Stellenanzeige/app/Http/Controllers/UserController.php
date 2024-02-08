<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Storeuser_Request;
use App\Http\Requests\Updateuser_Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }
   //Insert Into Database
   public function store_data(Request $request){
    $data = new User;

    $data->name = $request->input("username");

    $data->save();
    return back();
}

function userliste(){
    $userliste = User::all();

    return view('userliste',compact('userliste'));
}

public function delete_userliste($id){
    User::destroy($id);
    return back();
}


public function edit_userliste($id){
    $data= User::find($id);

    return view('edit_userliste',compact('data'));
}

public function update_data(Request $request , $id){
    $data = User::find($id);

    $data->Name = $request->input("Name");

    $data->save();
    return back();

}
};