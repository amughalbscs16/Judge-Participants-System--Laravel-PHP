@extends('layouts.master')

@section('panel-heading')
    <div class="panel-heading">Home</div>
    @if($message)
        {{$message}}
    @endif
@endsection

@section('nav')
    <nav class="nav">
        <a class="nav-link disabled" href="{{route('logout')}}">Logout</a>
    </nav>

    <h2>Welcome To Volunteer Home</h2>
    @endsection

    @section('content')
    </br>

    <h3>Find a Judge or Team</h3>

    <h4>{{Form::open(['route' => 'volunteerJudgeParticipant'])}}
        Find Judge Assigned to Team with TeamID #: {{ Form::radio('find', 'judge') }}<br/>
        Find Teams Assigned to Judge with UserID #: {{ Form::radio('find', 'team') }}<br/>
        Enter ID: {{ Form::text('id') }}
        {{ Form::submit('Search') }}<br/>
        <b>Note: To find Judge enter team id, To Find Teams enter Judge ID</b>
    </h4>

    @if($role!="search")
        <h2>Fetched Data</h2>

        @if($role == "judge" || $role=="Judge")
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Judge ID</th>
                    <th scope="col">Name</th>
                    {{--<th scope="col">Assigned Team IDs</th>--}}
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->name}}</td>
                    {{--<td>
                        $temp = ""
                        @foreach ($ids as $id)
                            {{$temp}} = {{$temp}} + {{$id->id}} + ", "
                        @endforeach
                        {{$temp}}
                    </td>--}}
                </tr>
                </tbody>
            </table>
        @elseif($role == "team" || $role=="Team")
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Team ID</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Captain Name</th>
                    <th scope="col">Team Member # 1</th>
                    <th scope="col">Team Member # 2</th>
                    <th scope="col">Team Member # 3</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $jp)
                    <tr>
                        <th scope="row">{{$jp->id}}</th>
                        <td>{{$jp->project_name}}</td>
                        <td>{{$jp->captain_name}}</td>
                        <td>{{$jp->team_member1}}</td>
                        <td>{{$jp->team_member2}}</td>
                        <td>{{$jp->team_member3}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    @endif
@endsection