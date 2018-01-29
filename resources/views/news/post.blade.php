@extends('layouts.app')

@section('title','Blog - Post')

@section('body')

    <!-- Page Heading
    ================================================== -->
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="page-heading__title">News <span class="highlight">OUTPLAYED</span></h1>
                    <ol class="page-heading__breadcrumb breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{asset('news/')}}">News</a></li>
                        <li class="active">{{$post_blog[0]['news_title']}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Content
    ================================================== -->
    <div class="site-content">
        <div class="container">

            <div class="row">
                <!-- Content -->
                <div class="content col-md-8">

                    <!-- Article -->
                    <article class="card card--lg post post--single">

                        <figure class="post__thumbnail">
                            <img src="{{asset('news_images/')}}/{{$post_blog[0]['news_big_image']}}" alt="">
                        </figure>

                        <div class="card__content">
                            <div class="post__category">
                                {{--<span class="label posts__cat-label">The Team</span>--}}
                            </div>
                            <header class="post__header">
                                <h2 class="post__title">{{$post_blog[0]['news_title']}}</h2>
                                <ul class="post__meta meta">
                                    <li class="meta__item meta__item--date"><time datetime="2017-08-23">{{date('d M Y', strtotime($post_blog[0]['publish_at']))}}</time></li>
                                    <li class="meta__item meta__item--views">2369</li>
                                    <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                    <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                </ul>
                            </header>

                            <div class="post__content">

                                {!! $post_blog[0]['news_content'] !!}

                            </div>

                            {{--<footer class="post__footer">--}}
                                {{--<div class="post__tags">--}}
                                    {{--<a href="#" class="btn btn-primary btn-outline btn-xs">Playoffs</a>--}}
                                    {{--<a href="#" class="btn btn-primary btn-outline btn-xs">Alchemists</a>--}}
                                    {{--<a href="#" class="btn btn-primary btn-outline btn-xs">Injuries</a>--}}
                                    {{--<a href="#" class="btn btn-primary btn-outline btn-xs">Team</a>--}}
                                    {{--<a href="#" class="btn btn-primary btn-outline btn-xs">Uniforms</a>--}}
                                    {{--<a href="#" class="btn btn-primary btn-outline btn-xs">Champions</a>--}}
                                {{--</div>--}}
                            {{--</footer>--}}

                        </div>
                    </article>
                    <!-- Article / End -->

                    <!-- Post Sharing Buttons -->
                    <div class="post-sharing">
                        <a href="#" class="btn btn-default btn-facebook btn-icon btn-block"><i class="fa fa-facebook"></i> <span class="post-sharing__label hidden-xs">Share on Facebook</span></a>
                        <a href="#" class="btn btn-default btn-twitter btn-icon btn-block"><i class="fa fa-twitter"></i> <span class="post-sharing__label hidden-xs">Share on Twitter</span></a>
                        <a href="#" class="btn btn-default btn-gplus btn-icon btn-block"><i class="fa fa-google-plus"></i> <span class="post-sharing__label hidden-xs">Share on Google+</span></a>
                    </div>
                    <!-- Post Sharing Buttons / End -->


                    <!-- Post Author -->
                    <div class="post-author card card--lg">
                        <div class="card__content">
                            <header class="post-author__header">
                                <figure class="post-author__avatar">
                                    <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                </figure>
                                <div class="post-author__info">
                                    <h4 class="post-author__name">James Spiegel</h4>
                                    <span class="post-author__slogan">The Alchemists Ninja</span>
                                </div>
                                <ul class="post-author__social-links social-links social-links--btn">
                                    <li class="social-links__item">
                                        <a href="#" class="social-links__link social-links__link--fb"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-links__item">
                                        <a href="#" class="social-links__link social-links__link--twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </header>
                            <div class="post-author__description">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.
                            </div>
                        </div>
                    </div>
                    <!-- Post Author / End -->


                    <!-- Related Posts -->
                    <div class="post-related row">
                        <div class="col-xs-6">
                            <!-- Prev Post -->
                            <div class="card post-related__prev">
                                <div class="card__content">

                                    <!-- Prev Post Links -->
                                    <a href="#" class="btn-nav">
                                        <i class="fa fa-chevron-left"></i>
                                    </a>
                                    <!-- Prev Post Links / End -->

                                    <ul class="posts posts--simple-list">
                                        <li class="posts__item posts__item--category-1">
                                            <div class="posts__inner">
                                                <div class="posts__cat">
                                                    <span class="label posts__cat-label">Injuries</span>
                                                </div>
                                                <h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                                <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <!-- Prev Post / End -->
                        </div>
                        <div class="col-xs-6">
                            <div class="card post-related__next">
                                <!-- Next Post -->
                                <div class="card__content">

                                    <ul class="posts posts--simple-list">
                                        <li class="posts__item posts__item--category-1">
                                            <div class="posts__inner">
                                                <div class="posts__cat">
                                                    <span class="label posts__cat-label">Injuries</span>
                                                </div>
                                                <h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
                                                <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                            </div>
                                        </li>
                                    </ul>

                                    <!-- Next Post Link -->
                                    <a href="#" class="btn-nav">
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                    <!-- Next Post Link / End -->

                                </div>
                                <!-- Next Post / End -->
                            </div>
                        </div>
                    </div>
                    <!-- Related Posts / End -->


                    <!-- Post Comments -->
                    <div class="post-comments card card--lg">
                        <header class="post-commments__header card__header">
                            <h4>Comments (18)</h4>
                        </header>
                        <div class="post-comments__content card__content">

                            <ul class="comments">
                                <li class="comments__item">
                                    <div class="comments__inner">
                                        <header class="comment__header">
                                            <div class="comment__author">
                                                <figure class="comment__author-avatar">
                                                    <img src="assets/images/samples/avatar-9.jpg" alt="">
                                                </figure>
                                                <div class="comment__author-info">
                                                    <h5 class="comment__author-name">Jake Casspon</h5>
                                                    <time class="comment__post-date" datetime="2016-08-23">2 hours ago</time>
                                                </div>
                                            </div>
                                            <div class="comment__reply">
                                                <a href="#" class="comment__reply-link btn btn-link btn-xs">Reply</a>
                                            </div>
                                        </header>
                                        <div class="comment__body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore etolor dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                        </div>
                                    </div>
                                </li>
                                <li class="comments__item">
                                    <div class="comments__inner">
                                        <header class="comment__header">
                                            <div class="comment__author">
                                                <figure class="comment__author-avatar">
                                                    <img src="assets/images/samples/avatar-10.jpg" alt="">
                                                </figure>
                                                <div class="comment__author-info">
                                                    <h5 class="comment__author-name">Jennifer Stevens</h5>
                                                    <time class="comment__post-date" datetime="2016-08-23">5 hours ago</time>
                                                </div>
                                            </div>
                                            <div class="comment__reply">
                                                <a href="#" class="comment__reply-link btn btn-link btn-xs">Reply</a>
                                            </div>
                                        </header>
                                        <div class="comment__body">
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.
                                        </div>
                                    </div>
                                    <ul class="comments--children">
                                        <li class="comments__item">
                                            <div class="comments__inner">
                                                <header class="comment__header">
                                                    <div class="comment__author">
                                                        <figure class="comment__author-avatar">
                                                            <img src="assets/images/samples/avatar-7.jpg" alt="">
                                                        </figure>
                                                        <div class="comment__author-info">
                                                            <h5 class="comment__author-name">The Speedtester</h5>
                                                            <time class="comment__post-date" datetime="2016-08-23">3 hours ago</time>
                                                        </div>
                                                    </div>
                                                    <div class="comment__reply">
                                                        <a href="#" class="comment__reply-link btn btn-link btn-xs">Reply</a>
                                                    </div>
                                                </header>
                                                <div class="comment__body">
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="comments__item">
                                    <div class="comments__inner">
                                        <header class="comment__header">
                                            <div class="comment__author">
                                                <figure class="comment__author-avatar">
                                                    <img src="assets/images/samples/avatar-11.jpg" alt="">
                                                </figure>
                                                <div class="comment__author-info">
                                                    <h5 class="comment__author-name">Marina Universe</h5>
                                                    <time class="comment__post-date" datetime="2016-08-23">5 hours ago</time>
                                                </div>
                                            </div>
                                            <div class="comment__reply">
                                                <a href="#" class="comment__reply-link btn btn-link btn-xs">Reply</a>
                                            </div>
                                        </header>
                                        <div class="comment__body">
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <!-- Comments Pagination -->
                            <nav aria-label="Comments Pavigation" class="post__comments-pagination">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><span>...</span></li>
                                    <li><a href="#">16</a></li>
                                </ul>
                            </nav>
                            <!-- Comments Pagination / End -->

                        </div>
                    </div>
                    <!-- Post Comments / End -->


                    <!-- Post Comment Form -->
                    <div class="post-comment-form card card--lg">
                        <header class="post-comment-form__header card__header">
                            <h4>Write a Comment</h4>
                        </header>
                        <div class="post-comment-form__content card__content">
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="input-name">Name</label>
                                            <input type="text" id="input-name" name="input-name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="input-email">Email</label>
                                            <input type="email" id="input-email" name="input-email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="textarea-comment">Your Comment</label>
                                    <textarea name="textarea-comment" id="textarea-comment" rows="7" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block btn-lg">Post Your Comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Post Comment Form / End -->


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


                    <!-- Widget: Match Announcement -->
                    <aside class="widget widget--sidebar card widget-preview">
                        <div class="widget__title card__header">
                            <h4>Top Next Match</h4>
                        </div>
                        <div class="widget__content card__content">

                            <!-- Match Preview -->
                            <div class="match-preview">
                                <section class="match-preview__body">
                                    <header class="match-preview__header">
                                        <h3 class="match-preview__title">Championship Quarter Finals</h3>
                                        <time class="match-preview__date" datetime="2017-05-17">Saturday, May 17th, 2017</time>
                                    </header>
                                    <div class="match-preview__content">

                                        <!-- 1st Team -->
                                        <div class="match-preview__team match-preview__team--first">
                                            <figure class="match-preview__team-logo">
                                                <img src="assets/images/samples/logo-alchemists--sm.png" alt="">
                                            </figure>
                                            <h5 class="match-preview__team-name">Alchemists</h5>
                                            <div class="match-preview__team-info">Elric Bros School</div>
                                        </div>
                                        <!-- 1st Team / End -->

                                        <div class="match-preview__vs">
                                            <div class="match-preview__conj">VS</div>
                                            <div class="match-preview__match-info">
                                                <time class="match-preview__match-time" datetime="2017-05-17 09:00">9:00 PM</time>
                                                <div class="match-preview__match-place">Madison Cube Stadium</div>
                                            </div>
                                        </div>

                                        <!-- 2nd Team -->
                                        <div class="match-preview__team match-preview__team--second">
                                            <figure class="match-preview__team-logo">
                                                <img src="assets/images/samples/logo-l-clovers--sm.png" alt="">
                                            </figure>
                                            <h5 class="match-preview__team-name">Clovers</h5>
                                            <div class="match-preview__team-info">ST Paddy's Institute</div>
                                        </div>
                                        <!-- 2nd Team / End -->

                                    </div>
                                    <div class="match-preview__action">
                                        <a href="#" class="btn btn-default btn-block">Buy Tickets Now</a>
                                    </div>
                                </section>
                                <section class="match-preview__countdown countdown">
                                    <h4 class="countdown__title">Game Countdown</h4>
                                    <div class="countdown__content">
                                        <div class="countdown-counter" data-date="September 12, 2017 12:00:00"></div>
                                    </div>
                                </section>
                            </div>
                            <!-- Match Preview / End -->

                        </div>
                    </aside>
                    <!-- Widget: Match Announcement / End -->


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

                </div>
                <!-- Sidebar / End -->
            </div>

        </div>
    </div>

    <!-- Content / End -->

@endsection