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
							</tbody>
						</table>

						<h2>Qualitative Assessment</h2>
						<textarea>{{$team->assessment}}</textarea>
					</div>

					<div class="panel-footer">FICS '20, <a href="https://github.com/amughalbscs16">Developer</a></div>
				</div>
			</div>
		</div>
	</div>
@endsection