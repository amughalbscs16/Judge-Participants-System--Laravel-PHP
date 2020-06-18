<html>
<head>
    <!-- Style -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

		<section id="body" class="width">
			<aside id="sidebar" class="column-left">

			<header>
				<h1><a href="{{route('judgeHome')}}">Home</a></h1>

				<h2>Welcome to my website!</h2>

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

  <table width="100%" border="1">
  {{Form::open(['route' => ['postjudgeaparticipant',$tid]])}}
            <tr>
              <td width="5%">
                Sr No.
              </td>
              <td width="35%">
                Category
              </td>
              <td width="5%">
                Weightage [%]
              </td>
              <td width="20%">
                Rating [1 - 10]
              </td>
              <td  width="35%">
                Comments
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>Need for the Solution & Target Market Identification</td>
              <td>40</td>
              <td>

              {{Form::select('Q1_score', ['1' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '2' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','3' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '4' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','5' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '6' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','7' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '8' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','9' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '10' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'])}}
              </td>
              <td>
              {{Form::text('Q1_comment')}}
                </td>
             </tr>
              <tr>
                <td>2</td>
              <td>Technical Viability & Novelty / Impact of the Solution </td>
              <td>40</td>
              <td>
              {{Form::select('Q2_score', ['1' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '2' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','3' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '4' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','5' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '6' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','7' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '8' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','9' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '10' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'])}}
              </td>
              <td>
              {{Form::text('Q2_comment')}}
                </td>
        </tr>
              <tr>
                <td>3</td>
              <td>Sustainability / Business Aspects of the Solution</td>
        <td>15</td>
              <td>
              {{Form::select('Q3_score', ['1' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '2' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','3' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '4' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','5' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '6' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','7' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '8' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','9' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '10' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'])}}
              </td>
              <td>
              {{Form::text('Q3_comment')}}
                </td>
              </tr>
              <tr>
                <<td>4</td>
              <td>Additional Marks</td>
        <td>5</td>
              <td>
              {{Form::select('Q4_score', ['1' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '2' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','3' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '4' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','5' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '6' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','7' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '8' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','9' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '10' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'])}}
              </td>
              <td>
              {{Form::text('Q4_comment')}}
                </td>
              </tr>
              <tr><td align="center" colspan="5">{{Form::submit('Submit')}}</td></tr>
            </table>

                {!! Form::close() !!}
            </ul>



		</article>




			<footer class="clear">
				<p>&copy; 2015 sitename. <a href="http://zypopwebtemplates.com/">Free CSS Templates</a> by ZyPOP</p>
			</footer>

		</section>

		<div class="clear"></div>

	</section>


</body>
</html>
