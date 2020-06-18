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

						<h2>Assigned Judge: <u>{{$judge->name}}</u></h2>
						<br/>

						<table class="table">
							<thead>
							<th scope="col">Judging Status -></th>

							@if($team->check == 'No' || $team->check == "no")
								<th scope="col"><i>Under Judgement</i></th>
							@elseif($team->check == "Yes" || $team->check == "yes")
								<th scope="col"><i>Judging Complete</i></th>
							@endif
							</thead>
						</table>
					</div>

					<div class="panel-footer">FICS '18</div>
				</div>
			</div>
		</div>
	</div>
@endsection