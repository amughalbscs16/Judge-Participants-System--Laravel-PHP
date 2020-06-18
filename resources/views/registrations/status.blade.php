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

						<h2>Welcome To Registrations - Team Status</h2>
						</br>

						<h2>Fetched Data</h2>
						<div class="table-responsive">
						<table class="table">
							<thead>
							<tr>
								<th scope="col">Team ID</th>
								<th scope="col">Project Name</th>
								<th scope="col">Captain Name</th>
								<th scope="col">Table No.</th>
								{{--<th scope="col"></th>--}}

								<th scope="col">Ready</th>
								<th scope="col">Judged by 1st Judge</th>
								<th scope="col">Judged by 2nd Judge</th>
								<th scope="col">Judged by 3rd Judge</th>
								<th scope="col">Judged by 4th Judge</th>
								<th scope="col">Judged by 5th Judge</th>
								<th scope="col">Judged by 6th Judge</th>
							</tr>
							</thead>
							<tbody>

							@foreach ($data as $jp)
								<tr>
									<th scope="row">{{$jp->id}}</th>
									<td>{{$jp->project_name}}</td>
									<td>{{$jp->captain_name}}</td>
									<td>{{$jp->admin_id}}</td>
									{{--<td></td>--}}

									@if($jp->ready == 'No' || $jp->ready == "no")

										<td>
										{{Form::open(['route' => 'ToggleTeamStatus'])}}
										Arrived: {{Form::checkbox('id', $jp->id)}}
										{{Form::submit('Confirm Arrival')}}
										{!! Form::close() !!}
										</td>
									@elseif($jp->ready == "yes" || $jp->ready == "Yes")
										<td>{{$jp->ready}}</td>
									@endif
									
									<td>{{$jp->check}}</td>
									<td>{{$jp->check_2}}</td>
									<td>{{$jp->check_3}}</td>
									<td>{{$jp->check_4}}</td>
									<td>{{$jp->check_5}}</td>
									<td>{{$jp->check_6}}</td>
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
