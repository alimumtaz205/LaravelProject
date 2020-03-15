@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @include('layouts.profile_sidebar')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">You are Logged in as {{Auth::user()->name}}</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <br><br>
                        <h2>DASHBOARD</h2>
                        <a>Welcome <b>{{Auth::user()->name}}</b></a>
                        <a>to the Laravel Project using mySQL server</a>
                        <br>
                        <a></a>
                        <br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
