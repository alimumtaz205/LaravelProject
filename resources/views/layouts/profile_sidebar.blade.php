<div class="col-md-3">
        <div class="card">
            <div class="card-header">SIDEBAR</div>
            <img src="/img/avatar/{{Auth::user()->avatar}}" alt="profile_picture" style="width:253px;
            height:300px;  ">
            </div>
            <br>
            <div class="card">
                <div class="card-header">UPDATE PROFILE</div>
                <a href="{!! route('profile')!!}" class="btn btn-primary btn-block">Profile Setting</a>
                <a href="{!! route('profileavatar')!!}" class="btn btn-primary btn-block">Upload Picture</a>
                <a href="{!! route('changepassword')!!}" class="btn btn-primary btn-block">Change Password</a>
                <br>
       </div>
</div>