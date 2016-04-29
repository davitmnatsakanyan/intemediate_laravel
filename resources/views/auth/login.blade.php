@extends('auth.layouts.master')
@section('content')
    <div class="container">
        <div class="sign_in" style="background-color: white; width: 300px; margin-right: auto; margin-left: auto; border: 1px solid gray; padding-left: 20px; padding-right: 20px; border-radius: 5px; margin-top: 50px">

            <h2 class="form-signin-heading">Please sign in</h2>
            @if(count($errors) > 0)
            <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                <li style="list-style-type: none">{{ $error }}</li>
            @endforeach
            </div>
            @endif

            <form class="form-signin" method="post" action="/auth/login">

                {!! csrf_field() !!}

                <div class="form-group">
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email address" required autofocus>
                </div>

                <div class="form-group">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                </div>

                <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                </div>

                <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </div>

            </form>
        </div>

    </div> <!-- /container -->
    @endsection