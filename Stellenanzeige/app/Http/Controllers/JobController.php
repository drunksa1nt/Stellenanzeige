<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use DB;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


//Insert Into Database
    public function store_jobs(Request $request){
        $data = new Job;

        $data->name = $request->input("Name");
        $data->Beschreibung = $request->input("Beschreibung");

        $data->save();
        return back();
    }

    function jobliste(){
        $jobliste = Job::all();

        return view('jobliste',compact('jobliste'));
    }

    public function delete_jobliste($id){
        Job::destroy($id);
        return back();
    }


    public function edit_jobliste($id){
        $data= Job::find($id);

        return view('edit_jobliste',compact('data'));
    }

    public function update_jobs(Request $request , $id){
        $data = Job::find($id);

        $data->Name = $request->input("Name");
        $data->Beschreibung = $request->input("Beschreibung");

        $data->save();
        return back();

    }

}
