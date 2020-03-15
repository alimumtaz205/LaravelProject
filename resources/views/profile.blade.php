@extends('layouts.app')

@section('content')
<div class="container">





@if(session()->get('message'))
<div class='alert alert-success' role='alert'>
<strong>SUCCESS:</strong>&nbsp;{{session()->get('message')}}
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
                    <form action="{!!route('profileupdate')!!}" method="post">
                    @csrf
                    <div class="form-group">
                    <label for="name"><strong>Name</strong></label>
                    <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name
                    }}">
                    </div>
                    <label for="name"><strong>Email</strong></label>
                    <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}">
                    <br>
                    <button class="btn btn-primary" type="submit">Update Profile</button>
                    </div>
                    </form> 
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
