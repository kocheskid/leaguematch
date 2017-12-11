<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="ESGL.EU">
        <meta name="author" content="mForce">
        <title>@yield('title')</title>

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-select.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-xl.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-xxl.css') }}" rel="stylesheet">

        <script src="{{ asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap-select.js')}}"></script>

    </head>

    <body>

        <div class="row" style="margin-left:0px;margin-right:0px;">

            <div class="col-sm-2">
                @include('partials/sidebar')
            </div>

            <div class="col-sm-10 layer0 layer1" style="padding-left:0px;padding-right:0px;">
                <div class="layer2">
                    <div class="layer4">
                        <div class="header-first-text">
                            <a href="#"> Start </a> <label class="label-header">/</label> <a href="#"> Ligen </a> <label class="label-header">/</label> <a href="#"> News </a>
                        </div>

                        <div class="layer5">
                            <a href="#" class="quickplay-label">Quickplay</a>
                        </div>

                        <div class="header-text-right">
                            <a href="#"> Twitch Live Channels </a> <label class="label-header">/</label> <a href="#"> Login </a>
                        </div>

                    </div>

                    @yield('body')

                </div>
            </div>

        </div>


    </body>

    <footer>

    </footer>

</html>



