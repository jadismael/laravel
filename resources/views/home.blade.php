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

                        <div class="panel-heading">List of Logins</div>


                        <!-- Table -->
                        <table class="table">
                            <tr>
                                <td>Name</td>
                                <td>UserID</td>
                                <td>Time</td>
                                <td>Group(s)</td>
                            </tr>

                            @foreach($aLogins as $aLogin)

                                <tr>
                                    <td> {{$aLogin['user']['name']}}</td>
                                    <td> {{$aLogin['user_id']}}</td>
                                    <td> {{$aLogin['time']}}</td>

                                  {{--  <td> {{$aLogin->user['groups']}}</td>--}}
                                    @php


       var_dump($aLogin['user']['groups']);
                                    @endphp
                      {{--            @foreach($aLogin['user']['groups'] as $group)
                                          @php

                                              var_dump($group);

                                          @endphp
                                      @endforeach--}}
                                </tr>
                            @endforeach
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
