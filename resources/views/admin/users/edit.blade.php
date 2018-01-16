@extends('admin.layouts.app')

@section('title','Admin - Edit')

@section('body')

    <div id="content-header">
        <div id="breadcrumb"> <a href="/admin/admin" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="/admin/users" >Users</a><a href="#" class="current">Edit User</a></div>
        <h1>Edit User</h1>
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">

            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <h5>Form Elements</h5>
                </div>
                <div class="widget-content nopadding">
                    <form action="#" method="get" class="form-horizontal">
                        <div class="control-group">
                            <label class="control-label">Select input</label>
                            <div class="controls">
                                <select >
                                    <option>First option</option>
                                    <option>Second option</option>
                                    <option>Third option</option>
                                    <option>Fourth option</option>
                                    <option>Fifth option</option>
                                    <option>Sixth option</option>
                                    <option>Seventh option</option>
                                    <option>Eighth option</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Multiple Select input</label>
                            <div class="controls">
                                <select multiple >
                                    <option>First option</option>
                                    <option selected>Second option</option>
                                    <option>Third option</option>
                                    <option>Fourth option</option>
                                    <option>Fifth option</option>
                                    <option>Sixth option</option>
                                    <option>Seventh option</option>
                                    <option>Eighth option</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Radio inputs</label>
                            <div class="controls">
                                <label>
                                    <input type="radio" name="radios" />
                                    First One</label>
                                <label>
                                    <input type="radio" name="radios" />
                                    Second One</label>
                                <label>
                                    <input type="radio" name="radios" />
                                    Third One</label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Checkboxes</label>
                            <div class="controls">
                                <label>
                                    <input type="checkbox" name="radios" />
                                    First One</label>
                                <label>
                                    <input type="checkbox" name="radios" />
                                    Second One</label>
                                <label>
                                    <input type="checkbox" name="radios" />
                                    Third One</label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="checkboxes" class="control-label">Data Toggle checkbox</label>
                            <div class="controls">
                                <div data-toggle="buttons-checkbox" class="btn-group">
                                    <button class="btn btn-primary" type="button">Left</button>
                                    <button class="btn btn-primary" type="button">Middle</button>
                                    <button class="btn btn-primary" type="button">Right</button>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="checkboxes" class="control-label">Data Radio button</label>
                            <div class="controls">
                                <div data-toggle="buttons-radio" class="btn-group">
                                    <button class="btn btn-primary" type="button">Left</button>
                                    <button class="btn btn-primary" type="button">Middle</button>
                                    <button class="btn btn-primary" type="button">Right</button>
                                </div>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">File upload input</label>
                            <div class="controls">
                                <input type="file" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Disabled Input</label>
                            <div class="controls">
                                <input type="text" placeholder="You can't type anything…" disabled="" class="span11">
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
    </div>

@endsection

<script src="admin/js/jquery.min.js"></script>
<script src="/admin/js/jquery.ui.custom.js"></script>
<script src="/admin/js/bootstrap.min.js"></script>
<script src="/admin/js/bootstrap-colorpicker.js"></script>
<script src="/admin/js/bootstrap-datepicker.js"></script>
<script src="/admin/js/jquery.toggle.buttons.js"></script>
<script src="/admin/js/masked.js"></script>
<script src="/admin/js/jquery.uniform.js"></script>
<script src="/admin/js/select2.min.js"></script>
<script src="/admin/js/matrix.js"></script>
<script src="/admin/js/matrix.form_common.js"></script>
<script src="/admin/js/wysihtml5-0.3.0.js"></script>
<script src="/admin/js/jquery.peity.min.js"></script>
<script src="/admin/js/bootstrap-wysihtml5.js"></script>