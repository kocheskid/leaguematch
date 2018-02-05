@extends('admin.layouts.app')

@section('title','Admin - Update News')

@section('body')

    <div class="main-content">
        <div class="content-heading clearfix">
            <div class="heading-left">
                <h1 class="page-title">Outplayed</h1>
                <p class="page-subtitle">Update News</p>
            </div>
            <ul class="breadcrumb">
                <li><a href="/admin/admin"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="/admin/news">News</a></li>
                <li class="active">Update News</li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset">
                    <!-- SUBMIT TICKETS -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Update News</h3>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="post" action="/admin/news/update" enctype="multipart/form-data" onsubmit="return postForm()">
                                {{ csrf_field() }}
                                <input type="hidden" id="edit_post" name="edit_post" value="{{$news_model['id']}}"/>
                                <fieldset>
                                    <legend>Edit</legend>
                                    <div class="form-group">
                                        <label for="news_title" class="col-sm-3 control-label">Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="news_title" value="{{$news_model['news_title']}}" name="news_title" placeholder="Title" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="news_big_image" class="col-sm-3 control-label">News Cover Image</label>
                                        <div class="col-md-9">
                                            <input type="file" id="news_big_image" name="news_big_image">
                                            <p class="help-block">
                                                <em>Valid file type: .jpg, .png, File size max: 2 MB</em>
                                            </p>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <legend>Body</legend>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <textarea name="news_content" id="summernote" class="summernote">{{$news_model['news_content']}}</textarea>
                                            <div class="margin-bottom-30"></div>
                                        </div>
                                    </div>
                                    <br/>

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <label for="publish_at" class="col-sm-3 control-label">Publish At</label>
                                            <div class="col-sm-4">
                                                <input data-provide="datepicker" data-date-autoclose="true" value="{{date('d-m-Y', strtotime($news_model['publish_at']))}}" class="form-control" data-date-format="dd-mm-yyyy" id="publish_at" name="publish_at" required>
                                            </div>
                                            <label class="switch-input">
                                                <input type="checkbox" name="switch-checkbox">
                                                <i data-swon-text="YES" data-swoff-text="NO"></i> Featured news
                                            </label>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="col-sm-offset-5 col-sm-4">
                                                    <button type="submit" class="btn btn-primary btn-block">Update News</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <!-- END SUBMIT TICKETS -->
                </div>
            </div>
        </div>
    </div>

@endsection



<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/pace/pace.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/markdown/markdown.js')}}"></script>
<script src="{{asset('admin/assets/vendor/to-markdown/to-markdown.js')}}"></script>
<script src="{{asset('admin/assets/vendor/bootstrap-markdown/bootstrap-markdown.js')}}"></script>
<script src="{{asset('admin/assets/scripts/klorofilpro-common.js')}}"></script>

<script>

    $(function()
    {
        // summernote editor
        $('.summernote').summernote(
            {
                height: 300,
                focus: true,
                onpaste: function()
                {
                    alert('You have pasted something to the editor');
                }
            });

    });

    var postForm = function() {
        var content = $('textarea[name="news_content"]').html($('#summernote').code());
    }
</script>