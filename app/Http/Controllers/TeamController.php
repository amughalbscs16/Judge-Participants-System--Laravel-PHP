<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team as Team;
use App\User as User;
class TeamController extends Controller
{

    function getProfileEdit()
    {
      $Team = Team::where('captain_id','=',auth()->user()->id)->first();
      //dd($Team);
      if(auth()->user()->role == "team"){
        return view('teams.profile')->with('team',$Team)->with('message',' ');
      }
      else return back()->with('message',' ');
    }

    function postProfileEdit(Request $request)
    {
        if($request->ready == null) return back()->with('message', "NULL!");

      if (auth()->user()->role == 'team')
      {
        $Team = Team::where('captain_id','=',auth()->user()->id)->first();
        $Team->ready = $request->ready;
        $Team->save();
        return back()->with('message',"Profile Edited Successfully.");
      }
      else return back()->with('message', "You Don't have access to it");
    }

    function getJudgeScores()
    {
      if (auth()->user()->role == "team"){
      $Team = Team::where('captain_id','=',auth()->user()->id)->first();
      $Judge = User::where('id','=',$Team->judge_id)->first();
      //dd($Team);
      //dd($Judge);
      return view('teams.score')->with('team',$Team)
      ->with('judge',$Judge)->with('message',' ');
      }
      else return back()->with('message', "You Don't have access to it");
    }
}
