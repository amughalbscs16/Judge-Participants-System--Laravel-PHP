<html>
<head>

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


			<h2>Participants To Judge</h2>

            <p>
            	@foreach($participant as $par)
               	<ul><li><a href="{{route('judgeaparticipant',['tid' => $par->id])}}">{{$par->project_name}}</a></li></ul>
               	@endforeach
            </p>
<p>Click on the name to get the judging form for the participant. Then Click on Submit Query to Submit the Results to System
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
