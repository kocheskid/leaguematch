@extends('layouts.app')

@section('title','Esgl.eu')

@section('body')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <div class="row" style="margin-top:50px;">

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
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <img src="{{asset('../images/arrow-left.png')}}" class="glyphicon glyphicon-chevron-left" style="width:22px;height:37px">
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <img src="{{asset('../images/arrow-right.png')}}" class="glyphicon glyphicon-chevron-right" style="width:22px;height:37px">
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

    <div class="row" style="margin-left:0px;margin-right:0px;margin-top:40px;padding-left:157px;">

        <div class="col-md-6" style="text-align:center;width:24%;">
            <div class="col-md-6" style="text-align:center;margin-top:20px;">
                <img src="{{asset('../images/Forma 1.png')}}">
                <label class="img-txt">Create Account</label>

            </div>

            <img src="{{asset('../images/Shape 2.png')}}">
        </div>

        <div class="col-md-6" style="text-align:center;width:24%;margin-left:-20px;">
            <div class="col-md-6" style="text-align:center;margin-top:42px;">
                <img src="{{asset('../images/Forma-2.png')}}">
                <label class="img-txt">Find A Game</label>
            </div>
            <img src="{{asset('../images/Shape 2.png')}}">
        </div>

        <div class="col-md-6" style="text-align:center;width:24%;margin-left:-20px;">
            <div class="col-md-6" style="text-align:center;margin-top:39px;">
                <img src="{{asset('../images/Forma-3.png')}}">
                <label class="img-txt">Create A Team</label>
            </div>
            <img src="{{asset('../images/Shape 2.png')}}">
        </div>

        <div class="col-md-6" style="text-align:center;width:24%;margin-left:-20px;">
            <div class="col-md-6" style="text-align:center;margin-top:47px;">
                <img src="{{asset('../images/Forma-4.png')}}">
                <label class="img-txt">Compete & Win</label>
            </div>
            <img src="{{asset('../images/Shape 2.png')}}">
        </div>

    </div>

    <div class="row" style="margin-top:29px;">

        <div class="news-slider-wrap">

            <div class="row" style="margin-left:40px;margin-right:0px;padding-top:18px;">
                <label class="feat-news-slide">Featured News</label>
                <div class="news-slider-hr"></div>

                <div class="pull-right caros-arrows" style="margin-right:100px;">
                    <a class="left" href="#carousel-reviews" role="button" data-slide="prev">
                        <img src="{{asset('../images/arrow-left.png')}}" style="margin-right:22px;">
                    </a>
                    <a class="right" href="#carousel-reviews" role="button" data-slide="next">
                        <img src="{{asset('../images/arrow-right.png')}}">
                    </a>
                </div>
            </div>

            <div class="carousel-reviews broun-block">
                <div class="container" style="width:100%;">
                    <div class="row">
                        <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="post-news">
                                            <img src="{{asset('../images/slider-news-1.png')}}">
                                            <p class="text-news">Lorem Ipsum dolor sit amet</p>
                                            <p class="date-news">10/11/2017</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-xs">
                                        <div class="post-news">
                                            <img src="{{asset('../images/slider-news-1.png')}}">
                                            <p class="text-news">Lorem Ipsum dolor sit amet</p>
                                            <p class="date-news">10/11/2017</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                        <div class="post-news">
                                            <img src="{{asset('../images/slider-news-1.png')}}">
                                            <p class="text-news">Lorem Ipsum dolor sit amet</p>
                                            <p class="date-news">10/11/2017</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="post-news">
                                            <img src="{{asset('../images/slider-news-1.png')}}">
                                            <p class="text-news">Lorem Ipsum dolor sit amet</p>
                                            <p class="date-news">10/11/2017</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-xs">
                                        <div class="post-news">
                                            <img src="{{asset('../images/slider-news-1.png')}}">
                                            <p class="text-news">Lorem Ipsum dolor sit amet</p>
                                            <p class="date-news">10/11/2017</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                        <div class="post-news">
                                            <img src="{{asset('../images/slider-news-1.png')}}">
                                            <p class="text-news">Lorem Ipsum dolor sit amet</p>
                                            <p class="date-news">10/11/2017</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="post-news">
                                            <img src="{{asset('../images/slider-news-1.png')}}">
                                            <p class="text-news">Lorem Ipsum dolor sit amet</p>
                                            <p class="date-news">10/11/2017</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-xs">
                                        <div class="post-news">
                                            <img src="{{asset('../images/slider-news-1.png')}}">
                                            <p class="text-news">Lorem Ipsum dolor sit amet</p>
                                            <p class="date-news">10/11/2017</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
                                        <div class="post-news">
                                            <img src="{{asset('../images/slider-news-1.png')}}">
                                            <p class="text-news">Lorem Ipsum dolor sit amet</p>
                                            <p class="date-news">10/11/2017</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="row" style="margin-left:50px;margin-right:0px;margin-top:29px;">

        <label class="news-part">News</label>
        <div class="news-slider-hr"></div>

        <div class="col-sm-6" style="margin-top:50px;">
            <img src="{{asset('../images/news-1-img.png')}}">
            <label class="news-headline">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda...</label>
            <label class="news-parag">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda.</label>
            <div class="row" style="margin-left:0px;margin-right:0px;margin-top:5px;">
                <a href="#" class="more-news-link"><img src="{{asset('../images/arrow-right.png')}}" width="14px" style="margin-top:3px;margin-left:10px;"><label class="inside-more-link">&nbsp;More</label></a>
            </div>
        </div>

        <div class="col-sm-6" style="margin-top:50px;">
            <img src="{{asset('../images/news-2-img.png')}}">
            <label class="news-headline">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda...</label>
            <label class="news-parag">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda.</label>
            <div class="row" style="margin-left:0px;margin-right:0px;margin-top:5px;">
                <a href="#" class="more-news-link"><img src="{{asset('../images/arrow-right.png')}}" width="14px" style="margin-top:3px;margin-left:10px;"><label class="inside-more-link">&nbsp;More</label></a>
            </div>
        </div>

        <div class="col-sm-6" style="margin-top:50px;">
            <img src="{{asset('../images/news-1-img.png')}}">
            <label class="news-headline">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda...</label>
            <label class="news-parag">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda.</label>
            <div class="row" style="margin-left:0px;margin-right:0px;margin-top:5px;">
                <a href="#" class="more-news-link"><img src="{{asset('../images/arrow-right.png')}}" width="14px" style="margin-top:3px;margin-left:10px;"><label class="inside-more-link">&nbsp;More</label></a>
            </div>
        </div>

        <div class="col-sm-6" style="margin-top:50px;">
            <img src="{{asset('../images/news-1-img.png')}}">
            <label class="news-headline">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda...</label>
            <label class="news-parag">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda.</label>
            <div class="row" style="margin-left:0px;margin-right:0px;margin-top:5px;">
                <a href="#" class="more-news-link"><img src="{{asset('../images/arrow-right.png')}}" width="14px" style="margin-top:3px;margin-left:10px;"><label class="inside-more-link">&nbsp;More</label></a>
            </div>
        </div>

    </div>

    <div class="row" style="margin-left:0px;margin-right:0px;margin-top:30px;background:#1b1b1b;">

        <div class="row" style="margin-left:50px;margin-right:0px;margin-top:80px;">

            <label class="pro-table">Pro League Table</label>
            <div class="news-slider-hr"></div>

        </div>

        <table class="pro-table-tbl">

            <thead class="header-tbl">
            <tr class="header-tr">
                <th width="20%">Team</th>
                <th width="5%">MP</th>
                <th width="5%">W</th>
                <th width="5%">D</th>
                <th width="5%">L</th>
                <th width="5%">G</th>
                <th width="5%">PTS</th>
                <th width="35%">FORM</th>
            </tr>
            </thead>
            <tr>
                <td><img src="{{asset('../images/tbl-img.png')}}"> <p>Team Name</p></td>
                <td>9</td>
                <td>6</td>
                <td>1</td>
                <td>2</td>
                <td>19:9</td>
                <td>20</td>
                <td><label class="win-lbl"><p style="margin-top:8px;margin-left:10px;">W</p></label> &nbsp; <label class="lose-lbl"><p style="margin-top:8px;margin-left:12px;">L</p></label> &nbsp; <label class="win-lbl"><p style="margin-top:8px;margin-left:10px;">W</p></label> &nbsp; <label class="lose-lbl"><p style="margin-top:8px;margin-left:12px;">L</p></label></td>
            </tr>
            <tr>
                <td><img src="{{asset('../images/tbl-img.png')}}"> <p>Team Name</p></td>
                <td>9</td>
                <td>6</td>
                <td>1</td>
                <td>2</td>
                <td>19:9</td>
                <td>20</td>
                <td><label class="win-lbl"><p style="margin-top:8px;margin-left:10px;">W</p></label> &nbsp; <label class="lose-lbl"><p style="margin-top:8px;margin-left:12px;">L</p></label> &nbsp; <label class="win-lbl"><p style="margin-top:8px;margin-left:10px;">W</p></label> &nbsp; <label class="lose-lbl"><p style="margin-top:8px;margin-left:12px;">L</p></label></td>
            </tr>
            <tr>
                <td><img src="{{asset('../images/tbl-img.png')}}"> <p>Team Name</p></td>
                <td>9</td>
                <td>6</td>
                <td>1</td>
                <td>2</td>
                <td>19:9</td>
                <td>20</td>
                <td><label class="win-lbl"><p style="margin-top:8px;margin-left:10px;">W</p></label> &nbsp; <label class="lose-lbl"><p style="margin-top:8px;margin-left:12px;">L</p></label> &nbsp; <label class="win-lbl"><p style="margin-top:8px;margin-left:10px;">W</p></label> &nbsp; <label class="lose-lbl"><p style="margin-top:8px;margin-left:12px;">L</p></label></td>
            </tr>

        </table>

    </div>

    {{--<div class="slider-wrapper" style="margin-top:100px;">--}}

        {{--<div id="myCarousel" class="carousel slide" data-ride="carousel">--}}
            {{--<!-- Indicators -->--}}
            {{--<ol class="carousel-indicators" style="left:13%;">--}}
                {{--<li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
                {{--<li data-target="#myCarousel" data-slide-to="1"></li>--}}
                {{--<li data-target="#myCarousel" data-slide-to="2"></li>--}}
            {{--</ol>--}}

            {{--<!-- Wrapper for slides -->--}}
            {{--<div class="carousel-inner" style="width:90%;height:406px;">--}}
                {{--<div class="item active">--}}
                    {{--<img src="{{asset('../images/slider.jpg')}}" width="100%">--}}
                    {{--<div class="carousel-caption" style="top:214px;left:200px;text-align:left;">--}}
                        {{--<h3 class="caros-h3">Sed Non vulputate nisi. Pellentesque habitant</h3>--}}
                        {{--<p class="carousel-text-inner">Nullam neque erat, tempor eget dictum sit amet, laoreet vitae leo</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="item">--}}
                    {{--<img src="{{asset('../images/slider.jpg')}}" width="100%" alt="Chicago">--}}
                    {{--<div class="carousel-caption" style="top:214px;left:200px;text-align:left;">--}}
                        {{--<h3>Sed Non vulputate nisi. Pellentesque habitant</h3>--}}
                        {{--<p>Nullam neque erat, tempor eget dictum sit amet, laoreet vitae leo</p>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="item">--}}
                    {{--<img src="{{asset('../images/slider.jpg')}}" width="100%" alt="New York">--}}
                    {{--<div class="carousel-caption" style="top:214px;left:200px;text-align:left;">--}}
                        {{--<h3>Sed Non vulputate nisi. Pellentesque habitant</h3>--}}
                        {{--<p>Nullam neque erat, tempor eget dictum sit amet, laoreet vitae leo</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<!-- Left and right controls -->--}}
            {{--<a class="left carousel-control" href="#myCarousel" data-slide="prev" style="left:160px;width:2%;">--}}
                {{--<img src="{{asset('../images/arrow-left.png')}}" class="glyphicon glyphicon-chevron-left" style="width:22px;height:37px">--}}
                {{--<span class="sr-only">Previous</span>--}}
            {{--</a>--}}
            {{--<a class="right carousel-control" href="#myCarousel" data-slide="next" style="right:159px;width:2%">--}}
                {{--<img src="{{asset('../images/arrow-right.png')}}" class="glyphicon glyphicon-chevron-right" style="width:22px;height:37px">--}}
                {{--<span class="sr-only">Next</span>--}}
            {{--</a>--}}
        {{--</div>--}}

    {{--</div>--}}

    {{--<div class="under-slider">--}}

        {{--<div class="row" style="margin-left:0px;margin-right:0px;">--}}

            {{--<div class="col-md-6" style="text-align:center;width:24%;">--}}
                {{--<div class="col-md-8" style="text-align:center;margin-top:20px;">--}}
                    {{--<img src="{{asset('../images/Forma 1.png')}}">--}}
                    {{--<label class="img-txt">Create Account</label>--}}

                {{--</div>--}}

                {{--<img src="{{asset('../images/Shape 2.png')}}">--}}
            {{--</div>--}}

            {{--<div class="col-md-6" style="text-align:center;width:24%;margin-left:-20px;">--}}
                {{--<div class="col-md-8" style="text-align:center;margin-top:42px;">--}}
                    {{--<img src="{{asset('../images/Forma-2.png')}}">--}}
                    {{--<label class="img-txt">Find A Game</label>--}}
                {{--</div>--}}
                {{--<img src="{{asset('../images/Shape 2.png')}}">--}}
            {{--</div>--}}

            {{--<div class="col-md-6" style="text-align:center;width:24%;margin-left:-20px;">--}}
                {{--<div class="col-md-8" style="text-align:center;margin-top:39px;">--}}
                    {{--<img src="{{asset('../images/Forma-3.png')}}">--}}
                    {{--<label class="img-txt">Create A Team</label>--}}
                {{--</div>--}}
                {{--<img src="{{asset('../images/Shape 2.png')}}">--}}
            {{--</div>--}}

            {{--<div class="col-md-6" style="text-align:center;width:24%;margin-left:-20px;">--}}
                {{--<div class="col-md-8" style="text-align:center;margin-top:47px;">--}}
                    {{--<img src="{{asset('../images/Forma-4.png')}}">--}}
                    {{--<label class="img-txt">Compete & Win</label>--}}
                {{--</div>--}}
                {{--<img src="{{asset('../images/Shape 2.png')}}">--}}
            {{--</div>--}}

        {{--</div>--}}

    {{--</div>--}}

    {{--<div class="row" style="margin-left:0px;margin-right:0px;margin-top:29px;">--}}

        {{--<div class="news-slider-wrap">--}}

            {{--<div class="row" style="margin-left:40px;margin-right:0px;padding-top:18px;">--}}
                {{--<label class="feat-news-slide">Featured News</label>--}}
                {{--<div class="news-slider-hr"></div>--}}

                {{--<div class="pull-right caros-arrows" style="margin-right:100px;">--}}
                    {{--<a class="left" href="#carousel-reviews" role="button" data-slide="prev">--}}
                        {{--<img src="{{asset('../images/arrow-left.png')}}" style="margin-right:22px;">--}}
                    {{--</a>--}}
                    {{--<a class="right" href="#carousel-reviews" role="button" data-slide="next">--}}
                        {{--<img src="{{asset('../images/arrow-right.png')}}">--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="carousel-reviews broun-block">--}}
                {{--<div class="container" style="width:100%;">--}}
                    {{--<div class="row">--}}
                        {{--<div id="carousel-reviews" class="carousel slide" data-ride="carousel">--}}

                            {{--<div class="carousel-inner">--}}
                                {{--<div class="item active">--}}
                                    {{--<div class="col-md-4 col-sm-6">--}}
                                        {{--<div class="post-news">--}}
                                            {{--<img src="{{asset('../images/slider-news-1.png')}}">--}}
                                            {{--<p class="text-news">Lorem Ipsum dolor sit amet</p>--}}
                                            {{--<p class="date-news">10/11/2017</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-4 col-sm-6 hidden-xs">--}}
                                        {{--<div class="post-news">--}}
                                            {{--<img src="{{asset('../images/slider-news-1.png')}}">--}}
                                            {{--<p class="text-news">Lorem Ipsum dolor sit amet</p>--}}
                                            {{--<p class="date-news">10/11/2017</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">--}}
                                        {{--<div class="post-news">--}}
                                            {{--<img src="{{asset('../images/slider-news-1.png')}}">--}}
                                            {{--<p class="text-news">Lorem Ipsum dolor sit amet</p>--}}
                                            {{--<p class="date-news">10/11/2017</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="item">--}}
                                    {{--<div class="col-md-4 col-sm-6">--}}
                                        {{--<div class="post-news">--}}
                                            {{--<img src="{{asset('../images/slider-news-1.png')}}">--}}
                                            {{--<p class="text-news">Lorem Ipsum dolor sit amet</p>--}}
                                            {{--<p class="date-news">10/11/2017</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-4 col-sm-6 hidden-xs">--}}
                                        {{--<div class="post-news">--}}
                                            {{--<img src="{{asset('../images/slider-news-1.png')}}">--}}
                                            {{--<p class="text-news">Lorem Ipsum dolor sit amet</p>--}}
                                            {{--<p class="date-news">10/11/2017</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">--}}
                                        {{--<div class="post-news">--}}
                                            {{--<img src="{{asset('../images/slider-news-1.png')}}">--}}
                                            {{--<p class="text-news">Lorem Ipsum dolor sit amet</p>--}}
                                            {{--<p class="date-news">10/11/2017</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="item">--}}
                                    {{--<div class="col-md-4 col-sm-6">--}}
                                        {{--<div class="post-news">--}}
                                            {{--<img src="{{asset('../images/slider-news-1.png')}}">--}}
                                            {{--<p class="text-news">Lorem Ipsum dolor sit amet</p>--}}
                                            {{--<p class="date-news">10/11/2017</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-4 col-sm-6 hidden-xs">--}}
                                        {{--<div class="post-news">--}}
                                            {{--<img src="{{asset('../images/slider-news-1.png')}}">--}}
                                            {{--<p class="text-news">Lorem Ipsum dolor sit amet</p>--}}
                                            {{--<p class="date-news">10/11/2017</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-4 col-sm-6 hidden-sm hidden-xs">--}}
                                        {{--<div class="post-news">--}}
                                            {{--<img src="{{asset('../images/slider-news-1.png')}}">--}}
                                            {{--<p class="text-news">Lorem Ipsum dolor sit amet</p>--}}
                                            {{--<p class="date-news">10/11/2017</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}

    {{--</div>--}}

    {{--<div class="row" style="margin-left:50px;margin-right:0px;margin-top:29px;">--}}

        {{--<label class="news-part">News</label>--}}
        {{--<div class="news-slider-hr"></div>--}}

        {{--<div class="col-sm-6" style="margin-top:50px;">--}}
            {{--<img src="{{asset('../images/news-1-img.png')}}">--}}
            {{--<label class="news-headline">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda...</label>--}}
            {{--<label class="news-parag">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda.</label>--}}
            {{--<div class="row" style="margin-left:0px;margin-right:0px;margin-top:5px;">--}}
                {{--<a href="#" class="more-news-link"><img src="{{asset('../images/arrow-right.png')}}" width="14px" style="margin-top:3px;margin-left:10px;"><label class="inside-more-link">&nbsp;More</label></a>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-sm-6" style="margin-top:50px;">--}}
            {{--<img src="{{asset('../images/news-2-img.png')}}">--}}
            {{--<label class="news-headline">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda...</label>--}}
            {{--<label class="news-parag">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda.</label>--}}
            {{--<div class="row" style="margin-left:0px;margin-right:0px;margin-top:5px;">--}}
                {{--<a href="#" class="more-news-link"><img src="{{asset('../images/arrow-right.png')}}" width="14px" style="margin-top:3px;margin-left:10px;"><label class="inside-more-link">&nbsp;More</label></a>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-sm-6" style="margin-top:50px;">--}}
            {{--<img src="{{asset('../images/news-1-img.png')}}">--}}
            {{--<label class="news-headline">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda...</label>--}}
            {{--<label class="news-parag">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda.</label>--}}
            {{--<div class="row" style="margin-left:0px;margin-right:0px;margin-top:5px;">--}}
                {{--<a href="#" class="more-news-link"><img src="{{asset('../images/arrow-right.png')}}" width="14px" style="margin-top:3px;margin-left:10px;"><label class="inside-more-link">&nbsp;More</label></a>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-sm-6" style="margin-top:50px;">--}}
            {{--<img src="{{asset('../images/news-1-img.png')}}">--}}
            {{--<label class="news-headline">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda...</label>--}}
            {{--<label class="news-parag">Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda. Sed non vulputate nisi. Pellentesque habitant morbi tristique senectus et netus et malesuda.</label>--}}
            {{--<div class="row" style="margin-left:0px;margin-right:0px;margin-top:5px;">--}}
                {{--<a href="#" class="more-news-link"><img src="{{asset('../images/arrow-right.png')}}" width="14px" style="margin-top:3px;margin-left:10px;"><label class="inside-more-link">&nbsp;More</label></a>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}

    {{--<div class="row" style="margin-left:0px;margin-right:0px;margin-top:30px;background:#1b1b1b;">--}}

        {{--<div class="row" style="margin-left:50px;margin-right:0px;margin-top:80px;">--}}

            {{--<label class="pro-table">Pro League Table</label>--}}
            {{--<div class="news-slider-hr"></div>--}}

        {{--</div>--}}

        {{--<table class="pro-table-tbl">--}}

            {{--<thead class="header-tbl">--}}
                {{--<tr class="header-tr">--}}
                    {{--<th width="20%">Team</th>--}}
                    {{--<th width="5%">MP</th>--}}
                    {{--<th width="5%">W</th>--}}
                    {{--<th width="5%">D</th>--}}
                    {{--<th width="5%">L</th>--}}
                    {{--<th width="5%">G</th>--}}
                    {{--<th width="5%">PTS</th>--}}
                    {{--<th width="35%">FORM</th>--}}
                {{--</tr>--}}
            {{--</thead>--}}
            {{--<tr>--}}
                {{--<td><img src="{{asset('../images/tbl-img.png')}}"> <p>Team Name</p></td>--}}
                {{--<td>9</td>--}}
                {{--<td>6</td>--}}
                {{--<td>1</td>--}}
                {{--<td>2</td>--}}
                {{--<td>19:9</td>--}}
                {{--<td>20</td>--}}
                {{--<td><label class="win-lbl"><p style="margin-top:8px;margin-left:10px;">W</p></label> &nbsp; <label class="lose-lbl"><p style="margin-top:8px;margin-left:12px;">L</p></label> &nbsp; <label class="win-lbl"><p style="margin-top:8px;margin-left:10px;">W</p></label> &nbsp; <label class="lose-lbl"><p style="margin-top:8px;margin-left:12px;">L</p></label></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td><img src="{{asset('../images/tbl-img.png')}}"> <p>Team Name</p></td>--}}
                {{--<td>9</td>--}}
                {{--<td>6</td>--}}
                {{--<td>1</td>--}}
                {{--<td>2</td>--}}
                {{--<td>19:9</td>--}}
                {{--<td>20</td>--}}
                {{--<td><label class="win-lbl"><p style="margin-top:8px;margin-left:10px;">W</p></label> &nbsp; <label class="lose-lbl"><p style="margin-top:8px;margin-left:12px;">L</p></label> &nbsp; <label class="win-lbl"><p style="margin-top:8px;margin-left:10px;">W</p></label> &nbsp; <label class="lose-lbl"><p style="margin-top:8px;margin-left:12px;">L</p></label></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td><img src="{{asset('../images/tbl-img.png')}}"> <p>Team Name</p></td>--}}
                {{--<td>9</td>--}}
                {{--<td>6</td>--}}
                {{--<td>1</td>--}}
                {{--<td>2</td>--}}
                {{--<td>19:9</td>--}}
                {{--<td>20</td>--}}
                {{--<td><label class="win-lbl"><p style="margin-top:8px;margin-left:10px;">W</p></label> &nbsp; <label class="lose-lbl"><p style="margin-top:8px;margin-left:12px;">L</p></label> &nbsp; <label class="win-lbl"><p style="margin-top:8px;margin-left:10px;">W</p></label> &nbsp; <label class="lose-lbl"><p style="margin-top:8px;margin-left:12px;">L</p></label></td>--}}
            {{--</tr>--}}

        {{--</table>--}}

    {{--</div>--}}

@endsection