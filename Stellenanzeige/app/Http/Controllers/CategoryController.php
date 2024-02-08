<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    //Insert Into Database
    public function store_data(Request $request){
        $data = new category;

        $data->name = $request->input("categoryname");

        $data->save();
        return back();
    }

    function categoryliste(){
        $categoryliste = category::all();

        return view('categoryliste',compact('categoryliste'));
    }

    public function delete_categoryliste($id){
        category::destroy($id);
        return back();
    }


    public function edit_categoryliste($id){
        $data= category::find($id);

        return view('edit_categoryliste',compact('data'));
    }

    public function update_data(Request $request , $id){
        $data = category::find($id);

        $data->Name = $request->input("name");

        $data->save();
        return back();

    }

}
