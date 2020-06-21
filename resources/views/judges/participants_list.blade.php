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

						<h2>Participants To Judge</h2>
						<p>
						@if($participant)
						@foreach($participant as $par)
							<ul><li><a href="{{route('judgeaparticipant',['tid' => $par->team_id])}}">{{$par->project_name}}</a></li></ul>
						@endforeach
						@endif
						</p>

						<p>Click on the name to get the judging form for the participant. Then Click on Submit Query to Submit the Results to System</p>

					</div>

					<div class="panel-footer">FICS '20, <a href="https://github.com/amughalbscs16">Developer</a></div>
				</div>
			</div>
		</div>
	</div>
@endsection