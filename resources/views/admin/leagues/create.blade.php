@extends('admin.layouts.app')

@section('title','Admin - League Create')

@section('body')

    <div class="main-content">
        <div class="content-heading clearfix">
            <div class="heading-left">
                @if($league_model->isUpdate == 1)
                    <h1 class="page-title">Update League</h1>
                @else
                    <h1 class="page-title">Create League</h1>
                @endif
            </div>
            <ul class="breadcrumb">
                <li><a href="/admin/admin"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="/admin/leagues">League</a></li>
                @if($league_model->isUpdate == 1)
                    <li class="active">Update League</li>
                @else
                    <li class="active">Create League</li>
                @endif
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- SUBMIT TICKETS -->
                    <div class="panel">
                        <div class="panel-heading">
                            @if($league_model->isUpdate == 1)
                                <h3 class="panel-title">Update League</h3>
                            @else
                                <h3 class="panel-title">Create League</h3>
                            @endif
                        </div>
                        <div class="panel-body">
                            @if($league_model->isUpdate == 1)
                                {{ Form::model($league_model, array('route' => array('leagues.update', $league_model->id), 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) }}
                            @else
                                {{ Form::model($league_model, array('route' => array('leagues.create'), 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) }}
                            @endif
                            <fieldset>
                                <legend>General Information</legend>
                                <div class="form-group">
                                    <label for="league_name" class="col-sm-3 control-label">League Name</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('league_name', $league_model->league_name, array('class' => 'form-control', 'id' => 'league_name')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="number_of_maps" class="col-sm-3 control-label">Number Of Maps</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('number_of_maps', $league_model->number_of_maps, array('class' => 'form-control', 'id' => 'number_of_maps')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="points_per_map" class="col-sm-3 control-label">Points per Map</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('points_per_map', $league_model->points_per_map, array('class' => 'form-control', 'id' => 'points_per_map')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="league_level" class="col-sm-3 control-label">League Level</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('league_level',$league_model->league_level, array('class' => 'form-control', 'id' => 'league_level')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="teams_per_league" class="col-sm-3 control-label">Teams per League</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('teams_per_league', $league_model->teams_per_league, array('class' => 'form-control', 'id' => 'teams_per_league')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="league_start_date" class="col-sm-3 control-label">League Start Date</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('league_start_date', $league_model->league_start_date, array('class' => 'form-control', 'id' => 'league_start_date', 'data-provide' => 'datepicker', 'data-date-autoclose' => 'true', 'data-date-format' => 'dd/mm/yyyy')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="matchday_start_date" class="col-sm-3 control-label">Matchday Start Date</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('matchday_start_date', $league_model->matchday_start_date, array('class' => 'form-control', 'id' => 'matchday_start_date', 'data-provide' => 'datepicker', 'data-date-autoclose' => 'true', 'data-date-format' => 'dd/mm/yyyy')) }}
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <hr/>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-6">
                                        <button type="submit" class="btn btn-primary btn-block">@if($league_model->isUpdate != 1) Create @endif @if($league_model->isUpdate == 1) Update @endif</button>
                                    </div>
                                </div>
                            </fieldset>
                            {{ Form::close() }}
                        </div>
                    </div>
                    <!-- END SUBMIT TICKETS -->
                </div>
            </div>
        </div>
    </div>

@endsection