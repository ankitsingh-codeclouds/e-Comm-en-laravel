@extends('master')
@section("content")
<div class="container custom-login">
    
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form action="register" method="POST">
        <h3>Please sign up for Shopping !</h3>
        @csrf
        @foreach ($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" name="name " placeholder="Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-default">Register</button>
        </form>
        </div>
    </div>
</div>
@endsection