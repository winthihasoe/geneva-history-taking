<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index() {
        
        // dd($supervisor_histories->toArray());
        return view('index');
    }

    function addhistory(){
        return view('addhistory');
    }

    function patientlist(){
        $supervisor=auth()->user();
        $supervisor_histories=$supervisor->histories;
        return view('patientlist',['supervisor_histories'=>$supervisor_histories]);
    }

    function singlePatient($id){
        $patient=History::find($id);
        return view('singlePatient',['patient'=>$patient]);
    }

    function editHistory($id){
        $patient=History::find($id);
        return view('editHistory',['patient'=>$patient]);
    }
}
