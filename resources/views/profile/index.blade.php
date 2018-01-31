@extends('layouts.app')

@section('title','My Profile')

@section('body')

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/countries.js')}}"></script>

    <div class="player-heading">
        <div class="container">

            <div class="player-info__team-logo">
                {{--<img src="{{asset('images/logo-outplayed.png')}}" alt="">--}}
            </div>

            <div class="player-info__title player-info__title--mobile">
                {{--<div class="player-info__number">38</div>--}}
                <h1 class="player-info__name">
                    <span class="player-info__first-name">Username:</span>
                    <span class="player-info__last-name"><?php echo Auth::user()->username; ?></span>
                </h1>
            </div>

            <div class="player-info">

                <!-- Player Photo -->
                <div class="player-info__item player-info__item--photo">
                    <figure class="player-info__photo">
                        <img src="{{asset('images/samples/player-heading-photo.png')}}" alt="">
                    </figure>
                </div>
                <!-- Player Photo / End -->

                <!-- Player Details -->
                <div class="player-info__item player-info__item--details">

                    <div class="player-info__title player-info__title--desktop">
                        {{--<div class="player-info__number">38</div>--}}
                        <h1 class="player-info__name">
                            <span class="player-info__first-name">Username:</span>
                            <span class="player-info__last-name"><?php echo Auth::user()->username; ?></span>
                        </h1>
                    </div>

                    <div class="player-info-details">
                        <div class="player-info-details__item player-info-details__item--height">
                            <h6 class="player-info-details__title">First Name</h6>
                            <div class="player-info-details__value"><?php echo empty($user_details['first_name']) ? 'N/A' : $user_details['first_name']  ?></div>
                        </div>
                        <div class="player-info-details__item player-info-details__item--weight">
                            <h6 class="player-info-details__title">Last Name</h6>
                            <div class="player-info-details__value"><?php echo empty($user_details['last_name']) ? 'N/A' : $user_details['last_name']  ?></div>
                        </div>
                        <div class="player-info-details__item player-info-details__item--age">
                            <h6 class="player-info-details__title">Age</h6>
                            <div class="player-info-details__value"><?php echo empty($user_details['age']) ? 'N/A' : $user_details['age']  ?></div>
                        </div>
                        <div class="player-info-details__item player-info-details__item--born">
                            <h6 class="player-info-details__title">Country</h6>
                            <div class="player-info-details__value"><?php echo empty($user_details['country']) ? 'N/A' : $user_details['country']  ?></div>
                        </div>
                        <div class="player-info-details__item player-info-details__item--position">
                            <h6 class="player-info-details__title">City</h6>
                            <div class="player-info-details__value"><?php echo empty($user_details['city']) ? 'N/A' : $user_details['city']  ?></div>
                        </div>
                    </div>

                    {{--<div class="player-info-stats">--}}
                        {{--<div class="player-info-stats__item">--}}
                            {{--<div class="circular">--}}
                                {{--<div class="circular__bar" data-percent="88" data-track-color="#4c5d6f">--}}
                                    {{--<span class="circular__percents">9.6<small>avg</small></span>--}}
                                {{--</div>--}}
                                {{--<span class="circular__label"><strong>Points</strong> per game</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="player-info-stats__item">--}}
                            {{--<div class="circular">--}}
                                {{--<div class="circular__bar" data-percent="75" data-track-color="#4c5d6f">--}}
                                    {{--<span class="circular__percents">4.5<small>avg</small></span>--}}
                                {{--</div>--}}
                                {{--<span class="circular__label"><strong>Assists</strong> per game</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="player-info-stats__item">--}}
                            {{--<div class="circular">--}}
                                {{--<div class="circular__bar" data-percent="60" data-track-color="#4c5d6f">--}}
                                    {{--<span class="circular__percents">2.8<small>avg</small></span>--}}
                                {{--</div>--}}
                                {{--<span class="circular__label"><strong>Rebounds</strong> per game</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <!-- Player Details / End -->

                <!-- Player Stats -->
                {{--<div class="player-info__item player-info__item--stats">--}}
                    {{--<canvas id="player-stats" class="player-info-chart" height="290"></canvas>--}}
                {{--</div>--}}
                <!-- Player Stats / End -->
            </div>
        </div>
    </div>

    <div class="site-content">
        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <!-- Account Navigation -->
                    <div class="card">
                        <div class="card__header" style="text-align:center;">
                            @if(empty(Auth::user()->avatar))
                                <img src="{{asset('images/samples/player-heading-photo.png')}}" alt="">
                            @else
                                @if(mb_substr(Auth::user()->avatar, 0, 5) == 'https')
                                    <img src="<?php echo Auth::user()->avatar; ?>"/>
                                @else
                                    <img src="{{asset('images/users_avatars/')}}/{{Auth::user()->avatar}}"/>
                                @endif
                            @endif

                        </div>
                        <div class="card__content">
                            <nav class="df-account-navigation">
                                <ul>
                                    <li class="df-account-navigation__link">
                                        <a href="#">Personal Information</a>
                                    </li>
                                    {{--<li class="df-account-navigation__link">--}}
                                        {{--<a href="#">Billing Information</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="df-account-navigation__link">--}}
                                        {{--<a href="#">Shipping Information</a>--}}
                                    {{--</li>--}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Account Navigation / End -->
                </div>

                <div class="col-md-8">

                    <!-- Personal Information -->
                    <div class="card card--lg">
                        <div class="card__header">
                            <h4>Personal Information</h4>
                        </div>
                        <div class="card__content">
                            <form action="#" method="post" class="df-personal-info">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                    @if ($errors->has('message'))
                                        <span class="help-block" style="color:red;">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group form-group--upload">
                                    <div class="form-group__avatar">

                                        @if(empty(Auth::user()->avatar))
                                            <img src="{{asset('images/samples/avatar-empty.png')}}" alt="">
                                        @else
                                            @if(mb_substr(Auth::user()->avatar, 0, 5) == 'https')
                                                <img src="<?php echo Auth::user()->avatar; ?>" width="60px"/>
                                            @else
                                                <img src="{{asset('images/users_avatars/')}}/{{Auth::user()->avatar}}" width="60px"/>
                                            @endif
                                        @endif

                                        <div class="form-group__label">
                                            <h6>Avatar</h6>
                                            <span>Minimum size 60x60px</span>
                                        </div>
                                    </div>
                                    <div class="form-group__upload">
                                        <label class="btn btn-default btn-xs btn-file">
                                            Upload Image... <input type="file" name="avatar_img" style="display: none;">
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" value="{{Auth::user()->email}}" name="email" id="email" placeholder="Your email...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" value="{{Auth::user()->username}}" name="username" id="username" placeholder="Your username..">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Change Password</label>
                                            <input type="password" class="form-control" value="" name="password" id="password" placeholder="**********">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password_confirmation">Repeat Password</label>
                                            <input type="password" class="form-control" value="" name="password_confirmation" id="password_confirmation" placeholder="**********">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" class="form-control" value="{{$user_details['first_name']}}" name="first-name" id="first-name" placeholder="Your first name...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" class="form-control" value="{{$user_details['last_name']}}" name="last-name" id="last-name" placeholder="Your last name...">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group form-group--sm">
                                    <label for="steamid">SteamID</label>
                                    <input type="text" class="form-control" value="{{Auth::user()->steamid}}" name="steamid" id="steamid">
                                </div>

                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <select name="country" id="country" class="form-control"></select>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="city">State or City</label>
                                            <select name="state" id="state" class="form-control"></select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="age">Age</label>
                                            <input type="number" name="age" id="age" value="{{$user_details['age']}}" class="form-control" min="1" max="99">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group--submit">
                                    <button type="submit" class="btn btn-default btn-lg btn-block">Update</button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- Personal Information / End -->
                </div>
            </div>
        </div>
    </div>
    <script language="javascript">
        populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
        populateCountries("country2");
        populateCountries("country2");
    </script>

@endsection