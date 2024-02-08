<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;
use App\Http\Requests\StorecompanyRequest;
use App\Http\Requests\UpdatecompanyRequest;

class CompanyController extends Controller
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
        $data = new company;

        $data->name = $request->input("name");
        $data->Gruendungsjahr = $request->input("Gruendungsjahr");

        $data->save();
        return back();
    }

    function companyliste(){
        $companyliste = company::all();

        return view('companyliste',compact('companyliste'));
    }

    public function delete_companyliste($id){
        company::destroy($id);
        return back();
    }


    public function edit_companyliste($id){
        $data= company::find($id);

        return view('edit_companyliste',compact('data'));
    }

    public function update_data(Request $request , $id){
        $data = company::find($id);

        $data->Name = $request->input("name");
        $data->gruendungsjahr = $request->input("Gruendungsjahr");

        $data->save();
        return back();

    }

}
