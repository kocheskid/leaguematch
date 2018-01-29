@extends('layouts.app')

@section('title','All News')

@section('body')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="page-heading__title">News <span class="highlight">OUTPLAYED</span></h1>
                    <ol class="page-heading__breadcrumb breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">All News</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="site-content">
        <div class="container">

            <div class="row">
                <!-- Content -->
                <div class="content col-md-8">

                    <!-- Posts List -->
                    <div class="posts posts--cards posts--cards-thumb-lg post-list">

                        <div class="post-list__item">

                            @foreach($all_news as $an)

                                <div class="posts__item posts__item--card posts__item--category-1 card">
                                    <figure class="posts__thumb">
                                        <a href="{{asset('news/')}}/{{$an['id']}}"><img src="{{asset('news_images/')}}/{{$an['news_big_image']}}" alt=""></a>
                                    </figure>
                                    <div class="posts__inner card__content">
                                        {{--<a href="#" class="posts__cta"></a>--}}
                                        <div class="posts__cat">
                                            {{--<span class="label posts__cat-label">The Team</span>--}}
                                        </div>
                                        <h6 class="posts__title"><a href="{{asset('news/')}}/{{$an['id']}}">{{$an['news_title']}}</a></h6>
                                        <time datetime="{{$an['publish_at']}}" class="posts__date">{{date('d M Y', strtotime($an['publish_at']))}}</time>
                                        <div class="posts__excerpt">
                                            {!! \Illuminate\Support\Str::limit($an['news_content'], 100) !!}
                                        </div>
                                    </div>
                                    <footer class="posts__footer card__footer">
                                        <div class="post-author">
                                            <figure class="post-author__avatar">
                                                <img src="{{asset('images/samples/avatar-1.jpg')}}" alt="Post Author Avatar">
                                            </figure>
                                            <div class="post-author__info">
                                                <h4 class="post-author__name">Author</h4>
                                            </div>
                                        </div>
                                        <ul class="post__meta meta">
                                            <li class="meta__item meta__item--views">2369</li>
                                            <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                                            <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                        </ul>
                                    </footer>
                                </div>

                            @endforeach

                        </div>

                    </div>
                    <!-- Posts List / End -->

                    <!-- Post Pagination -->
                    <nav class="post-pagination text-center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><span>...</span></li>
                            <li><a href="#">16</a></li>
                        </ul>
                    </nav>
                    <!-- Post Pagination / End -->


                </div>
                <!-- Content / End -->

                <!-- Sidebar -->
                <div id="sidebar" class="sidebar col-md-4">
                    <!-- Widget: Social Buttons -->
                    <aside class="widget widget--sidebar widget-social">
                        <a href="#" class="btn-social-counter btn-social-counter--fb" target="_blank">
                            <div class="btn-social-counter__icon">
                                <i class="fa fa-facebook"></i>
                            </div>
                            <h6 class="btn-social-counter__title">Like Our Facebook Page</h6>
                            <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Likes</span>
                            <span class="btn-social-counter__add-icon"></span>
                        </a>
                        <a href="#" class="btn-social-counter btn-social-counter--twitter" target="_blank">
                            <div class="btn-social-counter__icon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <h6 class="btn-social-counter__title">Follow Us on Twitter</h6>
                            <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Followers</span>
                            <span class="btn-social-counter__add-icon"></span>
                        </a>
                        <a href="#" class="btn-social-counter btn-social-counter--rss" target="_blank">
                            <div class="btn-social-counter__icon">
                                <i class="fa fa-rss"></i>
                            </div>
                            <h6 class="btn-social-counter__title">Subscribe to Our RSS</h6>
                            <span class="btn-social-counter__count"><span class="btn-social-counter__count-num">840</span> Subscribers</span>
                            <span class="btn-social-counter__add-icon"></span>
                        </a>
                    </aside>
                    <!-- Widget: Social Buttons / End -->


                    <!-- Widget: Breaking News -->
                    <aside class="widget widget--sidebar card widget-featured">
                        <div class="widget__title card__header">
                            <h4>Breaking News</h4>
                        </div>
                        <div class="widget__content card__content">
                            <ul class="posts posts--simple-list">
                                <li class="posts__item posts__item--category-1">
                                    <figure class="posts__thumb">
                                        <a href="#"><img src="assets/images/samples/post-img12-xs.jpg" alt=""></a>
                                    </figure>
                                    <div class="posts__inner">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">The Team</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">The Alchemists just won their Final Game and became Champions!</a></h6>
                                    </div>
                                    <div class="posts__excerpt posts__excerpt--space">
                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div>
                                    <footer class="posts__footer card__footer">
                                        <div class="post-author">
                                            <figure class="post-author__avatar">
                                                <img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                                            </figure>
                                            <div class="post-author__info">
                                                <h4 class="post-author__name">Jessica Hoops</h4>
                                            </div>
                                        </div>
                                        <ul class="post__meta meta">
                                            <li class="meta__item meta__item--views">2369</li>
                                            <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                            <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                        </ul>
                                    </footer>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- Widget: Breaking News / End -->


                    <!-- Widget: Popular News -->
                    <aside class="widget widget--sidebar card widget-popular-posts">
                        <div class="widget__title card__header">
                            <h4>Popular News</h4>
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
                                <li class="posts__item posts__item--category-1">
                                    <figure class="posts__thumb">
                                        <a href="#"><img src="assets/images/samples/post-img2-xs.jpg" alt=""></a>
                                    </figure>
                                    <div class="posts__inner">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">The Team</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">Jay Rorks is only 24 points away from breaking the record</a></h6>
                                        <time datetime="2016-08-22" class="posts__date">August 22nd, 2016</time>
                                    </div>
                                </li>
                                <li class="posts__item posts__item--category-1">
                                    <figure class="posts__thumb">
                                        <a href="#"><img src="assets/images/samples/post-img3-xs.jpg" alt=""></a>
                                    </figure>
                                    <div class="posts__inner">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">The Team</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                        <time datetime="2016-08-21" class="posts__date">August 21st, 2016</time>
                                    </div>
                                </li>
                                <li class="posts__item posts__item--category-1">
                                    <figure class="posts__thumb">
                                        <a href="#"><img src="assets/images/samples/post-img4-xs.jpg" alt=""></a>
                                    </figure>
                                    <div class="posts__inner">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">The Team</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
                                        <time datetime="2016-08-21" class="posts__date">August 21st, 2016</time>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- Widget: Popular News / End -->


                    <!-- Widget: Tag Cloud -->
                    <aside class="widget widget--sidebar card widget-tagcloud">
                        <div class="widget__title card__header">
                            <h4>Tag Cloud</h4>
                        </div>
                        <div class="widget__content card__content">
                            <div class="tagcloud">
                                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PLAYOFFS</a>
                                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">ALCHEMISTS</a>
                                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">INJURIES</a>
                                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">TEAM</a>
                                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">INCORPORATIONS</a>
                                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">UNIFORMS</a>
                                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">CHAMPIONS</a>
                                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PROFESSIONAL</a>
                                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">COACH</a>
                                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">STADIUM</a>
                                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">NEWS</a>
                                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PLAYERS</a>
                                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">WOMEN DIVISION</a>
                                <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">AWARDS</a>
                            </div>
                        </div>
                    </aside>
                    <!-- Widget: Tag Cloud / End -->


                    <!-- Widget: Banner -->
                    <aside class="widget card widget--sidebar widget-banner">
                        <div class="widget__title card__header">
                            <h4>Advertisement</h4>
                        </div>
                        <div class="widget__content card__content">
                            <figure class="widget-banner__img">
                                <a href="https://themeforest.net/item/the-alchemists-sports-news-html-template/19106722?ref=dan_fisher"><img src="assets/images/samples/banner.jpg" alt="Banner"></a>
                            </figure>
                        </div>
                    </aside>
                    <!-- Widget: Banner / End -->


                    <!-- Widget: Trending News -->
                    <aside class="widget widget--sidebar card widget-tabbed">
                        <div class="widget__title card__header">
                            <h4>Top Trending News</h4>
                        </div>
                        <div class="widget__content card__content">
                            <div class="widget-tabbed__tabs">
                                <!-- Widget Tabs -->
                                <ul class="nav nav-tabs nav-justified widget-tabbed__nav" role="tablist">
                                    <li role="presentation" class="active"><a href="#widget-tabbed-newest" aria-controls="widget-tabbed-newest" role="tab" data-toggle="tab">Newest</a></li>
                                    <li role="presentation"><a href="#widget-tabbed-commented" aria-controls="widget-tabbed-commented" role="tab" data-toggle="tab">Most Commented</a></li>
                                    <li role="presentation"><a href="#widget-tabbed-popular" aria-controls="widget-tabbed-popular" role="tab" data-toggle="tab">Popular</a></li>
                                </ul>

                                <!-- Widget Tab panes -->
                                <div class="tab-content widget-tabbed__tab-content">
                                    <!-- Newest -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="widget-tabbed-newest">
                                        <ul class="posts posts--simple-list">
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next mnonth</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">This Saturday starts the intensive training for the Final</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-3">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">Playoffs</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">New York Islanders are now flying to California for the big game</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The Female Division is growing strong after their third game</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Commented -->
                                    <div role="tabpanel" class="tab-pane fade" id="widget-tabbed-commented">
                                        <ul class="posts posts--simple-list">
                                            <li class="posts__item posts__item--category-3">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">Playoffs</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">New York Islanders are now flying to California for the big game</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The Female Division is growing strong after their third game</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">This Saturday starts the intensive training for the Final</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next mnonth</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Popular -->
                                    <div role="tabpanel" class="tab-pane fade" id="widget-tabbed-popular">
                                        <ul class="posts posts--simple-list">
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">This Saturday starts the intensive training for the Final</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next mnonth</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The Female Division is growing strong after their third game</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-3">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">Playoffs</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">New York Islanders are now flying to California for the big game</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </aside>
                    <!-- Widget: Trending News / End -->

                </div>
                <!-- Sidebar / End -->
            </div>

        </div>
    </div>

@endsection