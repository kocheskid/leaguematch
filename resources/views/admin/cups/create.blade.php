@extends('admin.layouts.app')

@section('title','Admin - Cup Create')

@section('body')

    <div class="main-content">
        <div class="content-heading clearfix">
            <div class="heading-left">
                @if($cup_model->isUpdate == 1)
                    <h1 class="page-title">Update Cup</h1>
                @else
                    <h1 class="page-title">Create Cup</h1>
                @endif
            </div>
            <ul class="breadcrumb">
                <li><a href="/admin/admin"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="/admin/cups">Cups</a></li>
                @if($cup_model->isUpdate == 1)
                    <li class="active">Update Cup</li>
                @else
                    <li class="active">Create Cup</li>
                @endif
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <!-- SUBMIT TICKETS -->
                    <div class="panel">
                        <div class="panel-heading">
                            @if($cup_model->isUpdate == 1)
                                <h3 class="panel-title">Update Cup</h3>
                            @else
                                <h3 class="panel-title">Create Cup</h3>
                            @endif
                        </div>
                        <div class="panel-body">
                            @if($cup_model->isUpdate == 1)
                                {{ Form::model($cup_model, array('route' => array('cups.update', $cup_model->id), 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) }}
                            @else
                                {{ Form::model($cup_model, array('route' => array('cups.create'), 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) }}
                            @endif
                            <fieldset>
                                <legend>General Information</legend>
                                <div class="form-group">
                                    <label for="cupname" class="col-sm-3 control-label">Cup Name</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('cupname', $cup_model->cupname, array('class' => 'form-control', 'id' => 'cupname')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="teams_number" class="col-sm-3 control-label">Number Of Teams</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('teams_number', $cup_model->teams_number, array('class' => 'form-control', 'id' => 'teams_number')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="teams_number" class="col-sm-3 control-label">Team Type</label>
                                    <div class="col-sm-9">
                                        {{ Form::select('team_type', \App\HelperModel::getTeamTypes(), $cup_model->team_type, array('class' => 'form-control', 'id' => 'team_type')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="start_date" class="col-sm-3 control-label">Start Date</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('start_date',$cup_model->start_date, array('class' => 'form-control datetimepicker4', 'required' => 'true')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="first_prize" class="col-sm-3 control-label">First Prize</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('first_prize', $cup_model->first_prize, array('class' => 'form-control', 'id' => 'first_prize')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="second_prize" class="col-sm-3 control-label">Second Prize</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('second_prize', $cup_model->second_prize, array('class' => 'form-control', 'id' => 'second_prize')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="third_prize" class="col-sm-3 control-label">Third Prize</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('third_prize', $cup_model->third_prize, array('class' => 'form-control', 'id' => 'third_prize')) }}
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <hr/>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-6">
                                        <button type="submit" class="btn btn-primary btn-block">@if($cup_model->isUpdate != 1) Create @endif @if($cup_model->isUpdate == 1) Update @endif</button>
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