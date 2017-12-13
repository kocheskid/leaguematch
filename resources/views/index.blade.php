@extends('layouts.app')

@section('title','Esgl.eu')

@section('body')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="slider-wrapper" style="margin-top:100px;">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators" style="left:13%;">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="width:90%;height:406px;">
                <div class="item active">
                    <img src="{{asset('../images/slider.jpg')}}" width="100%">
                    <div class="carousel-caption" style="top:214px;left:200px;text-align:left;">
                        <h3 class="caros-h3">Sed Non vulputate nisi. Pellentesque habitant</h3>
                        <p class="carousel-text-inner">Nullam neque erat, tempor eget dictum sit amet, laoreet vitae leo</p>
                    </div>
                </div>

                <div class="item">
                    <img src="{{asset('../images/slider.jpg')}}" width="100%" alt="Chicago">
                    <div class="carousel-caption" style="top:214px;left:200px;text-align:left;">
                        <h3>Sed Non vulputate nisi. Pellentesque habitant</h3>
                        <p>Nullam neque erat, tempor eget dictum sit amet, laoreet vitae leo</p>
                    </div>
                </div>

                <div class="item">
                    <img src="{{asset('../images/slider.jpg')}}" width="100%" alt="New York">
                    <div class="carousel-caption" style="top:214px;left:200px;text-align:left;">
                        <h3>Sed Non vulputate nisi. Pellentesque habitant</h3>
                        <p>Nullam neque erat, tempor eget dictum sit amet, laoreet vitae leo</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="left:160px;width:2%;">
                <img src="{{asset('../images/arrow-left.png')}}" class="glyphicon glyphicon-chevron-left" style="width:22px;height:37px">
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next" style="right:159px;width:2%">
                <img src="{{asset('../images/arrow-right.png')}}" class="glyphicon glyphicon-chevron-right" style="width:22px;height:37px">
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

@endsection