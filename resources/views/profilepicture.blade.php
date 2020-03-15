@extends('layouts.app')

@section('content')
<div class="container">

@if(session()->get('message'))
<div class='alert alert-success' role='alert'>
<strong>SUCCESS:</strong>{{session()->get(' message')}}
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
                    <form enctype="multipart/form-data" action="{!!route('profileavatar')!!}" 
                    method="post">
                    @csrf

                    <div class="form-group">
                    <input type="file" name="avatar" class="form-control">
                    <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}">
                     </div>                   
                    <button class="btn btn-primary" type="submit">Upload Picture</button>
                    </div>
                    </form> 
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection
