@extends('admin.layouts.app')

@section('title','Admin - Edit')

@section('body')

    <div class="main-content">
        <div class="content-heading clearfix">
            <div class="heading-left">
                <h1 class="page-title">User Edit</h1>
            </div>
            <ul class="breadcrumb">
                <li><a href="/admin/admin"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="/admin/users">Users</a></li>
                <li class="active">Edit User</li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <!-- SUBMIT TICKETS -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit User</h3>
                        </div>
                        <div class="panel-body">
                            {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT', 'class' => 'form-horizontal')) }}
                                <fieldset>
                                    <legend>General Information</legend>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-3 control-label">Username</label>
                                        <div class="col-sm-9">
                                            {{ Form::text('username', $user->username, array('class' => 'form-control', 'id' => 'username')) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name" class="col-sm-3 control-label">First Name</label>
                                        <div class="col-sm-9">
                                            {{ Form::text('first_name', $user_details->first_name, array('class' => 'form-control', 'id' => 'first_name')) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name" class="col-sm-3 control-label">Last Name</label>
                                        <div class="col-sm-9">
                                            {{ Form::text('last_name', $user_details->last_name, array('class' => 'form-control', 'id' => 'last_name')) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-9">
                                            {{ Form::email('email', $user->email, array('class' => 'form-control', 'id' => 'email')) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nationality" class="col-sm-3 control-label">Nationality</label>
                                        <div class="col-sm-9">
                                            {{ Form::text('nationality', $user_details->nationality, array('class' => 'form-control', 'id' => 'nationality')) }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="roles" class="col-sm-3 control-label">Roles</label>
                                        <div class="col-sm-9">
                                            @foreach ($roles as $role)
                                                <div class="fancy-checkbox custom-bgcolor-blue">
                                                    <label>
                                                        {!! Form::checkbox('roles[]',  $role->id ) !!}
                                                        <span>{!! Form::label($role->name, ucfirst($role->name)) !!}<br></span>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Account Status</legend>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <label class="switch-input">
                                                <input type="checkbox" name="switch-checkbox">
                                                <i data-swon-text="YES" data-swoff-text="NO"></i> Account Locked
                                            </label>
                                        </div>
                                    </div>
                                    <br/>
                                    <hr/>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-6">
                                            <button type="submit" class="btn btn-primary btn-block">Update</button>
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
