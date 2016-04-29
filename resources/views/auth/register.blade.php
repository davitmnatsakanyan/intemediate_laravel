@extends('auth.layouts.master')
@section('content')
<div class="container">
    <div class="sign_in" style="background-color: white; width: 300px; margin-right: auto; margin-left: auto; border: 1px solid gray; padding-left: 20px; padding-right: 20px; border-radius: 5px; margin-top: 50px">

        <h2 class="form-signin-heading">Please register</h2>
        @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
            <li style="list-style-type: none">{{ $error }}</li>
        @endforeach
        </div>
        @endif

        <form class="form-signin" method="post" action="/auth/register">

            {!! csrf_field() !!}

            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" name="name" class="form-control" placeholder="Your Name"  value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" d="inputEmail" name="email" placeholder="Your Email" class="form-control" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="inputPassword">Password</label>
                <input id="inputPassword" type="password" name="password" class="form-control" placeholder="Password" >
            </div>

            <div class="form-group">
                <label for="inputPasswordConfirmation">Password</label>
                <input id="inputPasswordConfirmation" type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" >
            </div>

            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            </div>

        </form>
    </div>

</div> <!-- /container -->
    @endsection