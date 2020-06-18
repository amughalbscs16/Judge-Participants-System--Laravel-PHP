<html>
<head>
	<!-- Style -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

		<section id="body" class="width">
			<aside id="sidebar" class="column-left">

			<header>
				<h1><a href={{route('judgeHome')}}>Home</a></h1>
				@if($message)
				{{$message}}
				@endif
			</header>

			<nav id="mainnav">
  				<ul>
                            	<li ><a href="{{route('judgeHome')}}">Home</a></li>
                           		 <li><a class="selected-item" href="{{route('judgeparticipants')}}">Judge Participants</a></li>
                           		  <li><a class="selected-item" href="{{route('getJudgedParticipants')}}">Judged Participants</a></li>
																<li><a href="{{route('logout')}}">Logout</a></li>
<p><h2>Judged Participant {{$team->name}} Info</h2>
<h3>Score Q1: {{$team->Q1}}</h3>
<h3>Score Q2: {{$team->Q2}}</h3>
<h3>Score Q3: {{$team->Q3}}</h3>
<h3>Score Q4: {{$team->Q4}}</h3>
</p>
</p>




            <ul class="styledlist">

            </ul>
		</article>

		<article class="expanded">
		</article>



		</section>

		<div class="clear"></div>

	</section>


</body>
</html>
