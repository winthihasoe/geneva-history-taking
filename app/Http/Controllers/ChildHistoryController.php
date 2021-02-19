<?php

namespace App\Http\Controllers;

use App\Models\ChildHistory;
use Illuminate\Http\Request;

class ChildHistoryController extends Controller
{
    function insert_child_history(){

        $validation=request()->validate([
            "babyName"=>"required",
            "age"=>"required",
            "weight"=>"required",
            "labour"=>"required",
            "address"=>"required",
            "phone"=>"required ||min:8 || max:11",
            "homeOrHospital"=>"required",
            "medication"=>"required",
            "breastfeeding"=>"required",
            "weaning"=>"required",
            "bathing"=>"required",
            "sleepPattern"=>"required",
            "jaundice"=>"required",
            "soothe"=>"required",
            "infection"=>"required",
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
            $babyName=request('babyName');
            $age=request('age');
            $weight=request('weight');
            $labour=request('labour');
            $address=request('address');
            $phone=request('phone');
            $homeOrHospital=request('homeOrHospital');
            $medication=request('medication');
            $breastfeeding=request('breastfeeding');
            $weaning=request('weaning');
            $bathing=request('bathing');
            $sleepPattern=request('sleepPattern');
            $jaundice=request('jaundice');
            $soothe=request('soothe');
            $infection=request('infection');
            $allergy=request('allergy');
            $caregiverName=request('caregiverName');
            $level=request('level');
            $do_donts=request("do_donts");
            $note_to_cg=request("note_to_cg");
            $start_at=request("start_at");
            $end_at=request("end_at");
            $duty=request("duty");

            $baby=new ChildHistory();
            $baby->user_id=auth()->user()->id;
            $baby->babyName=$babyName;
            $baby->age=$age;
            $baby->weight=$weight;
            $baby->labour=$labour;
            $baby->address=$address;
            $baby->phone=$phone;
            $baby->homeOrHospital=$homeOrHospital;
            $baby->medication=$medication;
            $baby->breastfeeding=$breastfeeding;
            $baby->weaning=$weaning;
            $baby->bathing=$bathing;
            $baby->sleepPattern=$sleepPattern;
            $baby->jaundice=$jaundice;
            $baby->soothe=$soothe;
            $baby->infection=$infection;
            $baby->allergy=$allergy;
            $baby->caregiverName=$caregiverName;
            $baby->level=$level;
            $baby->do_donts=$do_donts;
            $baby->note_to_cg=$note_to_cg;
            $baby->start_at=$start_at;
            $baby->end_at=$end_at;
            $baby->duty=$duty;
            $baby->save();
            return redirect()->route('patientlist');
        }else{
            return back()->withErrors($validation);
        }
    
    }
}
