@extends('layouts.app')

@section('title','Team Update')

@section('body')

    <style>
        [data-role="dynamic-fields"] > .form-inline + .form-inline {
            margin-top: 0.5em;
        }

        [data-role="dynamic-fields"] > .form-inline [data-role="add"] {
            display: none;
        }

        [data-role="dynamic-fields"] > .form-inline:last-child [data-role="add"] {
            display: inline-block;
        }

        [data-role="dynamic-fields"] > .form-inline:last-child [data-role="remove"] {
            display: none;
        }
        .chosen-container{
            width:300px !important;
        }
    </style>
    <!-- Page Heading
    ================================================== -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="page-heading__title">Create <span class="highlight">Team</span></h1>
                    <ol class="page-heading__breadcrumb breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="/profile">Profile</li>
                        <li class="#">Create </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="site-content">
        <div class="container">

            <!-- Contact Area -->
            <div class="card">
                <header class="card__header">
                    <h4>Team Create</h4>
                </header>
                <div class="card__content">

                    <!-- Contact Form -->
                    {{ Form::model($team_model, array('route' => array('teams.create'), 'method' => 'POST', 'class' => 'contact-form', 'enctype' => 'multipart/form-data')) }}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="team_name">Team Name <span class="required">*</span></label>
                                    {{ Form::text('team_name', $team_model->team_name, array('class' => 'form-control', 'id' => 'team_name')) }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="team_logo">Team Logo <span class="required">*</span></label>
                                    {{ Form::file('team_logo', $team_model->team_logo, array('class' => 'form-control', 'id' => 'team_logo')) }}
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="join_password">Join Password <span class="required">*</span></label>
                                    {{ Form::text('join_password', $team_model->join_password, array('class' => 'form-control', 'id' => 'join_password')) }}
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <label>Team Members</label>
                        <div data-role="dynamic-fields">
                            <div class="form-inline" style="text-align:center;">
                                <div class="form-group">
                                    <label style="margin-right:15px;"># 1</label>
                                    <label class="sr-only" for="field-name">Field Name</label>
                                    {{ Form::select('username[0]', \App\HelperModel::getLoggedUserSelect(), 1, array('class' => 'form-control', 'placeholder' => 'Click to expand players..', 'readonly' => 'true')) }}
                                </div>
                                <span>-</span>
                                <div class="form-group">
                                    <label class="sr-only" for="field-value">Field Value</label>
                                    {{--{{ Form::text('t_role', $team_role_model->t_role, array('class' => 'form-control', 'placeholder' => 'Click to expand roles..')) }}--}}
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role" name="t_role[0][0]" value="AWP"/>AWP<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role" name="t_role[0][1]" value="Lurker"/>Lurker<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role" name="t_role[0][2]" value="Rifler"/>Rifler<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role" name="t_role[0][3]" value="Support"/>Support<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role" name="t_role[0][4]" value="Entry"/>Entry<span class="checkbox-indicator"></span>
                                    </label>
                                </div>
                            </div>  <!-- /div.form-inline -->

                            <div class="form-inline" style="text-align:center;">
                                <div class="form-group">
                                    <label style="margin-right:15px;"># 2</label>
                                    <label class="sr-only" for="field-name">Field Name</label>
                                    {{ Form::select('username[1]', $all_players, null, array('class' => 'form-control', 'placeholder' => 'Click to expand players..')) }}
                                </div>
                                <span>-</span>
                                <div class="form-group">
                                    <label class="sr-only" for="field-value">Field Value</label>
                                    {{--{{ Form::text('t_role', $team_role_model->t_role, array('class' => 'form-control', 'placeholder' => 'Click to expand roles..')) }}--}}
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role1" name="t_role[1][0]" value="AWP"/>AWP<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role1" name="t_role[1][1]" value="Lurker"/>Lurker<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role1" name="t_role[1][2]" value="Rifler"/>Rifler<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role1" name="t_role[1][3]" value="Support"/>Support<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role1" name="t_role[1][4]" value="Entry"/>Entry<span class="checkbox-indicator"></span>
                                    </label>
                                </div>
                            </div>  <!-- /div.form-inline -->

                            <div class="form-inline" style="text-align:center;">
                                <div class="form-group">
                                    <label style="margin-right:15px;"># 3</label>
                                    <label class="sr-only" for="field-name">Field Name</label>
                                    {{ Form::select('username[2]', $all_players, null, array('class' => 'form-control', 'placeholder' => 'Click to expand players..')) }}
                                </div>
                                <span>-</span>
                                <div class="form-group">
                                    <label class="sr-only" for="field-value">Field Value</label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role2" name="t_role[2][0]" value="AWP"/>AWP<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role2" name="t_role[2][1]" value="Lurker"/>Lurker<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role2" name="t_role[2][2]" value="Rifler"/>Rifler<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role2" name="t_role[2][3]" value="Support"/>Support<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role2" name="t_role[2][4]" value="Entry"/>Entry<span class="checkbox-indicator"></span>
                                    </label>
                                </div>
                            </div>  <!-- /div.form-inline -->

                            <div class="form-inline" style="text-align:center;">
                                <div class="form-group">
                                    <label style="margin-right:15px;"># 4</label>
                                    <label class="sr-only" for="field-name">Field Name</label>
                                    {{ Form::select('username[3]', $all_players, null, array('class' => 'form-control', 'placeholder' => 'Click to expand players..')) }}
                                </div>
                                <span>-</span>
                                <div class="form-group">
                                    <label class="sr-only" for="field-value">Field Value</label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role3" name="t_role[3][0]" value="AWP"/>AWP<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role3" name="t_role[3][1]" value="Lurker"/>Lurker<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role3" name="t_role[3][2]" value="Rifler"/>Rifler<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role3" name="t_role[3][3]" value="Support"/>Support<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role3" name="t_role[3][4]" value="Entry"/>Entry<span class="checkbox-indicator"></span>
                                    </label>
                                </div>
                            </div>  <!-- /div.form-inline -->

                            <div class="form-inline" style="text-align:center;">
                                <div class="form-group">
                                    <label style="margin-right:15px;"># 5</label>
                                    <label class="sr-only" for="field-name">Field Name</label>
                                    {{ Form::select('username[4]', $all_players, null, array('class' => 'form-control', 'placeholder' => 'Click to expand players..')) }}
                                </div>
                                <span>-</span>
                                <div class="form-group">
                                    <label class="sr-only" for="field-value">Field Value</label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role4" name="t_role[4][0]" value="AWP"/>AWP<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role4" name="t_role[4][1]" value="Lurker"/>Lurker<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role4" name="t_role[4][2]" value="Rifler"/>Rifler<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role4" name="t_role[4][3]" value="Support"/>Support<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role4" name="t_role[4][4]" value="Entry"/>Entry<span class="checkbox-indicator"></span>
                                    </label>
                                </div>
                            </div>  <!-- /div.form-inline -->

                            <div class="form-inline" style="text-align:center;">
                                <div class="form-group">
                                    <label style="margin-right:15px;"># 6</label>
                                    <label class="sr-only" for="field-name">Field Name</label>
                                    {{ Form::select('username[5]', $all_players, null, array('class' => 'form-control', 'placeholder' => 'Click to expand players..')) }}
                                </div>
                                <span>-</span>
                                <div class="form-group">
                                    <label class="sr-only" for="field-value">Field Value</label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role5" name="t_role[5][0]" value="AWP"/>AWP<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role5" name="t_role[5][1]" value="Lurker"/>Lurker<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role5" name="t_role[5][2]" value="Rifler"/>Rifler<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role5" name="t_role[5][3]" value="Support"/>Support<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role5" name="t_role[5][4]" value="Entry"/>Entry<span class="checkbox-indicator"></span>
                                    </label>
                                </div>
                            </div>  <!-- /div.form-inline -->

                            <div class="form-inline" style="text-align:center;">
                                <div class="form-group">
                                    <label style="margin-right:15px;"># 7</label>
                                    <label class="sr-only" for="field-name">Field Name</label>
                                    {{ Form::select('username[6]', $all_players, null, array('class' => 'form-control', 'placeholder' => 'Click to expand players..')) }}
                                </div>
                                <span>-</span>
                                <div class="form-group">
                                    <label class="sr-only" for="field-value">Field Value</label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role6" name="t_role[6][0]" value="AWP"/>AWP<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role6" name="t_role[6][1]" value="Lurker"/>Lurker<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role6" name="t_role[6][2]" value="Rifler"/>Rifler<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role6" name="t_role[6][3]" value="Support"/>Support<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role6" name="t_role[6][4]" value="Entry"/>Entry<span class="checkbox-indicator"></span>
                                    </label>
                                </div>
                            </div>  <!-- /div.form-inline -->

                            <div class="form-inline" style="text-align:center;">
                                <div class="form-group">
                                    <label style="margin-right:15px;"># 8</label>
                                    <label class="sr-only" for="field-name">Field Name</label>
                                    {{ Form::select('username[7]', $all_players, null, array('class' => 'form-control', 'placeholder' => 'Click to expand players..')) }}
                                </div>
                                <span>-</span>
                                <div class="form-group">
                                    <label class="sr-only" for="field-value">Field Value</label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role7" name="t_role[7][0]" value="AWP"/>AWP<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role7" name="t_role[7][1]" value="Lurker"/>Lurker<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role7" name="t_role[7][2]" value="Rifler"/>Rifler<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role7" name="t_role[7][3]" value="Support"/>Support<span class="checkbox-indicator"></span>
                                    </label>
                                    <label class="checkbox checkbox-inline">
                                        <input type="checkbox" class="t_role7" name="t_role[7][4]" value="Entry"/>Entry<span class="checkbox-indicator"></span>
                                    </label>
                                </div>
                            </div>  <!-- /div.form-inline -->

                        </div>  <!-- /div[data-role="dynamic-fields"] -->

                        {{--<div class="form-group">--}}
                            {{--<div class="row divAppend">--}}
                                {{--<div class="row-edit">--}}
                                    {{--<div class="col-md-6" style="margin-bottom:20px;">--}}
                                        {{--<div class="input-group-btn" style="display:inline;">--}}
                                            {{--<button class="btn btn-success addBtn" type="button"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>--}}
                                        {{--</div>--}}
                                        {{--{{ Form::text('username', $team_model->username, array('class' => 'form-control', 'style' => 'width:70%; display:inline-block;', 'placeholder' => 'Click to expand players..')) }}--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6" style="margin-bottom:20px;">--}}
                                        {{--{{ Form::text('t_role', $team_role_model->t_role, array('class' => 'form-control', 'style' => 'width:70%;')) }}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <hr/>
                        <div class="form-group">
                            <label for="team_description">Team Description <span class="required">*</span></label>
                            {{ Form::textarea('team_description', $team_model->team_description, array('class' => 'form-control', 'id' => 'team_description', 'placeholder' => 'Click to expand roles..')) }}
                        </div>
                        <div class="form-group form-group--submit">
                            <button type="submit" class="btn btn-primary-inverse btn-lg btn-block">CREATE TEAM</button>
                        </div>
                    {{ Form::close() }}
                    <!-- Contact Form / End -->

                </div>
            </div>
            <!-- Contact Area / End -->

        </div>
    </div>

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript">
        $(function() {

            // Remove button click
            $(document).on(
                'click',
                '[data-role="dynamic-fields"] > .form-inline [data-role="remove"]',
                function(e) {
                    e.preventDefault();
                    $(this).closest('.form-inline').remove();
                }
            );
            // Add button click
            $(document).on(
                'click',
                '[data-role="dynamic-fields"] > .form-inline [data-role="add"]',
                function(e) {
                    e.preventDefault();
                    var container = $(this).closest('[data-role="dynamic-fields"]');
                    new_field_group = container.children().filter('.form-inline:first-child').clone();
                    new_field_group.find('input').each(function(){
                        $(this).val('');
                    });
                    container.append(new_field_group);
                }
            );



        });

        $('input.t_role').on('change', function(evt) {
            if ($('input.t_role:checked').length > 2) {
                $(this).prop('checked', false);
                alert("Allowed only 2 per player!");
            }
        });

        $('input.t_role1').on('change', function(evt) {
            if ($('input.t_role1:checked').length > 2) {
                $(this).prop('checked', false);
                alert("Allowed only 2 per player!");
            }
        });

        $('input.t_role2').on('change', function(evt) {
            if ($('input.t_role2:checked').length > 2) {
                $(this).prop('checked', false);
                alert("Allowed only 2 per player!");
            }
        });

        $('input.t_role3').on('change', function(evt) {
            if ($('input.t_role3:checked').length > 2) {
                $(this).prop('checked', false);
                alert("Allowed only 2 per player!");
            }
        });

        $('input.t_role4').on('change', function(evt) {
            if ($('input.t_role4:checked').length > 2) {
                $(this).prop('checked', false);
                alert("Allowed only 2 per player!");
            }
        });

        $('input.t_role5').on('change', function(evt) {
            if ($('input.t_role5:checked').length > 2) {
                $(this).prop('checked', false);
                alert("Allowed only 2 per player!");
            }
        });

        $('input.t_role6').on('change', function(evt) {
            if ($('input.t_role6:checked').length > 2) {
                $(this).prop('checked', false);
                alert("Allowed only 2 per player!");
            }
        });

        $('input.t_role7').on('change', function(evt) {
            if ($('input.t_role7:checked').length > 2) {
                $(this).prop('checked', false);
                alert("Allowed only 2 per player!");
            }
        });

        $('input.t_role8').on('change', function(evt) {
            if ($('input.t_role8:checked').length > 2) {
                $(this).prop('checked', false);
                alert("Allowed only 2 per player!");
            }
        });

        $("select").change(function () {
            var $this = $(this);
            var prevVal = $this.data("prev");
            var otherSelects = $("select").not(this);

            if($(this).val() == ""){
                otherSelects.find("option[value=" + prevVal + "]").attr('disabled', true);
            }else{
                otherSelects.find("option[value=" + $(this).val() + "]").attr('disabled', true);
            }

            if (prevVal) {
                otherSelects.find("option[value=" + prevVal + "]").attr('disabled', false);
            }

            $this.data("prev", $this.val());
        });

    </script>

@endsection