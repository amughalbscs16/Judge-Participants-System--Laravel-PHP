@extends('layouts.master')

@section('panel-heading')
	<div class="panel-heading">Home</div>
					@if($message)
						{{$message}}
					@endif
@endsection
					@section('nav')
						<nav class="nav">
							<a class="nav-link active" href="{{route('judgeHome')}}">Home</a>
							<a class="nav-link" href="{{route('setTeamStatus')}}">Set Team Statuses</a>
							<a class="nav-link" href="{{route('setJudgeStatus')}}">Set Judge Statuses</a>
							<a class="nav-link disabled" href="{{route('logout')}}">Logout</a>
						</nav>
						<h2>Welcome To Registrations Home</h2>
					@endsection
						{{--<h3>Assigned Judge is: {{$judge->name}}</h3>--}}