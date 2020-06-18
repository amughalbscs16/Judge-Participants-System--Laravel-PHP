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

						<h2>Welcome To Team Home</h2>
						<h3>Assigned Judge is: {{$judge->name}}</h3>
						<img class="img-responsive" src="http://fics.seecs.edu.pk/images/fics-home.jpg">
					</div>

					<div class="panel-footer">FICS '18</div>
				</div>
			</div>
		</div>
	</div>
@endsection