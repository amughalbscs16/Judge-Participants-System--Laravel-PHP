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

						<div class="table-responsive">
                        {{Form::open(['route' => ['postjudgeaparticipant',$tid]])}}
                        <table class="table" width="100%" border="1">
                            <thead>
                                <tr>
                                    <th width="10%" scope="col">Sr. No.</th>
                                    <th width="30%" scope="col">Category</th>
                                    <th width="10%" scope="col">Weight [%]</th>
                                    <th width="20%" scope="col">Rating [1 - 10]</th>
                                    <th width="30%" scope="col">Comments</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td data-toggle="tooltip"
                                        title="• What is the key benefit from using the product and how does this address an unmet consumer need?
• What is the existing competition, if any (local / international)?">Unique Selling Proposition</td>
                                    <td>20</td>
                                    <td>
                                        {{Form::select('Q1_score', ['1' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '2' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','3' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '4' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','5' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '6' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','7' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '8' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','9' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '10' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'])}}
                                    </td>
                                    <td>
                                        {{Form::text('Q1_comment')}}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td data-toggle="tooltip"
                                    title="•	Is the target market clearly identified and mentioned?
• Has the team segmented the target market on the basis of demographic plus psychographic factors? Is the basis of segmentation clearly identified?
• What is the size of the target market?
• Has the team tweaked their product design to cater to different target segments’ behaviors and needs?
">Target Market Profile</td>
                                    <td>15</td>
                                    <td>
                                        {{Form::select('Q2_score', ['1' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '2' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','3' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '4' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','5' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '6' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','7' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '8' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','9' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '10' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'])}}
                                    </td>
                                    <td>
                                        {{Form::text('Q2_comment')}}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td data-toggle="tooltip"
                                        title="•	What is the quality of technical implementation?
• What is the quality of user interface design (if applicable)?
• Does the team have clarity on what the Minimum Viable Product (MVP) should look like?
• How close is the current implementation to MVP?
• Did the team get validation from potential customers and/or users? (Testimonial, proof of early interest) – IMPORTANT!
• Has the team considered scalability in their design and implementation? (So when the usage increases across applicable dimensions, like, number of users, storage, network spread etc, can the design, architecture and implementation support it)?
• Does it need significant refinement to make it commercializable?
• Have the key barriers to commercialization / up scaling identified by the team? How will they overcome these barriers?
">Technical Viability & Mass Deployment</td>
                                    <td>25</td>
                                    <td>
                                        {{Form::select('Q3_score', ['1' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '2' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','3' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '4' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','5' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '6' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','7' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '8' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','9' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '10' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'])}}
                                    </td>
                                    <td>
                                        {{Form::text('Q3_comment')}}
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</td>
                                    <td data-toggle="tooltip"
                                    title="•	Have the costs of taking the product to market (development, manufacturing, marketing, distribution, etc.) been identified? And have the basis / assumptions of the costs been mentioned?
•	Have they calculated the Revenue & Profit to be earned, along with the key assumptions and basis of this forecast?
•	Do they have a clear business model and does it seem a financially sustainable product / solution?
•	Are their financial numbers realistic?
Have they identified what their product’s market share / penetration will be?
">Commercial Viability & Business Plan</td>
                                    <td>20</td>
                                    <td>
                                        {{Form::select('Q4_score', ['1' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '2' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','3' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '4' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','5' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '6' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','7' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '8' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','9' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '10' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'])}}
                                    </td>
                                    <td>
                                        {{Form::text('Q4_comment')}}
                                    </td>
                                </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td data-toggle="tooltip"
                                    title="•	Have the roles been clearly defined by the team members?
•	Does the team contain the relevant skill set required to take the product to the market?
•	Have all technical skills and roles been clearly defined and assigned to team members?
•	Does the team follow a particular development or project management model and process?
">Team Composition</td>
                                <td>15</td>
                                <td>
                                    {{Form::select('Q5_score', ['1' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '2' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','3' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '4' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','5' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '6' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','7' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '8' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','9' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '10' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'])}}
                                </td>
                                <td>
                                    {{Form::text('Q5_comment')}}
                                </td>
                            </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td data-toggle="tooltip"
                                        title="•	Projects that have an interest from Industry or any Mentor to be given additional marks. This parameter covers 2 scenarios: if students submitted the idea & Industry showed interest, or if students have made an effort to bring on board the Industry for their respective project.">
                                        Industry Mentoring</td>
                                    <td>5</td>
                                    <td>
                                        {{Form::select('Q6_score', ['1' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '2' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','3' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '4' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','5' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '6' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','7' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '8' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;','9' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '10' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'])}}
                                    </td>
                                    <td>
                                        {{Form::text('Q6_comment')}}
                                    </td>
                                </tr>

                            <tr>
                                <th scope="row">-</th>
                                <td>Qualitative Assessment</td>
                                <td colspan="3">{{Form::textarea('qlty_assessment')}}</td>
                            </tr>
                            </tbody>

                            <tr>
                                <td align="center" colspan="5">{{Form::submit('Submit')}}</td>
                            </tr>
                        </table>

                        {!! Form::close() !!}
						</div>
                    </div>

                    <div class="panel-footer">FICS '18</div>
                </div>
            </div>
        </div>
    </div>
@endsection