<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interview;
use App\User;
use App\Participant;
use DB;


class InterviewsController extends Controller
{

    public function index()
    {
        $users=DB::select('select * from users where userType=1');
        $materials=Interview::orderBy('start_at','asc')->get();
        return view('front')->with('users',$users)->with('success','');
    }

    public function view(){
        $participant= DB::select('select * from participants');
        $users=DB::getSchemaBuilder()->getColumnListing('participants');
        return view('home')->with('interviews',$participant)->with('users',$users)->with('id1',0);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'start_at' => 'required',
            'end_at' => 'required'
        ]);
        
        $participant= new Participant;
        $sum=0;
        $users=DB::select('select * from users where userType=1');
        $message="";
        foreach($users as $user){
            $column=$user->id;
            $participant->$column= $request->input($user->id);
            $sum+=$request->input($user->id);
            if($request->input($user->id)==1){
                $probs = DB::select('select id from participants where (start_at between :start_at and :end_at or end_at between :start_at1 and :end_at1) and :column=1',['start_at'=>$request->input('start_at'),'end_at'=>$request->input('end_at'),'start_at1'=>$request->input('start_at'),'end_at1'=>$request->input('end_at'),'column'=>$column]);
                $message = "Some participants are having a clash in the given time";
                if($probs){
                    return view('error')->with('message', $message);
                }
                
            }
            
        }
        if($sum<2){
            $message= "You have to select two or more candidates to schedule an interview.";
            return view('error')->with('message',$message);
        }
        $participant->start_at= $request->input('start_at');
        $participant->end_at= $request->input('end_at');
        $participant->save();

        return redirect('/interviews')->with('success', 'Interview Successfully added');
    }

    public function show($id){
        $interview= Participant::find($id);
        $users=DB::select('select * from users where userType=1');
        return view('edit')->with('interview', $interview)->with('users',$users);
    }

    public function update(Request $request, $id1){
        $this->validate($request, [
            'start_at' => 'required',
            'end_at' => 'required'
        ]);

        $participant= Participant::find($id1);
        $sum=0;
        $users=DB::select('select id from users where userType=1');
        $message="";
        foreach($users as $user){
            $column=$user->id;
            $participant->$column= $request->input($column);
            $sum+=$request->input($column);
            if($request->input($user->id)==1){
                $probs = DB::select('select id from participants where (start_at between :start_at and :end_at or end_at between :start_at1 and :end_at1) and :column=1',['start_at'=>$request->input('start_at'),'end_at'=>$request->input('end_at'),'start_at1'=>$request->input('start_at'),'end_at1'=>$request->input('end_at'),'column'=>$column]);
                $message = "Some participants are having a clash in the given time";
                if($probs){
                    return view('error')->with('message', $message);
                }
                
            }
        }
        if($sum<2){
            $message= "You have to select two or more candidates to schedule an interview.";
            return view('error')->with('message',$message);
        }
        $participant->start_at= $request->input('start_at');
        $participant->end_at= $request->input('end_at');
        $participant->save();
        return redirect('/interviews/view')->with('success', 'Material added');
    }
}
