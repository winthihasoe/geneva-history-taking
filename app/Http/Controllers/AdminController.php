<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return view('admin.index');
    }

    function patientlist(){
        $patients=History::latest()->get();
        return view('admin.patientlist',['patients'=>$patients]);
    }

    function singlePatient($id){
        $patient=History::find($id);
        return view('admin.singlePatient',['patient'=>$patient]);
    }

    function editHistory($id){
        $patient=History::find($id);
        return view('admin.editHistory',['patient'=>$patient]);
    }

    function update_history($id){
        $validation=request()->validate([
            "patientName"=>"required",
            "age"=>"required",
            "disease"=>"required",
            "weight"=>"required",
            "address"=>"required",
            "phone"=>"required ||min:8 || max:11",
            "homeOrHospital"=>"required",
            "medication"=>"required",
            "canula"=>"required",
            "ryleTube"=>"required",
            "catheter"=>"required",
            "suction"=>"required",
            "drip"=>"required",
            "insulin"=>"required",
            "rbs"=>"required",
            "allergy"=>"required",
            "caregiverName"=>"required",
            "level"=>"required",
            "do_donts"=>"required",
            "note_to_cg"=>"required",
            "start_at"=>"required",
            "end_at"=>"required",
            "duty"=>"required"
            
        ]);

        if($validation){
            $patientName=request('patientName');
            $age=request('age');
            $disease=request('disease');
            $weight=request('weight');
            $address=request('address');
            $phone=request('phone');
            $homeOrHospital=request('homeOrHospital');
            $medication=request('medication');
            $canula=request('canula');
            $ryleTube=request('ryleTube');
            $catheter=request('catheter');
            $suction=request('suction');
            $drip=request('drip');
            $insulin=request('insulin');
            $rbs=request('rbs');
            $allergy=request('allergy');
            $caregiverName=request('caregiverName');
            $level=request('level');
            $do_donts=request("do_donts");
            $note_to_cg=request("note_to_cg");
            $start_at=request("start_at");
            $end_at=request("end_at");
            $duty=request("duty");

            $update_history=History::find($id);
            $update_history->patientName=$patientName;
            $update_history->age=$age;
            $update_history->disease=$disease;
            $update_history->weight=$weight;
            $update_history->address=$address;
            $update_history->phone=$phone;
            $update_history->homeOrHospital=$homeOrHospital;
            $update_history->medication=$medication;
            $update_history->canula=$canula;
            $update_history->ryleTube=$ryleTube;
            $update_history->catheter=$catheter;
            $update_history->suction=$suction;
            $update_history->drip=$drip;
            $update_history->insulin=$insulin;
            $update_history->rbs=$rbs;
            $update_history->allergy=$allergy;
            $update_history->caregiverName=$caregiverName;
            $update_history->level=$level;
            $update_history->do_donts=$do_donts;
            $update_history->note_to_cg=$note_to_cg;
            $update_history->start_at=$start_at;
            $update_history->end_at=$end_at;
            $update_history->duty=$duty;
            $update_history->update();
            
            return redirect()->route('admin.singlePatient',['id'=>$update_history->id])->with('message',"History Updated!");
            // return back()->with('message','History Updated!');
        }else{
            return back()->withErrors($validation);
        }
    }

    function supervisors(){
        return view('admin.supervisors');
    }
}
