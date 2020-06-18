<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team as Team;
use App\User as User;
class JudgeTeamController extends Controller
{
    function postData(Request $request)
    {
    	/*$jti = new jteam;
    	//dd($request->all());
    	$jti->judge_id=rand()%10;
    	$jti->team_id=2;
    	$jti->checked=true;
    	$jti->points = 10;
    	$jti->save();  			//Working...
    	//print_r($jti);
    	*/
      return back()->with('message', "Data Successfully Posted");
    }

    function judgeTeamHome()
    {
      if(auth()->user()->role=="judge"){
        return view('judges.judge_home')->with('message', 'Welcome to The Judge Panel');
      }
      else if(auth()->user()->role=="team")
      {
          $Judgeid = Team::where('captain_id','=',auth()->user()->id)->first()->judge_id;
          //dd($Judgeid);
          $Judge = User::find($Judgeid);
          //dd($Judge);
          return view('teams.home')->with('message','Welcome to the Home Page')->with('judge',$Judge);
      }
      else if(auth()->user()->role == "volunteer")
      {
        return view('volunteers.home')->with('message',' ')->with('role','search');
      } else if(auth()->user()->role == "registrations"){
          return view('registrations.home')->with('message',' ')->with('role','search');
      }
      else return back();
    }

    function volunteerJudgeParticipant(Request $request)
    {
      if (auth()->user()->role == "volunteer"){

        //Check for NULL request
          if ($request->find==null){
              return back()->with('message', "No RadioButton selected!");
          }
          else{
              if($request->find=='judge'){
                  // Get the first Team to which this Judge is Assigned
                  $team = Team::find($request->id)/*->get()->first()*/;

                  // Get IDs of all Teams with this Judge
                  //$ids = Team::where('judge_id','=',$request->id)->get()->all();
				if($team){
                  // Get User corresponding to Judge ID from $team
                  $data = User::find($team->judge_id)/*->get()->first()*/;
                  //dd($data);
                  return view('volunteers.home')->with('message',' ')->with('data',$data)->with('role','judge');
				}
				else return back()->with('message',"Team Does Not Exist");
                      /*->with('ids',$ids)*/;
              }
              else if ($request->find == 'team'){
                  $data = Team::where('judge_id','=',$request->id)->get()->all();
                  //dd($data);
                  return view('volunteers.home')->with('data',$data)->with('role','team')->with('message', ' ');
              }
          }
      }
    }
}
