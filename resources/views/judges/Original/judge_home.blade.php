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
															</ul>
			</nav>



			</aside>
			<section id="content" class="column-right">

	    <article>
			<h2>Welcome To Judge Panel Home</h2>
			<img src="http://fics.seecs.edu.pk/images/fics-home.jpg">
			</article>

		<article class="expanded">
		</article>



		</section>

		<div class="clear"></div>

	</section>


</body>
</html>
