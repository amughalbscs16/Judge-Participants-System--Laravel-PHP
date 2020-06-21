@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

					<div class="panel-body">
						<nav class="nav">
							<a class="nav-link active" href="{{route('judgeHome')}}">Home</a>
							<a class="nav-link" href="{{route('judgeparticipants')}}">Teams to Judge</a>
							<a class="nav-link" href="{{route('getJudgedParticipants')}}">Evaluated Participants</a>
							<a class="nav-link disabled" href="{{route('logout')}}">Logout</a>
						</nav>

						<h2>Judged Participant {{$team->name}} Info</h2>
						<table class="table">
							<thead>
							<tr>
								<th scope="col">Question #</th>
								<th scope="col">Score</th>
								<th scope="col">Comments</th>
							</tr>
							</thead>
							<tbody>

                            <?php
									$judge = auth()->user()->id;
//                            $judge = User::find(auth()->user()->id);
//                            if($team->judge_id==$judge->id){
                            if($team->judge_id==$judge){
                            ?>

							<tr>
								<th scope="row">1</th>
								<td>{{$team->Q1}}/10</td>
								<td>{{$team->comments_q1}}</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>{{$team->Q2}}/10</td>
								<td>{{$team->comments_q2}}</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>{{$team->Q3}}/10</td>
								<td>{{$team->comments_q3}}</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>{{$team->Q4}}/10</td>
								<td>{{$team->comments_q4}}</td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>{{$team->Q5}}/10</td>
								<td>{{$team->comments_q5}}</td>
							</tr>
							<tr>
								<th scope="row">6</th>
								<td>{{$team->Q6}}/10</td>
								<td>{{$team->comments_q6}}</td>
							</tr>
							<tr>
								<th scope="row">Total Score:</th>
								<td colspan="2">{{$team->total_score}}/100</td>
							</tr>

							{{--Judge # 2--}}
                            <?php } else if ($team->judge_id_2==$judge){ ?>
							<tr>
								<th scope="row">1</th>
								<td>{{$team->Q1_2}}/10</td>
								<td>{{$team->comments_q1_2}}</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>{{$team->Q2_2}}/10</td>
								<td>{{$team->comments_q2_2}}</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>{{$team->Q3_2}}/10</td>
								<td>{{$team->comments_q3_2}}</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>{{$team->Q4_2}}/10</td>
								<td>{{$team->comments_q4_2}}</td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>{{$team->Q5_2}}/10</td>
								<td>{{$team->comments_q5_2}}</td>
							</tr>
							<tr>
								<th scope="row">6</th>
								<td>{{$team->Q6_2}}/10</td>
								<td>{{$team->comments_q6_2}}</td>
							</tr>

							{{--Judge # 3--}}
                            <?php } else if ($team->judge_id_3==$judge){ ?>
							<tr>
								<th scope="row">1</th>
								<td>{{$team->Q1_3}}/10</td>
								<td>{{$team->comments_q1_3}}</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>{{$team->Q2_3}}/10</td>
								<td>{{$team->comments_q2_3}}</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>{{$team->Q3_3}}/10</td>
								<td>{{$team->comments_q3_3}}</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>{{$team->Q4_3}}/10</td>
								<td>{{$team->comments_q4_3}}</td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>{{$team->Q5_3}}/10</td>
								<td>{{$team->comments_q5_3}}</td>
							</tr>
							<tr>
								<th scope="row">6</th>
								<td>{{$team->Q6_3}}/10</td>
								<td>{{$team->comments_q6_3}}</td>
							</tr>

							{{--Judge # 4--}}
                            <?php } else if ($team->judge_id_4==$judge){ ?>
							<tr>
								<th scope="row">1</th>
								<td>{{$team->Q1_4}}/10</td>
								<td>{{$team->comments_q1_4}}</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>{{$team->Q2_4}}/10</td>
								<td>{{$team->comments_q2_4}}</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>{{$team->Q3_4}}/10</td>
								<td>{{$team->comments_q3_4}}</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>{{$team->Q4_4}}/10</td>
								<td>{{$team->comments_q4_4}}</td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>{{$team->Q5_4}}/10</td>
								<td>{{$team->comments_q5_4}}</td>
							</tr>
							<tr>
								<th scope="row">6</th>
								<td>{{$team->Q6_4}}/10</td>
								<td>{{$team->comments_q6_4}}</td>
							</tr>

							{{--Judge # 5--}}
                            <?php } else if ($team->judge_id_5==$judge){ ?>
							<tr>
								<th scope="row">1</th>
								<td>{{$team->Q1_5}}/10</td>
								<td>{{$team->comments_q1_5}}</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>{{$team->Q2_5}}/10</td>
								<td>{{$team->comments_q2_5}}</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>{{$team->Q3_5}}/10</td>
								<td>{{$team->comments_q3_5}}</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>{{$team->Q4_5}}/10</td>
								<td>{{$team->comments_q4_5}}</td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>{{$team->Q5_5}}/10</td>
								<td>{{$team->comments_q5_5}}</td>
							</tr>
							<tr>
								<th scope="row">6</th>
								<td>{{$team->Q6_5}}/10</td>
								<td>{{$team->comments_q6_5}}</td>
							</tr>

							{{--Judge # 6--}}
							<?php } else {?>
							<tr>
								<th scope="row">1</th>
								<td>{{$team->Q1_6}}/10</td>
								<td>{{$team->comments_q1_6}}</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>{{$team->Q2_6}}/10</td>
								<td>{{$team->comments_q2_6}}</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>{{$team->Q3_6}}/10</td>
								<td>{{$team->comments_q3_6}}</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>{{$team->Q4_6}}/10</td>
								<td>{{$team->comments_q4_6}}</td>
							</tr>
							<tr>
								<th scope="row">5</th>
								<td>{{$team->Q5_6}}/10</td>
								<td>{{$team->comments_q5_6}}</td>
							</tr>
							<tr>
								<th scope="row">6</th>
								<td>{{$team->Q6_6}}/10</td>
								<td>{{$team->comments_q6_6}}</td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
						<h2>Qualitative Assessment</h2>
						{{$team->assessment}}

					</div>

					<div class="panel-footer">FICS '20, <a href="https://github.com/amughalbscs16">Developer</a></div>
				</div>
			</div>
		</div>
	</div>
@endsection