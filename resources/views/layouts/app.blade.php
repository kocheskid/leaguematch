<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="ESGL.EU">
        <meta name="author" content="mForce">
        <title>@yield('title')</title>

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-select.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-xl.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-xxl.css') }}" rel="stylesheet">

        <link href="{{ asset('owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('owlcarousel/assets/owl.theme.default.min.css') }}" rel="stylesheet">

    </head>

    <body class="layers">

        <div class="container-fluid" style="padding-left:0px;padding-right:0px;">

            <div class="col-sm-2" style="background-color: rgb(43, 43, 48);min-height:100%;padding-left:0px;padding-right:0px;">
                @include('partials/sidebar')
            </div>

            <div class="col-sm-10" style="min-height:100%;padding-left:0px;padding-right:0px;">

                <div class="row">
                    <div class="layer4">

                        <div class="col-sm-6">

                            <div class="header-first-text">

                                <a href="#"> Start </a> <label class="label-header">/</label> <a href="#"> Ligen </a> <label class="label-header">/</label> <a href="#"> News </a>

                            </div>


                        </div>

                        <div class="col-sm-6">

                            <div class="layer5">
                                <a href="#" class="quickplay-label">Quickplay</a>
                            </div>

                            <div class="header-text-right">
                                <a href="#"> Twitch Live Channels </a> <label class="label-header">/</label> <a href="#"> Login </a>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="row">
                    @yield('body')
                </div>

            </div>

        </div>

        <footer class="footer-div">

            <img src="{{asset('../images/logo-footer.png')}}" class="img-footer">

            <div class="pull-right footer-right-div">
                <ul>
                    <li><a href="#">Esport League</a></li>
                    <li><a href="#" class="slas">/</a></li>
                    <li><a href="#">League Table</a></li>
                    <li><a href="#" class="slas">/</a></li>
                    <li><a href="#">Tournaments</a></li>
                    <li><a href="#" class="slas">/</a></li>
                    <li><a href="#">Twitch Live Channels</a></li>
                    <li><a href="#" class="slas">/</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#" class="slas">/</a></li>
                    <li><a href="#">Private Chat</a></li>
                </ul>
            </div>

            <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
            <script src="{{ asset('owlcarousel/owl.carousel.min.js')}}"></script>
            <script src="{{ asset('js/bootstrap.min.js')}}"></script>
            <script src="{{ asset('js/bootstrap-select.js')}}"></script>

        </footer>

        <div class="row" style="margin-left:0px;margin-right:0px;">

            <div class="row" style="margin-left:0px;margin-right:0px;background:#212121;width:100%;height:50px;">

                <div class="cpy-right">
                    <label>&copy; 2017. All Rights Reserved.</label>
                </div>

                <div class="pull-right last-foot-right">
                    <label style="margin-top:19px;margin-right:20px;">Privacy Policy  |  Terms & Conditions</label>
                </div>

            </div>
        </div>

    </body>

</html>



