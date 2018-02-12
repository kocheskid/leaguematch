@extends('admin.layouts.app')

@section('title','Admin - Slider Create')

@section('body')

    <div class="main-content">
        <div class="content-heading clearfix">
            <div class="heading-left">
                @if($slide_model->isUpdate == 1)
                    <h1 class="page-title">Update Slider</h1>
                @else
                    <h1 class="page-title">Create Slider</h1>
                @endif
            </div>
            <ul class="breadcrumb">
                <li><a href="/admin/admin"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="/admin/slider">Slider</a></li>
                @if($slide_model->isUpdate == 1)
                    <li class="active">Update Slider</li>
                @else
                    <li class="active">Create Slider</li>
                @endif
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <!-- SUBMIT TICKETS -->
                    <div class="panel">
                        <div class="panel-heading">
                            @if($slide_model->isUpdate == 1)
                                <h3 class="panel-title">Update Slider</h3>
                            @else
                                <h3 class="panel-title">Create Slider</h3>
                            @endif
                        </div>
                        <div class="panel-body">
                            @if($slide_model->isUpdate == 1)
                                {{ Form::model($slide_model, array('route' => array('slider.update', $slide_model->id), 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) }}
                            @else
                                {{ Form::model($slide_model, array('route' => array('slider.create'), 'method' => 'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) }}
                            @endif
                            <fieldset>
                                <legend>General Information</legend>
                                <div class="form-group">
                                    <label for="slide_title" class="col-sm-3 control-label">Slide Title</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('slide_title', $slide_model->slide_title, array('class' => 'form-control', 'id' => 'slide_title')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slide_text" class="col-sm-3 control-label">Slide Text</label>
                                    <div class="col-sm-9">
                                        {{ Form::textarea('slide_text', $slide_model->slide_text, array('class' => 'form-control', 'id' => 'slide_text')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slide_img" class="col-sm-3 control-label">Slide Image</label>
                                    <div class="col-sm-9">
                                        {{ Form::file('slide_img', array('class' => 'form-control', 'id' => 'slide_img')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slide_link" class="col-sm-3 control-label">Slide Link</label>
                                    <div class="col-sm-9">
                                        {{ Form::text('slide_link', $slide_model->slide_link, array('class' => 'form-control', 'id' => 'slide_link')) }}
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <hr/>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-6">
                                        <button type="submit" class="btn btn-primary btn-block">@if($slide_model->isUpdate != 1) Create @endif @if($slide_model->isUpdate == 1) Update @endif</button>
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