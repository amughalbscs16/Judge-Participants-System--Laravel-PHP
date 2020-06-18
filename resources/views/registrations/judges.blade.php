@extends('layouts.app')

@section('content')
	<?php
	$url=$_SERVER['REQUEST_URI'];
    header("Refresh: 60; URL=\"" . $url . "\""); // redirect in 60 seconds
	?>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>
					{{--@if($message)
						{{$message}}
					@endif--}}

					<div class="panel-body">
						<nav class="nav">
							<a class="nav-link active" href="{{route('judgeHome')}}">Home</a>
							<a class="nav-link" href="{{route('setTeamStatus')}}">Set Team Statuses</a>
							<a class="nav-link" href="{{route('setJudgeStatus')}}">Set Judge Statuses</a>
							<a class="nav-link disabled" href="{{route('logout')}}">Logout</a>
						</nav>

						<h2>Welcome To Registrations - Judge Status</h2>
						</br>

						<h2>Fetched Data</h2>
						<div class="table-responsive">
						<table class="table">
							<thead>
							<tr>
								<th scope="col">Judge ID</th>
								<th scope="col">Judge Name</th>

								<th scope="col">Arrived</th>
							</tr>
							</thead>
							<tbody>

							@foreach ($data as $jp)
								<tr>
									<th scope="row">{{$jp->id}}</th>
									<td>{{$jp->name}}</td>
									<td></td>

									@if($jp->arrived == 'No' || $jp->ready == "no")

										<td>
										{{Form::open(['route' => 'ToggleJudgeStatus'])}}
										Arrived: {{Form::checkbox('id', $jp->id)}}
										{{Form::submit('Confirm Arrival')}}
										{!! Form::close() !!}
										</td>
									@elseif($jp->arrived == "yes" || $jp->arrived == "Yes")
										<td>{{$jp->arrived}}</td>
									@endif
								</tr>
							@endforeach
							</tbody>
						</table>
						</div>
					</div>

					<div class="panel-footer">FICS '18</div>
				</div>
			</div>
		</div>
	</div>
@endsection
