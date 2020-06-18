<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team as Team;
use App\User as User;
class RegistrationsController extends Controller
{
    function setTeamStatus()
    {
        if (auth()->user()->role == 'registrations') {
            $data = Team::get()->all();
            return view('registrations.status')->with('data',$data)->with('message',' ');
        } else
        return back()->with('message', "You Don't have access to it");
    }

    function setJudgeStatus()
    {
        if (auth()->user()->role == 'registrations') {
        $data = User::where('role', '=', 'judge')->get()->all();
        return view('registrations.judges')->with('data',$data)->with('message',' ');
        } else
        return back()->with('message', "You Don't have access to it");
    }

    function ToggleTeamStatus(Request $request)
    {

        if (auth()->user()->role == 'registrations') {
            $Team = Team::where('id', '=', $request->id)->first();
            $Team->ready = 'Yes';
            $Team->save();
            return back()->with('message', "Profile Edited Successfully.");
        } else return back()->with('message', "You Don't have access to it");
    }

    function ToggleJudgeStatus(Request $request)
    {
        if (auth()->user()->role == 'registrations') {
            $Judge = User::find($request->id);
            $Judge->arrived = 'Yes';
            $Judge->save();
            return back()->with('message', "Profile Edited Successfully.");
        } 
        else
        return back()->with('message', "You Don't have access to it");}
    }

