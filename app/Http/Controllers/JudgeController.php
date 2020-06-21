<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Team as Team;
use App\User as User;
use App\JudgeTeams as JudgeTeams;
class JudgeController extends Controller
{
  function getData()
  {
      $id = auth()->user()->id;
      $judge = User::find($id); 
      if (strtoupper($judge->role)=="JUDGE"){
          $participant = '';
          if (JudgeTeams::where('judge_id', '=', $id)->exists()){
              $participant = DB::table('judge_teams')->join('teams','judge_teams.team_id','teams.id')->where('judge_teams.judge_id','=', $id)->where('teams.ready','=','Yes')->where('judge_teams.check','=','No')->get()->all();
          }
          return view('judges.participants_list')->with('participant', $participant)->with('message', 'Welcome Judge');
      }
      else return back()->with('message', ' ');
  }

  function getParticipantData($tid)
  {
      $judge = User::find(auth()->user()->id);
      $team= Team::find($tid);
      $judgeteam = JudgeTeams::where("team_id",'=',$tid)->where('judge_id','=',$judge->id)->get()->first();
      //Role is Judge and Team is Ready and not already Judged 
          if (strtoupper($judge->role)=="JUDGE" && strtoupper($judgeteam->check)=="NO" && strtoupper($team->ready)=="YES"){
              // check that this is correct judge and not a manually entered URL
            
              if($judgeteam->judge_id==$judge->id) {
                  return view('judges.judge_participant')->with('tid', $tid)->with('message', ' ');
              }
              else {
                return back()->with('message', 'You are not allowed to Judge this Participant');
              } 
          }
          else
          {
              return back()->with('message', 'You are not allowed to Judge this Participant');
          }
  }

  function postParticipantData(Request $request,$tid)
  {

      $judge = User::find(auth()->user()->id);
      if(strtoupper($judge->role)=="JUDGE")
      {
        $judgeteam = JudgeTeams::where("team_id",'=',$tid)->where('judge_id','=',$judge->id)->get()->first();
        if($judgeteam->judge_id==$judge->id)
        {
            $judgeteam->Q1 = $request->Q1_score;
            $judgeteam->comments_q1 = $request->Q1_comment;

            $judgeteam->Q2 = $request->Q2_score;
            $judgeteam->comments_q2 = $request->Q2_comment;

            $judgeteam->Q3 = $request->Q3_score;
            $judgeteam->comments_q3 = $request->Q3_comment;

            $judgeteam->Q4 = $request->Q4_score;
            $judgeteam->comments_q4 = $request->Q4_comment;

            $judgeteam->Q5 = $request->Q5_score;
            $judgeteam->comments_q5 = $request->Q5_comment;

            $judgeteam->Q6 = $request->Q6_score;
            $judgeteam->comments_q6 = $request->Q6_comment;

            $judgeteam->assessment = $request->qlty_assessment;

            //Score Calculation
            $judgeteam->total_score = ((2 * $request->Q1_score) + (1.5 * $request->Q2_score) +
                (2.5 * $request->Q3_score) + (2 * $request->Q4_score) + (1.5 * $request->Q5_score) +
                (0.5 * $request->Q6_score));
            
            $judgeteam->check="Yes";
            $judgeteam->save();
        } 
        return redirect()->route('judgeparticipants');
      }
      else return back()->with('message', ' ');
  }

  function getJudgedParticipants()
  {
       $judge = User::find(auth()->user()->id);

      if (strtoupper($judge->role)=="JUDGE"){
        $participant = DB::table('judge_teams')->join('teams', 'judge_teams.team_id', 'teams.id')->where('judge_teams.judge_id','=',$judge->id)->where('judge_teams.check','=','Yes')->get()->all();
        //dd($participant);
        return view('judges.judged_participants')->with('participants',$participant)->with('message', '');
      }
      else return back()->with('message', '');
  }

  function getJudgedParticipant($tid){
      $judge = User::find(auth()->user()->id);
      $team = JudgeTeams::join('teams', 'judge_teams.team_id', 'teams.id')->where('judge_teams.judge_id','=',$judge->id)->where('judge_teams.check','=','Yes')->
      where('teams.id','=',$tid)->get()->first();
      #dd($team->check);
      if(strtoupper($judge->role)=="JUDGE" && strtoupper($team->check) == "YES"){
              return view('judges.judged_participant_info')->with('message',' ')->with('team', $team);
      } else {
            return back()->with('message','');
      }
  }

}
