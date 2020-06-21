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

						<h2>Welcome To Judge Panel Home</h2>
						
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
							<div class="carousel-item active">
							  <img class="d-block w-100" src="{{ asset('images/Basement.png') }}" alt="First slide">
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100" src="{{ asset('images/Ground-Floor.png') }}" alt="Second slide">
							</div>
							<div class="carousel-item">
							  <img class="d-block w-100" src="{{ asset('images/First-Floor.png') }}" alt="Third slide">
							</div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						  </a>
						</div>
					</div>

					<div class="panel-footer">FICS '20, <a href="https://github.com/amughalbscs16">Developer</a></div>
				</div>
			</div>
		</div>
	</div>
@endsection