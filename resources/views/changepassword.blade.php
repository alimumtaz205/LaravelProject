@extends('layouts.app')

@section('content')
<div class="container">
    @if(session('error'))
    <div class="alert alert-danger" role="alert">
    {{session('error')}}
    </div>
    @endif

    <div class="row justify-content-center">
    <!--PROFILE SLIDRE START-->
    @include('layouts.profile_sidebar')
    <!--PROFILE SLIDRE END-->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">You are Logged in as {{Auth::user()->name}}</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{!!route('changepassword')!!}" method="post">
                    @csrf
                    <div class="form-group">
                    <label for="current_password"><strong>Current Password</strong></label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                    </div>
                    <div class="form-group">
                    <label for="new_password"><strong>New Password</strong></label>
                    <input type="password" class="form-control" id="new_password" name="new_password">
                    </div>
                    <div class="form-group">
                    <label for="current_password_confirmation   "><strong>Confirm New Password</strong></label>
                    <input type="password" class="form-control" id="current_password_confirmation" 
                    name="current_password_confirmation">
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Change Password</button>
                    </form> 
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
