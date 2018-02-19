@extends('layouts.app')

@section('title','Team Information')

@section('body')

    <!-- Page Heading
    ================================================== -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    @if(empty($team_model))
                        <h1 class="page-heading__title">Create <span class="highlight">Team</span></h1>
                    @else
                        <h1 class="page-heading__title"><span class="highlight">{{$team_model->team_name}}</span></h1>
                    @endif
                    <ol class="page-heading__breadcrumb breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">The Team</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Pages Filter -->
    {{--<nav class="content-filter">--}}
        {{--<div class="container">--}}
            {{--<a href="#" class="content-filter__toggle"></a>--}}
            {{--<ul class="content-filter__list">--}}
                {{--<li class="content-filter__item "><a href="team-overview.html" class="content-filter__link"><small>The Team</small>Overview</a></li>--}}
                {{--<li class="content-filter__item content-filter__item--active"><a href="team-roster-1.html" class="content-filter__link"><small>The Team</small>Roster</a></li>--}}
                {{--<li class="content-filter__item "><a href="team-standings.html" class="content-filter__link"><small>The Team</small>Standings</a></li>--}}
                {{--<li class="content-filter__item "><a href="team-last-results.html" class="content-filter__link"><small>The Team</small>Latest Results</a></li>--}}
                {{--<li class="content-filter__item "><a href="team-schedule.html" class="content-filter__link"><small>The Team</small>Schedule</a></li>--}}
                {{--<li class="content-filter__item "><a href="team-gallery.html" class="content-filter__link"><small>The Team</small>Gallery</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</nav>--}}
    <!-- Team Pages Filter / End -->

    @if(!empty($team_model))

        <div class="site-content">
            <div class="container">

                <!-- Team Roster: Slider -->
                <div class="team-roster team-roster--slider">

                    @foreach($team_players as $key => $tp)

                        <div class="team-roster__item">
                            <!-- Player Photo -->
                            <figure class="team-roster__img">
                                <img src="{{asset('images/samples/rosterv2_player_01.png')}}" alt="">
                                <div class="team-roster__img-ring-top"></div>
                                <div class="team-roster__img-ring-bottom"></div>
                            </figure>
                            <!-- Player Photo / End-->
                            <!-- Player Details -->
                            <div class="team-roster__player-details">
                                <div class="team-roster__player-number">{{$key+1}}</div>
                                <div class="team-roster__player-info">
                                    <h3 class="team-roster__player-name">
                                        <span class="team-roster__player-first-name">Player:</span>
                                        <span class="team-roster__player-last-name">{{$tp->username}}</span>
                                    </h3>
                                    <div class="team-roster__player-position">{{$tp->t_role}}</div>
                                </div>
                            </div>
                            <!-- Player Details / End -->
                            <!-- FAB (More Info)-->
                            <div class="team-roster__player-fab">
                                <a href="#" class="team-roster__player-more">
                                    <span class="btn-fab btn-fab--sm"></span>
                                    <span class="team-roster__player-fab-txt">Check the<br>Player's Bio</span>
                                </a>
                            </div>
                            <!-- FAB (More Info) / End -->
                        </div>

                    @endforeach

                </div>
                <!-- Team Roster: Slider / End -->


                <div class="row">
                    <!-- Team Roster: Table -->
                    <div class="col-md-8">
                        <div class="card card--has-table">
                            <div class="card__header">
                                <h4 style="display:inline-block;">Active Roster</h4>
                                @if($team_model->captain_user_id == \Illuminate\Support\Facades\Auth::user()->id)
                                    <a href="/profile/team/edit/{{$team_model->team_id}}" class="btn btn-danger btn-outline pull-right">Update Team</a>
                                @endif
                            </div>
                            <div class="card__content">
                                <div class="table-responsive">
                                    <table class="table table--lg team-roster-table">
                                        <thead>
                                        <tr>
                                            <th class="team-roster-table__number">#</th>
                                            <th class="team-roster-table__name">Player Name</th>
                                            <th class="team-roster-table__position hidden-xs hidden-sm">Role(s)</th>
                                            <th class="team-roster-table__age">Age</th>
                                            <th class="team-roster-table__height">K/D Ratio</th>
                                            <th class="team-roster-table__weight">ADR</th>
                                            <th class="team-roster-table__college hidden-xs hidden-sm">Country</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($team_players as $key => $tp)

                                            <tr>
                                                <td class="team-roster-table__number">{{$key+1}}</td>
                                                <td class="team-roster-table__name">{{$tp->username}}</td>
                                                <td class="team-roster-table__position hidden-xs hidden-sm">{{$tp->t_role}}</td>
                                                <td class="team-roster-table__age">{{empty($tp->age) ? 'N/A' : $tp->age}}</td>
                                                <td class="team-roster-table__height">N/A</td>
                                                <td class="team-roster-table__weight">N/A</td>
                                                <td class="team-roster-table__college hidden-xs hidden-sm">{{empty($tp->country) ? 'N/A' : $tp->country}}</td>
                                            </tr>

                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Roster: Table / End -->

                    <!-- Featured Player -->
                    <div class="col-md-4">

                        <!-- Widget: Featured Player - Alternative Extended -->
                        <aside class="widget card widget--sidebar widget-player widget-player--alt">
                            <div class="widget__title card__header">
                                <h4>Featured Player</h4>
                            </div>
                            <div class="widget__content card__content">
                                <div class="widget-player__team-logo">
                                    <img src="{{asset('images/logo.png')}}" alt="">
                                </div>
                                <figure class="widget-player__photo">
                                    <img src="{{asset('images/samples/widget-featured-player.png')}}" alt="">
                                </figure>
                                <header class="widget-player__header clearfix">
                                    <div class="widget-player__number">38</div>
                                    <h4 class="widget-player__name">
                                        <span class="widget-player__first-name">N/A</span>
                                        <span class="widget-player__last-name">N/A</span>
                                    </h4>
                                </header>
                                <div class="widget-player__content">
                                    <div class="widget-player__content-inner">
                                        <div class="widget-player__stat widget-player__assists">
                                            <h6 class="widget-player__stat-label">Assists</h6>
                                            <div class="widget-player__stat-number">N/A</div>
                                            <div class="widget-player__stat-legend">AVG</div>
                                        </div>
                                        <div class="widget-player__stat widget-player__steals">
                                            <h6 class="widget-player__stat-label">Steals</h6>
                                            <div class="widget-player__stat-number">N/A</div>
                                            <div class="widget-player__stat-legend">AVG</div>
                                        </div>
                                        <div class="widget-player__stat widget-player__blocks">
                                            <h6 class="widget-player__stat-label">Blocks</h6>
                                            <div class="widget-player__stat-number">N/A</div>
                                            <div class="widget-player__stat-legend">AVG</div>
                                        </div>
                                    </div>
                                </div>
                                <footer class="widget-player__footer">
                                  <span class="widget-player__footer-txt">
                                    1st Shooting Guard
                                  </span>
                                </footer>
                            </div>

                            <div class="widget__content-tertiary widget__content--bottom-decor">
                                <div class="widget__content-inner">
                                    <div class="widget-player__stats row">
                                        <div class="col-xs-4">
                                            <div class="widget-player__stat-item">
                                                <div class="widget-player__stat-circular circular">
                                                    <div class="circular__bar" data-percent="88">
                                                        <span class="circular__percents">88<small>%</small></span>
                                                    </div>
                                                    <span class="circular__label">Shot<br> Accuracy</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="widget-player__stat-item">
                                                <div class="widget-player__stat-circular circular">
                                                    <div class="circular__bar" data-percent="63">
                                                        <span class="circular__percents">63<small>%</small></span>
                                                    </div>
                                                    <span class="circular__label">Pass<br> Accuracy</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="widget-player__stat-item">
                                                <div class="widget-player__stat-circular circular">
                                                    <div class="circular__bar" data-percent="75.5">
                                                        <span class="circular__percents">75.5<small>%</small></span>
                                                    </div>
                                                    <span class="circular__label">Total<br> Efficiency</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- Widget: Featured Player - Alternative Extended / End -->


                    </div>
                    <!-- Featured Player / End -->
                </div>
            </div>
        </div>

    @else

        <div class="site-content">
            <div class="container">

                <div class="card">
                    <header class="card__header">
                        <h4>Team Create</h4>
                    </header>
                    <div class="card__content" style="text-align:center;">
                        <a href="/profile/team/create" class="btn btn-primary btn-lg">Create Team</a>
                    </div>
                </div>
            </div>
        </div>

    @endif

@endsection