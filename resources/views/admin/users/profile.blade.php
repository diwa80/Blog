@extends('layouts.app')

@section('content')

@if(count($errors)>0)
<ul class="list-group">
@foreach($errors->all() as $error)
<li class="list-group-item text-danger">
{{$error}}
</li>
@endforeach
</ul>
@endif
    <div class="card">
        <div class="card-header">
            Edit profile
        </div>

        <div class="card-body">
            <form action="{{route('user.profile.update')}}" method="post" >
            {{csrf_field()}}

            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name" value="{{$user->name}}" class= "form-control">
            </div>

            <div class="form-group">
                <label for="name">Email</label>
                <input type="email" name="email" value="{{$user->email}}" class= "form-control">
            </div>

            <div class="form-group">
                <label for="name">New Password</label>
                <input type="password" name="password" class= "form-control">
            </div>

            <div class="form-group">
                <label for="name">Avatar</label>
                <input type="file" name="avatar" class= "form-control">
            </div>

            <div class="form-group">
                <label for="name">Facebook</label>
                <input type="text" name="facebook" value="{{$user->facebook}}" class= "form-control">
            </div>

            <div class="form-group">
                <label for="name">Youtube</label>
                <input type="text" name="youtube" value="{{$user->youtube}}" class= "form-control">
            </div>

             <div class="form-group">
             <label for="about">About you</label>
             <textarea name="about" id="about" cols="90" rows="6">{{$user->about}}</textarea>
             </div>


            <div class="form-group">
            <div class="text-center">
            <button class="btn btn-success" type="submit">
            Add user
            </button>
            </div>

            </div>
            </form>
        </div>
    </div>

@endsection