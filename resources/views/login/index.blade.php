@extends('.layouts.app')

@section('title','Login')

@section('body')


    <!-- Page Heading
    ================================================== -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="page-heading__title">Login and <span class="highlight">Register</span></h1>
                    <ol class="page-heading__breadcrumb breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Login or Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Content
    ================================================== -->
    <div class="site-content">
        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <!-- Login -->
                    <div class="card">
                        <div class="card__header">
                            <h4>Login to your Account</h4>
                        </div>
                        <div class="card__content">

                            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                @if ($errors->has('message'))
                                    <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- Login Form -->
                            <form class="form-horizontal" method="POST" action="/login">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username..." required autofocus>
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('login_password') ? ' has-error' : '' }}">
                                    <label for="login_password">Password</label>
                                    <input type="password" name="login_password" id="login_password" class="form-control" placeholder="Enter your password..." required>
                                    @if ($errors->has('login_password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('login_password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group form-group--password-forgot">
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" id="inlineCheckbox1" value="option1" checked> Remember Me
                                        <span class="checkbox-indicator"></span>
                                    </label>
                                    <span class="password-reminder">Forgot your password? <a href="#">Click Here</a></span>
                                </div>
                                <div class="form-group form-group--sm">
                                    <button type="submit" class="btn btn-primary-inverse btn-lg btn-block">Sign in to your account</button>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn btn-facebook btn-icon btn-block"><i class="fa fa-facebook"></i> Sign In via Facebook</button>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="auth/steam"><img src="{{asset('../images/steam_login.png')}}"></a>
                                    </div>
                                </div>
                            </form>
                            <!-- Login Form / End -->

                        </div>
                    </div>
                    <!-- Login / End -->
                </div>

                <div class="col-md-6">

                    <!-- Register -->
                    <div class="card">
                        <div class="card__header">
                            <h4>Register Now</h4>
                        </div>
                        <div class="card__content">

                            <!-- Register Form -->
                            <form class="form-horizontal" method="POST" action="/register">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <label for="username">Your Username</label>
                                    <input type="text" name="username" id="username" value="{{ old('username') }}" class="form-control" placeholder="Enter your username..." required>

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">Your Email</label>
                                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email address..." required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password">Your Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password..." required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif

                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">Repeat Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Repeat your password..." required>
                                </div>
                                <div class="form-group form-group--submit">
                                    <button type="submit" class="btn btn-default btn-lg btn-block">Create Your Account</button>
                                </div>
                            </form>
                            <!-- Register Form / End -->

                        </div>
                    </div>
                    <!-- Register / End -->
                </div>

            </div>
        </div>
    </div>

    <!-- Content / End -->

@endsection