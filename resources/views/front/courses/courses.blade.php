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
                                <h2>courses</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Course Start -->
    <div class="course-area pt-150 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="course-title">
                        <h3>search courses</h3>
                    </div>
                    <div class="course-form">
                        <form id="search" action="#">
                            <input type="search" placeholder="Search..." name="search" />
                            <button type="submit">search</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">

                @forelse($courses as $course)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-course mb-70">
                        <div class="course-img">
                            <a href="{{ route('courses.details', encrypt($course->id) )  }}"><img src="{{ getImageUrl($course->image) }}" alt="course">
                                <div class="course-hover">
                                    <i class="fa fa-link"></i>
                                </div>
                            </a>
                        </div>
                        <div class="course-content">
                            <h3><a href="{{ route('courses.details', encrypt($course->id) )  }}">{{ $course->name }}</a></h3>
                            <p>{!! strip_tags(Str::limit($course->description,100)) !!}</p>
                            <a class="default-btn" href="{{ route('courses.details', encrypt($course->id) )  }}">read more</a>
                        </div>
                    </div>
                </div>

                @empty
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog__item">

                            <p>No recent courses are available.</p>

                        </div>
                    </div>

                @endforelse

            </div>
        </div>
    </div>
    <!-- Course End -->
    <!-- Subscribe Start -->
{{--    <div class="subscribe-area pt-60 pb-70">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-8 col-md-offset-2">--}}
{{--                    <div class="subscribe-content section-title text-center">--}}
{{--                        <h2>subscribe our newsletter</h2>--}}
{{--                        <p>I must explain to you how all this mistaken idea </p>--}}
{{--                    </div>--}}
{{--                    <div class="newsletter-form mc_embed_signup">--}}
{{--                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>--}}
{{--                            <div id="mc_embed_signup_scroll" class="mc-form">--}}
{{--                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your e-mail address" required>--}}
{{--                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->--}}
{{--                                <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>--}}
{{--                                <button id="mc-embedded-subscribe" class="default-btn" type="submit" name="subscribe"><span>subscribe</span></button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                        <!-- mailchimp-alerts Start -->--}}
{{--                        <div class="mailchimp-alerts">--}}
{{--                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->--}}
{{--                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->--}}
{{--                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->--}}
{{--                        </div>--}}
{{--                        <!-- mailchimp-alerts end -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Subscribe End -->
@endsection
