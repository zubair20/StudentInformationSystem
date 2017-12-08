@extends('layouts.app')
<style>
    body{
        padding: 0px;
        margin: 0px;
        background: url("{{ asset('/myimages/img1.jpg') }}");
        background-size: cover;
        font-family: sans-serif;
    }
    .loginBox{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 420px;
        height: 600px;
        box-sizing: border-box;
        background: rgba(0,0,0,0.5);
        padding: 60px 40px;
    }
    .user{
        width: 100px;
        height: 100px;
        border-radius: 50%;
        overflow: hidden;
        position: absolute;
        top: calc(-100px/2);
        left: calc(160px);
    }
    
    .loginBox p{
        margin: 0;
        padding: 0;
        font-weight: bold;
        color: #fff;

    }
    .loginBox input{
        width: 100%;
        margin-bottom: 16px;
    }
    
    .loginBox input[type="email"],
    .loginBox input[type="password"]{
        width: 100%;
        margin-bottom: 16px;
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }
    ::placeholder{
        color: rgba(255,255,255,.5);
    }
    .loginBox input[type="submit"]{
        border: none;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
        background: #ff267e;
        cursor: pointer;
        border-radius: 20px;
    }
    .loginBox input[type="checkbox"]{
        width: 15px;
        height: 15px;
    }
    .loginBox input[type="submit"]:hover{
        background: #efed40;
        color: #262626;
    }
    .loginBox a{
        color:#fff;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
    }
    .checkbox{
        padding-bottom: 16px;
    }
    a.slogin, a.flogin{
        border-radius: 20px;
        height: 40px;
        font-size: 16px;
        font-weight: normal;
        margin-bottom: 16px; 
    }
    h2.title{
        margin: 0;
        padding: 0 0 20px;
        color: white;
        text-align: center;
    }
    a.forgot, .remember{
        color: white;

    }
    span.help-block > strong{
        color: #ff267e;
    }
</style>
@section('content')

    <div class="loginBox">
        <img src="{{ asset('/myimages/user.png') }}" alt="" class="user" >
        <h2 class="title">Admin Login Here</h2>
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                <p>Email</p>
                <input id="email" type="email" name="email" placeholder="Enter Email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                <p>Password</p>
                <input id="password" type="password" name="password" placeholder="*********" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
                <div class="checkbox">
                    <label class="remember">
                        <input type="checkbox" class="form-control" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember
                    </label>
                </div>
            <input type="submit" value="Login" >
            <a class="btn btn-link forgot" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a> 
        </form><hr>
        <a href="" class="btn btn-primary btn-block slogin" >Student Login</a>
        <a href="" class="btn btn-Success btn-block flogin">Faculty Login</a>
    </div>
    
@endsection
