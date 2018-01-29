@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="/uploads/avatars/{{Auth::user()->avatar}}" style="width: 150px; height: 100px; float: left; border-radius: 50%; margin-right: 25px;">
            <h3>{{Auth::user()->name}}'s Profile</h3>
            <form action="/profile" method="post" enctype="multipart/form-data">
                <label for="">Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary" value="Submit">
            </form>
        </div>
    </div>
</div>
@endsection
