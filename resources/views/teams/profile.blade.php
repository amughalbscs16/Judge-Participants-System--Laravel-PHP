@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>
					@if($message)
						{{$message}}
					@endif

					<div class="panel-body">
						<nav class="nav">
							<a class="nav-link active" href="{{route('judgeHome')}}">Home</a>
							<a class="nav-link" href="{{route('getProfileEdit')}}">Profile</a>
							<a class="nav-link" href="{{route('getJudgeScores')}}">Judge/Scores</a>
							<a class="nav-link disabled" href="{{route('logout')}}">Logout</a>
						</nav>

						<h2>Welcome To Team Profile</h2>
						<br>

						<h3><u>{{$team->project_name}}</u></h3>
						<table class="table">
							<thead>
							<tr>
								<th scope="col">Item No.</th>
								<th scope="col">Role</th>
								<th scope="col">Name</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Captain</td>
								<td>{{$team->captain_name}}</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Member</td>
								<td>{{$team->team_member1}}</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Member</td>
								<td>{{$team->team_member2}}</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>Member</td>
								<td>{{$team->team_member3}}</td>
							</tr>
							</tbody>
						</table>

						<br/>

						<table class="table">
							<thead>
							<th scope="col">Project Status -></th>

							@if($team->ready == 'No' || $team->ready == "no")
								<th scope="col">Not Arrived</th>

								{{Form::open(['route' => 'postProfileEdit'])}}
									Arrived: {{Form::checkbox('ready', 'Yes')}}
								{{Form::submit('Confirm Arrival')}}
								{!! Form::close() !!}
							@elseif($team->ready == "yes" || $team->ready == "Yes")
								<th scope="col">Arrived</th>
							@endif
							</thead>
						</table>
					</div>

					<div class="panel-footer">FICS '20, <a href="https://github.com/amughalbscs16">Developer</a></div>
				</div>
			</div>
		</div>
	</div>
@endsection