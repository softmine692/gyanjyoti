@extends('front.layouts.master')

@section('content')

    <!-- Banner Area Start -->
    <div class="banner-area-wrapper">
        <div class="banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>event</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Event Details Start -->
    <div class="event-details-area blog-area pt-150 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="event-details">
                        <div class="event-details-img">
                            <img src="{{asset('front')}}/img/event/event-details.jpg" alt="event-details">
                            <div class="event-date">
                                <h3>20 <span>jun</span></h3>
                            </div>
                        </div>
                        <div class="event-details-content">
                            <h2>ADVANCE WED DEVELOPMENT WORKSHOP</h2>
                            <ul>
                                <li><span>time : </span>9:30am - 4:45pm</li>
                                <li><span>venue : </span>Kathmandu</li>
                            </ul>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui </p>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem </p>
                            <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                            <div class="speakers-area fix">
                                <h4>speakers</h4>
                                <div class="single-speaker">
                                    <div class="speaker-img">
                                        <img src="{{asset('front')}}/img/event/speaker1.jpg" alt="speaker">
                                    </div>
                                    <div class="speaker-name">
                                        <h5>Bikash kumar jha</h5>
                                        <p>Computer Science </p>
                                    </div>
                                </div>
                                <div class="single-speaker">
                                    <div class="speaker-img">
                                        <img src="{{asset('front')}}/img/event/speaker2.jpg" alt="speaker">
                                    </div>
                                    <div class="speaker-name">
                                        <h5>Raman khadka</h5>
                                        <p>Computer designing </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reply-area">
                            <h3>Book Your Seat</h3>
                            <p>I must explain to you how all this a mistaken idea of ncing great explorer of the rut<br> the is lder of human happinescias unde omnis iste natus error sit volptatem </p>
                            <form id="contact-form" action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Name</p>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Email</p>
                                        <input type="text" name="email" id="email">
                                    </div>
                                    <div class="col-md-12">
                                        <p>Subject</p>
                                        <input type="text" name="subject" id="subject">
                                        <p>Massage</p>
                                        <textarea name="message" id="message" cols="15" rows="10"></textarea>
                                    </div>
                                </div>
                                <a class="reply-btn" href="#" data-text="send"><span>send message</span></a>
                                <p class="form-messege"></p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-sidebar right text-left">
                        <div class="single-blog-widget mb-50">
                            <h3>search</h3>
                            <div class="blog-search">
                                <form id="search" action="#">
                                    <input type="search" placeholder="Search..." name="search" />
                                    <button type="submit">
                                        <span><i class="fa fa-search"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="single-blog-widget mb-50">
                            <h3>categories</h3>
                            <ul>
                                <li><a href="#">Engineering</a></li>
                                <li><a href="#">Political Science</a></li>
                                <li><a href="#">Micro Biology</a></li>
                                <li><a href="#">HTML5 &amp; CSS3</a></li>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">PHP</a></li>
                            </ul>
                        </div>
                        <div class="single-blog-widget mb-50">
                            <div class="single-blog-banner">
                                <a href="#" id="blog"><img src="{{asset('front')}}/img/blog/blog-img.jpg" alt="blog"></a>
                                <h2>best<br> eductaion<br> theme</h2>
                            </div>
                        </div>
                        <div class="single-blog-widget mb-50">
                            <h3>latest post</h3>
                            <div class="single-post mb-30">
                                <div class="single-post-img">
                                    <a href="#"><img src="{{asset('front')}}/img/post/post1.jpg" alt="post">
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="#">English Language Course for you</a></h4>
                                    <p>By Alex  /  June 20, 2017</p>
                                </div>
                            </div>
                            <div class="single-post mb-30">
                                <div class="single-post-img">
                                    <a href="#"><img src="{{asset('front')}}/img/post/post2.jpg" alt="post">
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="#">Advance Web Design and Develop</a></h4>
                                    <p>By Alex  /  June 20, 2017</p>
                                </div>
                            </div>
                            <div class="single-post">
                                <div class="single-post-img">
                                    <a href="#"><img src="{{asset('front')}}/img/post/post3.jpg" alt="post">
                                        <div class="blog-hover">
                                            <i class="fa fa-link"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-post-content">
                                    <h4><a href="#">English Language Course for you</a></h4>
                                    <p>By Alex  /  June 20, 2017</p>
                                </div>
                            </div>
                        </div>
                        {{--                        <div class="single-blog-widget">--}}
                        {{--                            <h3>tags</h3>--}}
                        {{--                            <div class="single-tag">--}}
                        {{--                                <a href="blog-details.html" class="mr-10 mb-10">course</a>--}}
                        {{--                                <a href="blog-details.html" class="mr-10 mb-10">education</a>--}}
                        {{--                                <a href="blog-details.html" class="mb-10">teachers</a>--}}
                        {{--                                <a href="blog-details.html" class="mr-10">learning</a>--}}
                        {{--                                <a href="blog-details.html" class="mr-10">university</a>--}}
                        {{--                                <a href="blog-details.html">events</a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event Details End -->

@endsection
