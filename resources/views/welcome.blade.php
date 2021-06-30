@extends('frontend.layout.app')

@section('content')
    <section id="content">
        <div class="content-wrap">

            <div class="promo promo-light promo-full promo-uppercase p-5 bottommargin-lg header-stick">
                <div class="container clearfix">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg">
                            <h3 style="letter-spacing: 2px;">{{$general_settings->start_now_title}}</h3>
                            <span>{{$general_settings->start_now_details}}</span>
                        </div>
                        <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                            <a href="{{route('contect.Us')}}" class="button button-large button-circle button-black m-0">Start Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container clearfix">

                <div class="row justify-content-center col-mb-50">
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img class="rounded" src="{{asset('assets/demos/construction/images/services/1.jpg')}}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-content px-0">
                                <h3>Skilled Professionals.<span class="subtitle">Your Property in Good Hands.</span></h3>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est voluptatem accusamus molestiae eaque perspiciatis mollitia.</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img class="rounded" src="{{asset('assets/demos/construction/images/services/2.jpg')}}" alt="Effective Planning">
                            </div>
                            <div class="fbox-content px-0">
                                <h3>Effective Planning.<span class="subtitle">Construction Process Organized.</span></h3>
                                <!-- <p>Porro repellat vero sapiente amet vitae quibusdam necessitatibus consectetur, labore totam. Accusamus perspiciatis asperiores labore esse.</p> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box media-box">
                            <div class="fbox-media">
                                <img class="rounded" src="{{asset('assets/demos/construction/images/services/3.jpg')}}" alt="Why choose Us?">
                            </div>
                            <div class="fbox-content px-0">
                                <h3>Risk Management.<span class="subtitle">We have got you Covered.</span></h3>
                                <!-- <p>Quos, non, esse eligendi ab accusantium voluptatem. Maxime eligendi beatae, atque tempora ullam. Vitae delectus quia, consequuntur rerum quo.</p> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="section parallax dark" style="background-image: url({{asset('assets/demos/construction/images/slider/1.jpg')}}); padding: 120px 0;"  data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

                <div class="fslider testimonial testimonial-full" data-arrows="false" style="z-index: 2;">
                    <div class="flexslider">
                        <div class="slider-wrap">
                        @foreach($second_slider as $slider)
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="{{asset('assets/demos/construction/images/slider/'.$slider->thumbnail)}}" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>{{$slider->description}}</p>
                                    <div class="testi-meta">
                                        {{$slider->title}}
                                        <span>deltastar.ae</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="video-wrap" style="z-index: 1;">
                    <div class="video-overlay" style="background: rgba(241,128,82,0.9);"></div>
                </div>

            </div>
            @if($features->count() > 0)
            <div class="section ">
                <h2 class="center  ls1">Some Of Our Features:</h2>
            </div>
            <div class="container">
                <div class="row align-items-stretch col-mb-50">
                    @foreach($features as $feature)
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-box fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><img src="{{asset('assets/demos/construction/images/features/'.$feature->thumbnail)}}" alt="Concrete Developments"></a>
                            </div>
                            <div class="fbox-content">
                                <h3>{{$feature->title}}</h3>
                                <p>{{$feature->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
          @endif
{{--           <div class="section mb-0">--}}
{{--                <h2 class="center mb-0 ls1">Some of Our Esteemed Projects:</h2>--}}
{{--            </div>--}}
{{--            <div id="portfolio" class="portfolio row container grid-container no-gutters">--}}
{{--                <article class="portfolio-item col-12 col-sm-6 col-md-4 col-lg-3 pf-media pf-icons">--}}
{{--                    <div class="grid-inner">--}}
{{--                        <div class="portfolio-image">--}}
{{--                            <img src="{{asset('assets/demos/construction/images/projects/1.jpg')}}" alt="The Atmosphere">--}}
{{--                            <div class="bg-overlay">--}}
{{--                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">--}}
{{--                                    <a href="#" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-animate-out="zoomOut" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>--}}
{{--                                </div>--}}
{{--                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="portfolio-desc">--}}
{{--                            <h3><a href="#">The Atmosphere</a></h3>--}}
{{--                            <span>Chicago, USA</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </article>--}}
{{--            </div>--}}

            <div class="container topmargin-lg cleafix">

                <div class="row col-mb-50">
                    <div class="col-md-8">
                        <div class="tabs tabs-justify mb-0 clearfix" id="construction-tabs">

                            <ul class="tab-nav clearfix">
                                <li><a href="#construction-tab-1">Why Us?</a></li>
                                <li><a href="#construction-tab-2">Work Ethic</a></li>
                                <li><a href="#construction-tab-4">Locations</a></li>
                            </ul>

                            <div class="tab-container">

                                <div class="tab-content clearfix" id="construction-tab-1">
                                    <p>{{$general_settings->why_us}}</p>
                                    <div class="row col-mb-30">
                                        <div class="col-sm-6 col-lg-3 text-center">
                                            <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span data-from="1000" data-to="{{$general_settings->branches}}" data-refresh-interval="50" data-speed="2000"></span></div>
                                            <h5>Company Office</h5>
                                        </div>

                                        <div class="col-sm-6 col-lg-3 text-center">
                                            <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span data-from="1000" data-to="{{$general_settings->employee}}" data-refresh-interval="50" data-speed="2500"></span></div>
                                            <h5>Employees</h5>
                                        </div>

                                        <div class="col-sm-6 col-lg-3 text-center">
                                            <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span data-from="1000" data-to="{{$general_settings->clients}}" data-refresh-interval="50" data-speed="3500"></span></div>
                                            <h5>Happy Clients</h5>
                                        </div>

                                        <div class="col-sm-6 col-lg-3 text-center">
                                            <div class="counter ls1 font-weight-semibold" style="color: #D2D2D2;"><span data-from="1000" data-to="{{$general_settings->cities}}" data-refresh-interval="15" data-speed="2700"></span></div>
                                            <h5>Cities Served</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content clearfix" id="construction-tab-2">
                                    <p>{{$general_settings->work_ethics}}</p>
                                </div>
                                <div class="tab-content clearfix" id="construction-tab-4">

                                    <div class="row col-mb-30">
                                        <div class="col-md-7">
                                            <p>{{$general_settings->location}}</p>
                                            <div class="row col-mb-30">

                                                <div class="col-md-6">
                                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr>{{$general_settings->phone1}}<br>
                                                    <abbr title="Phone Number"><strong>phoene:</strong></abbr>{{$general_settings->phone2}}<br>
                                                    <abbr title="Email Address"><strong>Email:</strong></abbr>{{$general_settings->email1}}

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-5">
{{--                                            <img src="https://maps.googleapis.com/maps/api/staticmap?center=-37.814107,144.963280&zoom=12&markers=-37.814107,144.963280&size=300x180&key=AIzaSyAfh-Jh-Vn1Lf2TeP9g9cf5bzRbX1gnFZ4" alt="Google Map" class="img-thumbnail">--}}
                                            <address>
                                                <strong>DUABI Headquarters:</strong><br>
                                                {{$general_settings->address1}}
                                            </address>
                                            <hr>
                                            <address>
                                                <strong>AJMAN Office:</strong><br>
                                                {{$general_settings->address2}}
                                            </address>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="widget quick-contact-widget form-widget clearfix">
                            <h4>Quick Quotation Form</h4>
                            <div class="form-result"></div>

                            <form id="quick-contact-form" name="quick-contact-form" action="{{route('quick.mail')}}" method="post" class="quick-contact-form mb-0">
                                  @csrf
                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>
                                <input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick_contact_form_name" value="" placeholder="Full Name" />
                                <input type="email" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick_contact_form_email" value="" placeholder="Email Address" />
                                <input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-phone" name="quick_contact_form_phone" value="" placeholder="Phone" />
                                <textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick_contact_form_message" rows="4" cols="30" placeholder="Message"></textarea>
                                <input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                                <input type="hidden" name="prefix" value="quick-contact-form-">
                                <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d m-0" value="submit">Send Email</button>
                            </form>

                        </div>

                    </div>
                </div>

                <div class="line"></div>

                <div class="row col-mb-50">
                    <div class="col-md-5">
                        <h4>Clients Overview</h4>

                        <p>We prize our Clients more than everything else. We strive to provide Quality Services to all our Clients on a Priority Basis. You are invited to join our Clients List and enjoy our Services. <a href="#">See more...</a></p>

                        <ul class="clients-grid grid-2 grid-sm-3 mb-0">
                            <li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{asset('assets/demos/construction/images/clients/1.jpg')}}" alt="Clients"></a></li>
                            <li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{asset('assets/demos/construction/images/clients/2.jpg')}}" alt="Clients"></a></li>
                            <li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{asset('assets/demos/construction/images/clients/3.jpg')}}" alt="Clients"></a></li>
                            <li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{asset('assets/demos/construction/images/clients/4.jpg')}}" alt="Clients"></a></li>
                            <li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{asset('assets/demos/construction/images/clients/5.jpg')}}" alt="Clients"></a></li>
                            <li class="grid-item" style="padding: 20px;"><a href="#"><img src="{{asset('assets/demos/construction/images/clients/6.jpg')}}" alt="Clients"></a></li>
                        </ul>
                    </div>

                    <div class="col-md-7">
                        <h4>Recent News</h4>

                        <div id="oc-posts" class="owl-carousel posts-carousel carousel-widget posts-md" data-margin="20" data-nav="true" data-pagi="true" data-items-xs="1" data-items-xl="2">

                            <div class="oc-item">
                                <div class="entry">
                                    <div class="entry-image">
                                        <a href="{{asset('assets/demos/construction/images/blog/5.jpg')}}" data-lightbox="image"><img src="{{asset('assets/demos/construction/images/blog/5.jpg')}}" alt="Standard Post with Image"></a>
                                    </div>
                                    <div class="entry-title title-sm nott">
                                        <h3><a href="#">Upcoming Projects in Australia</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li>10th Feb 2021</li>
                                            <li><a href="#comments">13 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="entry">
                                    <div class="entry-image">
                                        <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide"><a href="{{asset('assets/demos/construction/images/blog/2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('assets/demos/construction/images/blog/2.jpg')}}" alt="Standard Post with Gallery"></a></div>
                                                    <div class="slide"><a href="{{asset('assets/demos/construction/images/blog/1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('assets/demos/construction/images/blog/1.jpg')}}" alt="Standard Post with Gallery"></a></div>
                                                    <div class="slide"><a href="{{asset('assets/demos/construction/images/blog/3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('assets/demos/construction/images/blog/3.jpg')}}" alt="Standard Post with Gallery"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-title title-sm nott">
                                        <h3><a href="#">Real Estate just got a little more Expensive</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li>24th Feb 2021</li>
                                            <li><a href="#comments">21 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem!</p>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="entry">
                                    <div class="entry-image">
                                        <a href="{{asset('assets/demos/construction/images/blog/4.jpg')}}" data-lightbox="image"><img src="{{asset('assets/demos/construction/images/blog/4.jpg')}}" alt="Standard Post with Image"></a>
                                    </div>
                                    <div class="entry-title title-sm nott">
                                        <h3><a href="#">Global Excellence Construction Award</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li>5th May 2021</li>
                                            <li><a href="#comments">6 Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <div class="line topmargin-sm"></div>

            <div class="section bg-transparent mt-0 p-0 footer-stick">
                <div class="container clearfix">

                    <div class="row">
                        <div class="col-lg-7">
                            <img src="{{asset('assets/demos/construction/images/services/bottom-trust.jpg')}}" alt="Bottom Trust">
                        </div>
                        <div class="col-lg-5 topmargin-sm">
                            <div class="heading-block border-bottom-0">
                                <h2>You're in Good Hands.</h2>
                                <span class="ls1">Five Points that define Our Reliability.</span>
                            </div>

                            <ul class="iconlist iconlist-large iconlist-color">
                                <li><i class="icon-ok"></i> Market Leader since 1915</li>
                                <li><i class="icon-ok"></i> Positive Results within Deadlines</li>
                                <li><i class="icon-ok"></i> 100% Reliability &amp; Guarantee</li>
                                <li><i class="icon-ok"></i> Dedicated Professional Team of 500+</li>
                                <li><i class="icon-ok"></i> Unmatched After Project Completion Support</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section><!-- #content end -->
@endsection
