@extends('.layouts.app')

@section('title','Login')

@section('body')

    <div class="col-sm-6 reg-column">
        <div class="reg-form">
            <h3>Login</h3>
            <form class="form-horizontal" method="POST" action="/login">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                    @if ($errors->has('message'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                    <label for="username" class="col-md-4 control-label">Username</label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                        @if ($errors->has('username'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Login
                        </button>

                        <a class="btn btn-link" href="#">
                            Forgot Your Password?
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-sm-6 reg-column">
        <div class="reg-form">
            <h3>Login with</h3>

            <div style="text-align:center;margin-top:10px;margin-bottom:30px;">
                <div class="row" style="padding-top:20px;">
                    <a href="auth/steam"><img src="{{asset('../images/steam_login.png')}}"></a>
                </div>
                <div class="row" style="padding-top:20px;">
                    <button class="btn btn-facebook"><i class="fa fa-facebook"></i> | Register with Facebook</button>
                </div>

            </div>

        </div>
    </div>

@endsection