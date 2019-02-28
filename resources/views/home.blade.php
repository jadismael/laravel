@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <h3>Filter by Date</h3>
                        <ul class="list-group">

                            <il>
                                <form action="{{ route('home') }}" method="get">
                                    <input type="date" id="start" name="date"
                                           value="2019-02-28">
                                    <input type="submit" value="Submit">
                                </form>
                            </il>

                            <ul class="list-group">
                                <h4>Preset Dates</h4>
                                <il>
                                    <a href="{{ route('home') }}?this_week=1">Current Week</a>
                                </il>
                                <il>
                                    <a href="{{ route('home') }}?this_year=1">Current Year</a>
                                </il>
                                <il>
                                    <a href="{{ route('home') }}?last_three_month=1">Last 3 months</a>
                                </il>
                            </ul>
                        </ul>


                        <h3> Filter by User</h3>
                        <ul class="list-group">
                            @foreach($aUsers as $aUser)
                                <il>
                                    <a href="{{ route('home') }}?user_id={{$aUser->id}}"> {{$aUser->name}}</a>
                                </il>

                            @endforeach
                        </ul>
                        <h3> Filter by Group</h3>
                        <ul class="list-group">
                            @foreach($aGroups as $aGroup)
                                <il>
                                    <a href="{{ route('home') }}?group_id={{$aGroup->group_id}}"> {{$aGroup->name}}</a>
                                </il>

                            @endforeach
                        </ul>
                        <!-- Table -->
                            <div class="panel-heading"><h2>List of Logins</h2></div>
                        <table class="table">
                            <tr>
                                <td>Name</td>
                                <td>UserID</td>
                                <td>Action</td>
                                <td>Time</td>
                                <td>Group</td>
                            </tr>

                            @foreach($aLogins as $aLogin)
                                <tr>
                                    <td> {{$aLogin->user['name']}}</td>
                                    <td> {{$aLogin->user_id}}</td>
                                    <td>{{$aLogin->login_type}}</td>
                                    <td> {{$aLogin->time}}</td>
                                    <td>
                                        {{$aLogin->user['groups']['groupname']['name']}}
                                    </td>
                                </tr>
                            @endforeach
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
