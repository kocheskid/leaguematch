<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/css/matrix-media.css')}}" />
    <link href="{{asset('admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('admin/css/jquery.gritter.css')}}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
    <h1><a href="dashboard.html">ESGL Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span>{{-- <b class="caret"></b>--}}</a>
            {{--<ul class="dropdown-menu">--}}
                {{--<li><a href="#"><i class="icon-user"></i> My Profile</a></li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li><a href="#"><i class="icon-check"></i> My Tasks</a></li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>--}}
            {{--</ul>--}}
        </li>
        {{--<li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>--}}
            {{--<ul class="dropdown-menu">--}}
                {{--<li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>--}}
        <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
{{--<div id="search">--}}
    {{--<input type="text" placeholder="Search here..."/>--}}
    {{--<button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>--}}
{{--</div>--}}
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>News</span></a>
            <ul>
                <li><a href="form-common.html">Add News</a></li>
            </ul>
        </li>
        <li><a href="#"><i class="icon icon-tint"></i> <span>Test</span></a></li>
    </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
    <!--End-breadcrumbs-->

    @yield('body')

</div>
    <!--Footer-part-->

    <!--end-Footer-part-->

    <script src="{{asset('admin/js/excanvas.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.flot.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.flot.resize.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('admin/js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('admin/js/matrix.js')}}"></script>
    <script src="{{asset('admin/js/matrix.dashboard.js')}}"></script>
    <script src="{{asset('admin/js/jquery.gritter.min.js')}}"></script>
    <script src="{{asset('admin/js/matrix.interface.js')}}"></script>
    <script src="{{asset('admin/js/matrix.chat.js')}}"></script>
    <script src="{{asset('admin/js/jquery.validate.js')}}"></script>
    <script src="{{asset('admin/js/matrix.form_validation.js')}}"></script>
    <script src="{{asset('admin/js/jquery.wizard.js')}}"></script>
    <script src="{{asset('admin/js/jquery.uniform.js')}}"></script>
    <script src="{{asset('admin/js/select2.min.js')}}"></script>
    <script src="{{asset('admin/js/matrix.popover.js')}}"></script>
    <script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/js/matrix.tables.js')}}"></script>

    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {

            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {

                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                    resetMenu();
                }
                // else, send page to designated URL
                else {
                    document.location.href = newURL;
                }
            }
        }

        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
</body>
</html>