@extends('layouts.app')

@section('title','Outplayed - Your eSport League')

@section('body')

    <!-- Hero Unit
    ================================================== -->
    {{--<div class="hero-unit">--}}
        {{--<div class="container hero-unit__container">--}}
            {{--<div class="hero-unit__content hero-unit__content--left-center">--}}
          {{--<span class="hero-unit__decor">--}}
            {{--<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>--}}
          {{--</span>--}}
                {{--<h5 class="hero-unit__subtitle">Elric Bros School</h5>--}}
                {{--<h1 class="hero-unit__title">The <span class="text-primary">Alchemists</span></h1>--}}
                {{--<div class="hero-unit__desc">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore .</div>--}}
                {{--<a href="#" class="btn btn-inverse btn-sm btn-outline btn-icon-right btn-condensed hero-unit__btn" data-toggle="modal" data-target="#modal-login-register">Read More <i class="fa fa-plus text-primary"></i></a>--}}
            {{--</div>--}}

            {{--<figure class="hero-unit__img">--}}
                {{--<img src="{{asset('images/samples/header_player.png')}}" alt="Hero Unit Image">--}}
            {{--</figure>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!---  Home Page Slider   --->

    <div id="carousel-example" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
            <li data-target="#carousel-example" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            @if(isset($slide_model))

                @foreach($slide_model as $key => $sm)

                    <?php $i = 0; ?>
                    <div class="item <?php if($i == 0) echo 'active'; $i++; ?>">
                        <a href="{{$sm->slide_link}}"><img src="{{asset('slider_images/')}}/{{$sm->slide_img}}" style="max-height: 700px;width:100%;" /></a>
                        <div class="hero-unit__content hero-unit__content--left-center">
                      <span class="hero-unit__decor">
                      </span>
                            <h1 class="hero-unit__title"><span class="text-primary">{{$sm->slide_title}}</span></h1>
                            <div class="hero-unit__desc" style="color:white!important;font-weight:600;">{{$sm->slide_text}}</div>
                            <a href="{{$sm->slide_link}}" class="btn btn-inverse btn-sm btn-outline btn-icon-right btn-condensed hero-unit__btn" data-target="#modal-login-register">Read More <i class="fa fa-plus text-primary"></i></a>
                        </div>
                    </div>

                @endforeach

            @endif

            @if(count($slide_model) == 0)

                    <div class="item active">
                        <a href="#"><img src="{{asset('slider_images/no-thumbnail.jpg')}}" style="max-height: 700px;width:100%;" /></a>
                        <div class="hero-unit__content hero-unit__content--left-center">
                      <span class="hero-unit__decor">
                      </span>
                            <h1 class="hero-unit__title"><span class="text-primary">No Image</span></h1>
                            <div class="hero-unit__desc">Upload your first slider.</div>
                            <a href="#" class="btn btn-inverse btn-sm btn-outline btn-icon-right btn-condensed hero-unit__btn" data-target="#modal-login-register">Read More <i class="fa fa-plus text-primary"></i></a>
                        </div>
                    </div>

             @endif
            {{--<div class="item active">--}}
                {{--<a href="#"><img src="http://placekitten.com/1600/600" /></a>--}}
                    {{--<div class="hero-unit__content hero-unit__content--left-center">--}}
                      {{--<span class="hero-unit__decor">--}}
                        {{--<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>--}}
                      {{--</span>--}}
                        {{--<h5 class="hero-unit__subtitle">Elric Bros School</h5>--}}
                        {{--<h1 class="hero-unit__title">The <span class="text-primary">Alchemists</span></h1>--}}
                        {{--<div class="hero-unit__desc">Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore .</div>--}}
                        {{--<a href="#" class="btn btn-inverse btn-sm btn-outline btn-icon-right btn-condensed hero-unit__btn" data-toggle="modal" data-target="#modal-login-register">Read More <i class="fa fa-plus text-primary"></i></a>--}}
                    {{--</div>--}}
            {{--</div>--}}
            {{--<div class="item">--}}
                {{--<a href="#"><img src="http://placekitten.com/1600/600" /></a>--}}
                {{--<div class="carousel-caption">--}}
                    {{--<h3>Meow</h3>--}}
                    {{--<p>Just Kitten Around</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="item">--}}
                {{--<a href="#"><img src="http://placekitten.com/1600/600" /></a>--}}
                {{--<div class="carousel-caption">--}}
                    {{--<h3>Meow</h3>--}}
                    {{--<p>Just Kitten Around</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

        <a class="left carousel-control" href="#carousel-example" style="width:4%" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example" style="width:4%" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

    <!-- END Slider -->

    <!-- Content
    ================================================== -->
    <div class="site-content">
        <div class="container">

            <div class="row">
                <!-- Content -->
                <div class="content col-md-8">

                    <!-- Featured News -->
                    <div class="card card--clean">
                        <header class="card__header card__header--has-filter">
                            <h4>Featured News</h4>
                            {{--<ul class="category-filter category-filter--featured">--}}
                                {{--<li class="category-filter__item"><a href="#" class="category-filter__link category-filter__link--reset category-filter__link--active">All</a></li>--}}
                                {{--<li class="category-filter__item"><a href="#" class="category-filter__link" data-category="posts__item--category-1">The Team</a></li>--}}
                                {{--<li class="category-filter__item"><a href="#" class="category-filter__link" data-category="posts__item--category-3">Playoffs</a></li>--}}
                                {{--<li class="category-filter__item"><a href="#" class="category-filter__link" data-category="posts__item--category-2">Injuries</a></li>--}}
                            {{--</ul>--}}
                        </header>
                        <div class="card__content">

                            <!-- Slider -->
                            <div class="slick posts posts--slider-featured">

                                @foreach($feat_news as $fn)

                                    <div class="posts__item posts__item--category-1">
                                        <a href="{{asset('news/')}}/{{$fn['id']}}" class="posts__link-wrapper">
                                            <figure class="posts__thumb">
                                                <img src="{{asset('news_images/')}}/{{$fn['news_big_image']}}" alt="">
                                            </figure>
                                            <div class="posts__inner">
                                                <div class="posts__cat">
                                                    {{--<span class="label posts__cat-label">The Team</span>--}}
                                                </div>
                                                <h3 class="posts__title">{{$fn['news_title']}}</h3>
                                                <div class="post-author">
                                                    <figure class="post-author__avatar">
                                                        <img src="{{asset('images/samples/avatar-4.jpg')}}" alt="Post Author Avatar">
                                                    </figure>
                                                    <div class="post-author__info">
                                                        <h4 class="post-author__name">Jesse Stevens</h4>
                                                        <time datetime="2017-08-28" class="posts__date">{{date('d M Y', strtotime($fn['publish_at']))}}</time>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                @endforeach
                                {{--<div class="posts__item posts__item--category-1">--}}
                                    {{--<a href="#" class="posts__link-wrapper">--}}
                                        {{--<figure class="posts__thumb">--}}
                                            {{--<img src="{{asset('images/samples/post-slide1.jpg')}}" alt="">--}}
                                        {{--</figure>--}}
                                        {{--<div class="posts__inner">--}}
                                            {{--<div class="posts__cat">--}}
                                                {{--<span class="label posts__cat-label">The Team</span>--}}
                                            {{--</div>--}}
                                            {{--<h3 class="posts__title">The Planettroters will <span class="posts__title-higlight">perform this May 4th</span> at Madison Cube</h3>--}}
                                            {{--<div class="post-author">--}}
                                                {{--<figure class="post-author__avatar">--}}
                                                    {{--<img src="{{asset('images/samples/avatar-4.jpg')}}" alt="Post Author Avatar">--}}
                                                {{--</figure>--}}
                                                {{--<div class="post-author__info">--}}
                                                    {{--<h4 class="post-author__name">Jesse Stevens</h4>--}}
                                                    {{--<time datetime="2017-08-28" class="posts__date">August 28th, 2017</time>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</a>--}}
                                {{--</div>--}}

                            </div>
                            <!-- Slider / End -->

                        </div>
                    </div>
                    <!-- Featured News / End -->


                    <!-- Post Area 1 -->
                    {{--<div class="posts posts--cards post-grid row">--}}

                        {{--<div class="post-grid__item col-sm-6">--}}
                            {{--<div class="posts__item posts__item--card posts__item--category-1 card">--}}
                                {{--<figure class="posts__thumb">--}}
                                    {{--<div class="posts__cat">--}}
                                        {{--<span class="label posts__cat-label">The Team</span>--}}
                                    {{--</div>--}}
                                    {{--<a href="#"><img src="{{asset('images/samples/post-img6.jpg')}}" alt=""></a>--}}
                                {{--</figure>--}}
                                {{--<div class="posts__inner card__content">--}}
                                    {{--<a href="#" class="posts__cta"></a>--}}
                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                    {{--<h6 class="posts__title"><a href="#">Michael Bryan was chosen again as best player with 45 points</a></h6>--}}
                                    {{--<div class="posts__excerpt">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<footer class="posts__footer card__footer">--}}
                                    {{--<div class="post-author">--}}
                                        {{--<figure class="post-author__avatar">--}}
                                            {{--<img src="{{asset('images/samples/avatar-1.jpg')}}" alt="Post Author Avatar">--}}
                                        {{--</figure>--}}
                                        {{--<div class="post-author__info">--}}
                                            {{--<h4 class="post-author__name">James Spiegel</h4>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<ul class="post__meta meta">--}}
                                        {{--<li class="meta__item meta__item--views">2369</li>--}}
                                        {{--<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>--}}
                                        {{--<li class="meta__item meta__item--comments"><a href="#">18</a></li>--}}
                                    {{--</ul>--}}
                                {{--</footer>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<!-- Post Area 1 / End -->--}}


                    <!-- Lates News -->
                    <div class="card card--clean">
                        <header class="card__header card__header--has-btn">
                            <h4>Latest News</h4>
                            <a href="{{asset('news/')}}" class="btn btn-default btn-outline btn-xs card-header__button">See All Posts</a>
                        </header>
                        <div class="card__content">
                            <!-- Posts List -->
                            <div class="posts posts--cards posts--cards-thumb-left post-list">


                                @foreach($all_news as $an)

                                    <div class="post-list__item">
                                        <div class="posts__item posts__item--card posts__item--category-1 card">
                                            <figure class="posts__thumb">
                                                <a href="{{asset('news/')}}/{{$an['id']}}"><img src="{{asset('news_images/')}}/{{$an['news_big_image']}}" alt=""></a>
                                                {{--<a href="#" class="posts__cta"></a>--}}
                                            </figure>
                                            <div class="posts__inner">
                                                <div class="card__content">
                                                    <div class="posts__cat">
                                                        {{--<span class="label posts__cat-label">The Team</span>--}}
                                                    </div>
                                                    <h6 class="posts__title"><a href="{{asset('news/')}}/{{$an['id']}}">{{$an['news_title']}}</a></h6>
                                                    <time datetime="{{$an['publish_at']}}" class="posts__date">{{date('M d Y', strtotime($an['publish_at']))}}</time>
                                                    <div class="posts__excerpt">
                                                        {!! \Illuminate\Support\Str::limit($an['news_content'], 50) !!}
                                                    </div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <div class="post-author">
                                                        <figure class="post-author__avatar">
                                                            <img src="{{asset('images/samples/avatar-4.jpg')}}" alt="Post Author Avatar">
                                                        </figure>
                                                        <div class="post-author__info">
                                                            <h4 class="post-author__name">Author</h4>
                                                        </div>
                                                    </div>
                                                    <ul class="post__meta meta">
                                                        <li class="meta__item meta__item--views">2369</li>
                                                        <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                                        <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                                    </ul>
                                                </footer>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                                {{--<div class="post-list__item">--}}
                                    {{--<div class="posts__item posts__item--card posts__item--category-1 card">--}}
                                        {{--<figure class="posts__thumb">--}}
                                            {{--<a href="#"><img src="assets/images/samples/post-img14-m.jpg" alt=""></a>--}}
                                            {{--<a href="#" class="posts__cta"></a>--}}
                                        {{--</figure>--}}
                                        {{--<div class="posts__inner">--}}
                                            {{--<div class="card__content">--}}
                                                {{--<div class="posts__cat">--}}
                                                    {{--<span class="label posts__cat-label">The Team</span>--}}
                                                {{--</div>--}}
                                                {{--<h6 class="posts__title"><a href="#">The Championship Final will be be played in San Francisco</a></h6>--}}
                                                {{--<time datetime="2016-08-18" class="posts__date">August 18th, 2016</time>--}}
                                                {{--<div class="posts__excerpt">--}}
                                                    {{--Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<footer class="posts__footer card__footer">--}}
                                                {{--<div class="post-author">--}}
                                                    {{--<figure class="post-author__avatar">--}}
                                                        {{--<img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">--}}
                                                    {{--</figure>--}}
                                                    {{--<div class="post-author__info">--}}
                                                        {{--<h4 class="post-author__name">Jessica Hoops</h4>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<ul class="post__meta meta">--}}
                                                    {{--<li class="meta__item meta__item--views">2369</li>--}}
                                                    {{--<li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>--}}
                                                    {{--<li class="meta__item meta__item--comments"><a href="#">18</a></li>--}}
                                                {{--</ul>--}}
                                            {{--</footer>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            </div>
                            <!-- Posts List / End -->
                        </div>
                    </div>
                    <!-- Lates News / End -->


                </div>
                <!-- Content / End -->

                <!-- Sidebar -->
                <div id="sidebar" class="sidebar col-md-4">
                    <!-- Widget: Standings -->
                    <aside class="widget card widget--sidebar widget-standings">
                        <div class="widget__title card__header card__header--has-btn">
                            <h4>Pro League Standings</h4>
                            <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">See All Stats</a>
                        </div>
                        <div class="widget__content card__content">
                            <div class="table-responsive">
                                <table class="table table-hover table-standings">
                                    <thead>
                                    <tr>
                                        <th>Team Positions</th>
                                        <th>W</th>
                                        <th>L</th>
                                        <th>GB</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/pirates_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">L.A Pirates</h6>
                                                    <span class="team-meta__place">Bebop Institute</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>45</td>
                                        <td>5</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/sharks_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Sharks</h6>
                                                    <span class="team-meta__place">Marine College</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>42</td>
                                        <td>8</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/alchemists_b_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">The Alchemists</h6>
                                                    <span class="team-meta__place">Eric Bros School</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>40</td>
                                        <td>10</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/ocean_kings_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Ocean Kings</h6>
                                                    <span class="team-meta__place">Bay College</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>38</td>
                                        <td>12</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/red_wings_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Red Wings</h6>
                                                    <span class="team-meta__place">Icarus College</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>37</td>
                                        <td>13</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/lucky_clovers_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Lucky Clovers</h6>
                                                    <span class="team-meta__place">St. Patrick’s Institute</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>34</td>
                                        <td>16</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/draconians_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Draconians</h6>
                                                    <span class="team-meta__place">Draconians</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>31</td>
                                        <td>19</td>
                                        <td>14</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/bloody_wave_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Bloody Wave</h6>
                                                    <span class="team-meta__place">Atlantic School</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>30</td>
                                        <td>20</td>
                                        <td>15</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </aside>
                    <!-- Widget: Standings / End -->


                    <!-- Widget: Social Buttons -->
                    <aside class="widget widget--sidebar widget-social">
                        <a href="https://www.facebook.com/outplayedonline/" class="btn-social-counter btn-social-counter--fb" target="_blank">
                            <div class="btn-social-counter__icon">
                                <i class="fa fa-facebook"></i>
                            </div>
                            <h6 class="btn-social-counter__title">Like Our Facebook Page</h6>
                            <span class="btn-social-counter__add-icon"></span>
                        </a>
                        <a href="https://twitter.com/outplayedonline" class="btn-social-counter btn-social-counter--twitter" target="_blank">
                            <div class="btn-social-counter__icon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <h6 class="btn-social-counter__title">Follow Us on Twitter</h6>
                            <span class="btn-social-counter__add-icon"></span>
                        </a>
                        <a href="#" class="btn-social-counter btn-social-counter--rss" target="_blank">
                            <div class="btn-social-counter__icon">
                                <i class="fa fa-user-circle-o"></i>
                            </div>
                            <h6 class="btn-social-counter__title">Visit us in our Forum</h6>
                            <span class="btn-social-counter__add-icon"></span>
                        </a>
                    </aside>
                    <!-- Widget: Social Buttons / End -->


                    <!-- Widget: Popular News -->
                    <aside class="widget widget--sidebar card widget-popular-posts">
                        <div class="widget__title card__header">
                            <h4>Last Forum Posts</h4>
                        </div>
                        <div class="widget__content card__content">
                            <ul class="posts posts--simple-list">
                                <li class="posts__item posts__item--category-2">
                                    <figure class="posts__thumb">
                                        <a href="#"><img src="assets/images/samples/post-img1-xs.jpg" alt=""></a>
                                    </figure>
                                    <div class="posts__inner">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">Injuries</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">Mark Johnson has a Tibia Fracture and is gonna be out</a></h6>
                                        <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                    </div>
                                </li>



                            </ul>
                        </div>
                    </aside>
                    <!-- Widget: Popular News / End -->


                    <!-- Widget: Featured Player -->
                    {{--<aside class="widget card widget--sidebar widget-player">--}}
                        {{--<div class="widget__content card__content">--}}
                            {{--<div class="widget-player__team-logo">--}}
                                {{--<img src="assets/images/logo.png" alt="">--}}
                            {{--</div>--}}
                            {{--<figure class="widget-player__photo">--}}
                                {{--<img src="assets/images/samples/widget-featured-player.png" alt="">--}}
                            {{--</figure>--}}
                            {{--<header class="widget-player__header clearfix">--}}
                                {{--<div class="widget-player__number">38</div>--}}
                                {{--<h4 class="widget-player__name">--}}
                                    {{--<span class="widget-player__first-name">James</span>--}}
                                    {{--<span class="widget-player__last-name">Girobili</span>--}}
                                {{--</h4>--}}
                            {{--</header>--}}
                            {{--<div class="widget-player__content">--}}
                                {{--<div class="widget-player__content-inner">--}}
                                    {{--<div class="widget-player__stat widget-player__assists">--}}
                                        {{--<h6 class="widget-player__stat-label">Assists</h6>--}}
                                        {{--<div class="widget-player__stat-number">16.9</div>--}}
                                        {{--<div class="widget-player__stat-legend">AVG</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="widget-player__stat widget-player__steals">--}}
                                        {{--<h6 class="widget-player__stat-label">Steals</h6>--}}
                                        {{--<div class="widget-player__stat-number">7.2</div>--}}
                                        {{--<div class="widget-player__stat-legend">AVG</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="widget-player__stat widget-player__blocks">--}}
                                        {{--<h6 class="widget-player__stat-label">Blocks</h6>--}}
                                        {{--<div class="widget-player__stat-number">12.4</div>--}}
                                        {{--<div class="widget-player__stat-legend">AVG</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<footer class="widget-player__footer">--}}
                  {{--<span class="widget-player__footer-txt">--}}
                    {{--<i class="fa fa-star"></i> Featured Player--}}
                  {{--</span>--}}
                            {{--</footer>--}}
                        {{--</div>--}}
                    {{--</aside>--}}
                    <!-- Widget: Featured Player / End -->


                    <!-- Widget: Game Result -->
                    {{--<aside class="widget card widget--sidebar widget-game-result">--}}
                        {{--<div class="widget__title card__header card__header--has-btn">--}}
                            {{--<h4>Last Game Results</h4>--}}
                            {{--<button class="btn btn-default btn-outline btn-xs card-header__button js-switch-toggle"><span class="js-switch-txt" data-text-expand="Expand Stats" data-text-shrink="Shrink Stats">Expand Stats</span></button>--}}
                        {{--</div>--}}
                        {{--<div class="widget__content card__content">--}}
                            {{--<!-- Game Score -->--}}
                            {{--<div class="widget-game-result__section">--}}
                                {{--<div class="widget-game-result__section-inner">--}}
                                    {{--<header class="widget-game-result__header">--}}
                                        {{--<h3 class="widget-game-result__title">Championship Quarter Finals</h3>--}}
                                        {{--<time class="widget-game-result__date" datetime="2016-03-24">Saturday, March 24th, 2016</time>--}}
                                    {{--</header>--}}

                                    {{--<div class="widget-game-result__main">--}}
                                        {{--<!-- 1st Team -->--}}
                                        {{--<div class="widget-game-result__team widget-game-result__team--first">--}}
                                            {{--<figure class="widget-game-result__team-logo">--}}
                                                {{--<a href="#"><img src="assets/images/samples/logos/alchemists_last_game_results_small.png" alt=""></a>--}}
                                            {{--</figure>--}}
                                            {{--<div class="widget-game-result__team-info">--}}
                                                {{--<h5 class="widget-game-result__team-name">Alchemists</h5>--}}
                                                {{--<div class="widget-game-result__team-desc">Elric Bros School</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- 1st Team / End -->--}}

                                        {{--<div class="widget-game-result__score-wrap">--}}
                                            {{--<div class="widget-game-result__score">--}}
                                                {{--<span class="widget-game-result__score-result widget-game-result__score-result--winner">107</span> <span class="widget-game-result__score-dash">-</span> <span class="widget-game-result__score-result widget-game-result__score-result--loser">102</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="widget-game-result__score-label">Final Score</div>--}}
                                        {{--</div>--}}

                                        {{--<!-- 2nd Team -->--}}
                                        {{--<div class="widget-game-result__team widget-game-result__team--second">--}}
                                            {{--<figure class="widget-game-result__team-logo">--}}
                                                {{--<a href="#"><img src="assets/images/samples/logos/sharks_last_game_results_small.png" alt=""></a>--}}
                                            {{--</figure>--}}
                                            {{--<div class="widget-game-result__team-info">--}}
                                                {{--<h5 class="widget-game-result__team-name">Sharks</h5>--}}
                                                {{--<div class="widget-game-result__team-desc">Marine College</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- 2nd Team / End -->--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- Game Score / End -->--}}

                            {{--<!-- Scoreboard -->--}}
                            {{--<div class="widget-game-result__section">--}}
                                {{--<div class="widget-game-result__table-stats">--}}
                                    {{--<div class="table-responsive">--}}
                                        {{--<table class="table table__cell-center table-thead-color">--}}
                                            {{--<thead>--}}
                                            {{--<tr>--}}
                                                {{--<th>Scoreboard</th>--}}
                                                {{--<th>1</th>--}}
                                                {{--<th>2</th>--}}
                                                {{--<th>3</th>--}}
                                                {{--<th>4</th>--}}
                                                {{--<th>T</th>--}}
                                            {{--</tr>--}}
                                            {{--</thead>--}}
                                            {{--<tbody>--}}
                                            {{--<tr>--}}
                                                {{--<th>Alchemists</th>--}}
                                                {{--<td>30</td>--}}
                                                {{--<td>31</td>--}}
                                                {{--<td>22</td>--}}
                                                {{--<td>24</td>--}}
                                                {{--<td>107</td>--}}
                                            {{--</tr>--}}
                                            {{--<tr>--}}
                                                {{--<th>Sharks</th>--}}
                                                {{--<td>22</td>--}}
                                                {{--<td>34</td>--}}
                                                {{--<td>20</td>--}}
                                                {{--<td>26</td>--}}
                                                {{--<td>102</td>--}}
                                            {{--</tr>--}}
                                            {{--</tbody>--}}
                                        {{--</table>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- Scoreboard / End -->--}}

                            {{--<!-- Game Statistics -->--}}
                            {{--<div class="widget-game-result__section">--}}
                                {{--<header class="widget-game-result__subheader card__subheader card__subheader--sm card__subheader--nomargins">--}}
                                    {{--<h5 class="widget-game-result__subtitle">Game Statistics</h5>--}}
                                {{--</header>--}}
                                {{--<div class="widget-game-result__section-inner">--}}
                                    {{--<!-- Progress: Assists -->--}}
                                    {{--<div class="progress-double-wrapper">--}}
                                        {{--<h6 class="progress-title">Assists</h6>--}}
                                        {{--<div class="progress-inner-holder">--}}
                                            {{--<div class="progress__digit progress__digit--left">22</div>--}}
                                            {{--<div class="progress__double">--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress__bar progress__bar-width-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                                {{--</div>--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress__bar progress__bar--info progress__bar-width-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="progress__digit progress__digit--right progress__digit--highlight">36</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- Progress: Assists / End -->--}}

                                    {{--<!-- Progress: Rebounds -->--}}
                                    {{--<div class="progress-double-wrapper">--}}
                                        {{--<h6 class="progress-title">Rebounds</h6>--}}
                                        {{--<div class="progress-inner-holder">--}}
                                            {{--<div class="progress__digit progress__digit--left progress__digit--highlight">35</div>--}}
                                            {{--<div class="progress__double">--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress__bar progress__bar-width-90" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                                {{--</div>--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress__bar progress__bar--info progress__bar-width-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="progress__digit progress__digit--right">18</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- Progress: Rebounds / End -->--}}

                                    {{--<!-- Progress: Steals -->--}}
                                    {{--<div class="progress-double-wrapper">--}}
                                        {{--<h6 class="progress-title">Steals</h6>--}}
                                        {{--<div class="progress-inner-holder">--}}
                                            {{--<div class="progress__digit progress__digit--left">14</div>--}}
                                            {{--<div class="progress__double">--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress__bar progress__bar-width-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                                {{--</div>--}}
                                                {{--<div class="progress">--}}
                                                    {{--<div class="progress__bar progress__bar--info progress__bar-width-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="progress__digit progress__digit--right progress__digit--highlight">24</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- Progress: Steals / End -->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!-- Game Statistics / End -->--}}

                            {{--<div class="widget-game-result__extra-stats">--}}

                                {{--<!-- Game MVP -->--}}
                                {{--<div class="widget-game-result__section">--}}
                                    {{--<header class="widget-game-result__subheader card__subheader card__subheader--sm card__subheader--nomargins">--}}
                                        {{--<h5 class="widget-game-result__subtitle">Game MVP</h5>--}}
                                    {{--</header>--}}
                                    {{--<div class="widget-game-result__section-inner">--}}
                                        {{--<div class="player-details">--}}
                                            {{--<div class="player-details__info">--}}
                                                {{--<figure class="player-details__photo">--}}
                                                    {{--<a href="#"><img src="assets/images/samples/stats_player_02.jpg" alt=""></a>--}}
                                                {{--</figure>--}}
                                                {{--<div class="player-details__info-holder">--}}
                                                    {{--<h5 class="player-details__name"><a href="#">Mark Stevens</a></h5>--}}
                                                    {{--<span class="player-details__position">1st Power Forward</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="player-details__stats">--}}
                                                {{--<div class="player-details__circular circular">--}}
                                                    {{--<div class="circular__bar" data-percent="80">--}}
                                                        {{--<span class="circular__percents">36<small>Pts</small></span>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="player-details__circular circular">--}}
                                                    {{--<div class="circular__bar" data-percent="60">--}}
                                                        {{--<span class="circular__percents">18<small>Reb</small></span>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="player-details__circular circular">--}}
                                                    {{--<div class="circular__bar" data-percent="70">--}}
                                                        {{--<span class="circular__percents">29<small>Ast</small></span>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- Game MVP / End -->--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</aside>--}}
                    <!-- Widget: Game Result / End -->


                    <!-- Widget: Trending News -->
                    {{--<aside class="widget widget--sidebar card widget-tabbed">--}}
                        {{--<div class="widget__title card__header">--}}
                            {{--<h4>Top Trending News</h4>--}}
                        {{--</div>--}}
                        {{--<div class="widget__content card__content">--}}
                            {{--<div class="widget-tabbed__tabs">--}}
                                {{--<!-- Widget Tabs -->--}}
                                {{--<ul class="nav nav-tabs nav-justified widget-tabbed__nav" role="tablist">--}}
                                    {{--<li role="presentation" class="active"><a href="#widget-tabbed-newest" aria-controls="widget-tabbed-newest" role="tab" data-toggle="tab">Newest</a></li>--}}
                                    {{--<li role="presentation"><a href="#widget-tabbed-commented" aria-controls="widget-tabbed-commented" role="tab" data-toggle="tab">Most Commented</a></li>--}}
                                    {{--<li role="presentation"><a href="#widget-tabbed-popular" aria-controls="widget-tabbed-popular" role="tab" data-toggle="tab">Popular</a></li>--}}
                                {{--</ul>--}}

                                {{--<!-- Widget Tab panes -->--}}
                                {{--<div class="tab-content widget-tabbed__tab-content">--}}
                                    {{--<!-- Newest -->--}}
                                    {{--<div role="tabpanel" class="tab-pane fade in active" id="widget-tabbed-newest">--}}
                                        {{--<ul class="posts posts--simple-list">--}}
                                            {{--<li class="posts__item posts__item--category-1">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">The Team</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next mnonth</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="posts__item posts__item--category-1">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">The Team</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="posts__item posts__item--category-1">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">The Team</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">This Saturday starts the intensive training for the Final</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="posts__item posts__item--category-3">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">Playoffs</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">New York Islanders are now flying to California for the big game</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="posts__item posts__item--category-1">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">The Team</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">The Female Division is growing strong after their third game</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<!-- Commented -->--}}
                                    {{--<div role="tabpanel" class="tab-pane fade" id="widget-tabbed-commented">--}}
                                        {{--<ul class="posts posts--simple-list">--}}
                                            {{--<li class="posts__item posts__item--category-3">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">Playoffs</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">New York Islanders are now flying to California for the big game</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="posts__item posts__item--category-1">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">The Team</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">The Female Division is growing strong after their third game</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="posts__item posts__item--category-1">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">The Team</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="posts__item posts__item--category-1">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">The Team</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">This Saturday starts the intensive training for the Final</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="posts__item posts__item--category-1">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">The Team</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next mnonth</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<!-- Popular -->--}}
                                    {{--<div role="tabpanel" class="tab-pane fade" id="widget-tabbed-popular">--}}
                                        {{--<ul class="posts posts--simple-list">--}}
                                            {{--<li class="posts__item posts__item--category-1">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">The Team</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="posts__item posts__item--category-1">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">The Team</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">This Saturday starts the intensive training for the Final</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="posts__item posts__item--category-1">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">The Team</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next mnonth</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="posts__item posts__item--category-1">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">The Team</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">The Female Division is growing strong after their third game</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="posts__item posts__item--category-3">--}}
                                                {{--<div class="posts__inner">--}}
                                                    {{--<div class="posts__cat">--}}
                                                        {{--<span class="label posts__cat-label">Playoffs</span>--}}
                                                    {{--</div>--}}
                                                    {{--<h6 class="posts__title"><a href="#">New York Islanders are now flying to California for the big game</a></h6>--}}
                                                    {{--<time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>--}}
                                                    {{--<div class="posts__excerpt">--}}
                                                        {{--Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</aside>--}}
                    <!-- Widget: Trending News / End -->


                    <!-- Widget: Banner -->
                    <aside class="widget card widget--sidebar widget-banner">
                        <div class="widget__title card__header">
                            <h4>Advertisement</h4>
                        </div>
                        <div class="widget__content card__content">
                            <figure class="widget-banner__img">
                                <a href="https://themeforest.net/item/the-alchemists-sports-news-html-template/19106722?ref=dan_fisher"><img src="{{asset('images/logo-outplayed.png')}}" alt="Banner"></a>
                            </figure>
                        </div>
                    </aside>
                    <!-- Widget: Banner / End -->


                    <!-- Widget: Newsletter -->
                    <aside class="widget widget--sidebar card widget-newsletter">
                        <div class="widget__title card__header">
                            <h4>Our Newsletter</h4>
                        </div>
                        <div class="widget__content card__content">
                            <h5 class="widget-newsletter__subtitle">Subscribe Now!</h5>
                            <div class="widget-newsletter__desc">
                                <p>Receive the latest news from the team: game reminders, new adquisitions and professional match results.</p>
                            </div>
                            <form action="#" id="newsletter" class="inline-form">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Your email address...">
                                    <span class="input-group-btn">
                      <button class="btn btn-lg btn-default" type="button">Send</button>
                    </span>
                                </div>
                            </form>
                        </div>
                    </aside>
                    <!-- Widget: Newsletter / End -->


                    <!-- Widget: Match Announcement -->
                    {{--<aside class="widget widget--sidebar card widget-preview">--}}
                        {{--<div class="widget__title card__header">--}}
                            {{--<h4>Top Next Match</h4>--}}
                        {{--</div>--}}
                        {{--<div class="widget__content card__content">--}}

                            {{--<!-- Match Preview -->--}}
                            {{--<div class="match-preview">--}}
                                {{--<section class="match-preview__body">--}}
                                    {{--<header class="match-preview__header">--}}
                                        {{--<h3 class="match-preview__title">Championship Quarter Finals</h3>--}}
                                        {{--<time class="match-preview__date" datetime="2017-05-17">Saturday, May 17th, 2017</time>--}}
                                    {{--</header>--}}
                                    {{--<div class="match-preview__content">--}}

                                        {{--<!-- 1st Team -->--}}
                                        {{--<div class="match-preview__team match-preview__team--first">--}}
                                            {{--<figure class="match-preview__team-logo">--}}
                                                {{--<img src="assets/images/samples/logo-alchemists--sm.png" alt="">--}}
                                            {{--</figure>--}}
                                            {{--<h5 class="match-preview__team-name">Alchemists</h5>--}}
                                            {{--<div class="match-preview__team-info">Elric Bros School</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- 1st Team / End -->--}}

                                        {{--<div class="match-preview__vs">--}}
                                            {{--<div class="match-preview__conj">VS</div>--}}
                                            {{--<div class="match-preview__match-info">--}}
                                                {{--<time class="match-preview__match-time" datetime="2017-05-17 09:00">9:00 PM</time>--}}
                                                {{--<div class="match-preview__match-place">Madison Cube Stadium</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<!-- 2nd Team -->--}}
                                        {{--<div class="match-preview__team match-preview__team--second">--}}
                                            {{--<figure class="match-preview__team-logo">--}}
                                                {{--<img src="assets/images/samples/logo-l-clovers--sm.png" alt="">--}}
                                            {{--</figure>--}}
                                            {{--<h5 class="match-preview__team-name">Clovers</h5>--}}
                                            {{--<div class="match-preview__team-info">ST Paddy's Institute</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- 2nd Team / End -->--}}

                                    {{--</div>--}}
                                    {{--<div class="match-preview__action">--}}
                                        {{--<a href="#" class="btn btn-default btn-block">Buy Tickets Now</a>--}}
                                    {{--</div>--}}
                                {{--</section>--}}
                                {{--<section class="match-preview__countdown countdown">--}}
                                    {{--<h4 class="countdown__title">Game Countdown</h4>--}}
                                    {{--<div class="countdown__content">--}}
                                        {{--<div class="countdown-counter" data-date="September 12, 2017 12:00:00"></div>--}}
                                    {{--</div>--}}
                                {{--</section>--}}
                            {{--</div>--}}
                            {{--<!-- Match Preview / End -->--}}

                        {{--</div>--}}
                    {{--</aside>--}}
                    <!-- Widget: Match Announcement / End -->

                </div>
                <!-- Sidebar / End -->
            </div>

        </div>
    </div>

    <!-- Content / End -->


    <!-- Login/Register Modal -->
    <div class="modal fade" id="modal-steamid" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal--login" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <div class="modal-account-holder">
                        <div class="col-lg-12" style="text-align:center;margin-top:25px;">

                            <div class="form-group">
                                <h5>Add your SteamID to your account!</h5>
                            </div>

                            <div class="form-group">
                                <a href="auth/steam" class="btn btn-primary btn-lg">Get your SteamID</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login/Register Modal / End -->




@endsection