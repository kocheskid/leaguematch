@extends('admin.layouts.app')

@section('title','Admin - Team Edit')

@section('body')

    <div class="main-content">
        <div class="content-heading clearfix">
            <div class="heading-left">
                @if($team_model->isUpdate == 1)
                    <h1 class="page-title">Update Team</h1>
                @else
                    <h1 class="page-title">Create Team</h1>
                @endif
            </div>
            <ul class="breadcrumb">
                <li><a href="/admin/admin"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="/admin/teams">Teams</a></li>
                @if($team_model->isUpdate == 1)
                    <li class="active">Update Team</li>
                @else
                    <li class="active">Create Team</li>
                @endif
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <!-- SUBMIT TICKETS -->
                    <div class="panel">
                        <div class="panel-heading">
                            @if($team_model->isUpdate == 1)
                                <h3 class="panel-title">Update Team</h3>
                            @else
                                <h3 class="panel-title">Create Team</h3>
                            @endif
                        </div>
                        <div class="panel-body">
                            @if($team_model->isUpdate == 1)
                                {{ Form::model($team_model, array('route' => array('teams.update', $team_model->id), 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) }}
                            @else
                                {{ Form::model($team_model, array('route' => array('teams.create'), 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) }}
                            @endif
                            <fieldset>
                                <legend>General Information</legend>
                                <div class="form-group">
                                    <label for="team_name" class="col-sm-3 control-label">Team Name</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('team_name', $team_model->team_name, array('class' => 'form-control', 'id' => 'team_name')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="team_logo" class="col-sm-3 control-label">Team Members</label>
                                    <div class="col-sm-9">
                                        <ul>
                                            @if(!empty($team_members))
                                                @foreach($team_members as $tm)

                                                    <li><a href="{{ route('users.edit', $tm->id) }}">{{$tm->username}}</a></li>

                                                @endforeach

                                                @else

                                                    <li>No members</li>

                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                @if($team_model->isUpdate == 1)

                                    <div class="form-group">
                                        <label for="slide_img" class="col-sm-3 control-label">Team Logo</label>
                                        <div class="col-sm-9">
                                            <img src="{{asset('team_logos/')}}/{{$team_model->team_logo}}" width="120"/>
                                        </div>
                                    </div>

                                @endif
                                <div class="form-group">
                                    <label for="team_logo" class="col-sm-3 control-label">Update Team Logo</label>
                                    <div class="col-sm-9">
                                        {{ Form::file('team_logo', array('class' => 'form-control', 'id' => 'team_logo')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="team_description" class="col-sm-3 control-label">Team Description</label>
                                    <div class="col-sm-9">
                                        {{ Form::textarea('team_description', $team_model->team_description, array('class' => 'form-control', 'id' => 'team_description')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="join_password" class="col-sm-3 control-label">Team Join Password</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('join_password', $team_model->join_password, array('class' => 'form-control', 'id' => 'join_password')) }}
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <hr/>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-6">
                                        <button type="submit" class="btn btn-primary btn-block">@if($team_model->isUpdate != 1) Create @endif @if($team_model->isUpdate == 1) Update @endif</button>
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