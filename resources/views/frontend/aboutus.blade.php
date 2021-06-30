@extends('frontend.layout.app')

@section('content')
<section id="page-title" class="bg-transparent">

    <div class="container clearfix">
      <h1>About Us</h1>
      <span>A Short Page Title Tagline</span>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">About Us</li>
      </ol>
    </div>

  </section><!-- #page-title end -->

  <!-- Content
  ============================================= -->
  <section id="content">
    <div class="content-wrap">
      <div class="container clearfix">

        <div class="row clearfix">
          <div class="col-lg-6">
            <div class="heading-block border-bottom-0 bottommargin-sm">
              <h3>What We Do</h3>
              <span>Dramatically orchestrate multimedia based opportunities and client-based e-business. Competently create human capital.</span>
            </div>
            <p>Holisticly incubate enterprise users whereas just in time sources. Rapidiously transition performance based e-business for bricks-and-clicks methodologies. Intrinsicly network quality interfaces rather than customer directed e-services. Rapidiously implement out-of-the-box content with alternative data. Collaboratively simplify seamless initiatives through sustainable infomediaries. Holisticly aggregate bleeding-edge expertise.</p>
            <a href="#" class="button button-3d ml-0 bottommargin-sm">Learn More</a>
          </div>

          <div class="col-lg-6">
            <div class="fslider flex-thumb-grid grid-6" data-pagi="false" data-arrows="false" data-thumbs="true">
              <div class="flexslider">
                <div class="slider-wrap">
                  <div class="slide" data-thumb="{{asset('assets/demos/construction/images/gallery/thumbs/1.jpg')}}">
                    <img src="{{asset('assets/demos/construction/images/gallery/1.jpg')}}" alt="Image">
                    <div class="bg-overlay">
                      <div class="bg-overlay-content justify-content-start align-items-end">
                        <div class="h4 font-weight-light bg-light text-dark px-3 py-2">Government Contraction</div>
                      </div>
                    </div>
                  </div>
                  <div class="slide" data-thumb="{{asset('assets/demos/construction/images/gallery/thumbs/2.jpg')}}">
                    <img src="{{asset('assets/demos/construction/images/gallery/2.jpg')}}" alt="Image">
                    <div class="bg-overlay">
                      <div class="bg-overlay-content justify-content-start align-items-end">
                        <div class="h4 font-weight-light bg-light text-dark px-3 py-2">Home Renovation</div>
                      </div>
                    </div>
                  </div>
                  <div class="slide" data-thumb="{{asset('assets/demos/construction/images/gallery/thumbs/3.jpg')}}">
                    <img src="{{asset('assets/demos/construction/images/gallery/3.jpg')}}" alt="Image">
                    <div class="bg-overlay">
                      <div class="bg-overlay-content justify-content-start align-items-end">
                        <div class="h4 font-weight-light bg-light text-dark px-3 py-2">Residential Construction</div>
                      </div>
                    </div>
                  </div>
                  <div class="slide" data-thumb="{{asset('assets/demos/construction/images/gallery/thumbs/4.jpg')}}">
                    <img src="{{asset('assets/demos/construction/images/gallery/4.jpg')}}" alt="Image">
                    <div class="bg-overlay">
                      <div class="bg-overlay-content justify-content-start align-items-end">
                        <div class="h4 font-weight-light bg-light text-dark px-3 py-2">Wooden Floor</div>
                      </div>
                    </div>
                  </div>
                  <div class="slide" data-thumb="{{asset('assets/demos/construction/images/gallery/thumbs/5.jpg')}}">
                    <img src="{{asset('assets/demos/construction/images/gallery/5.jpg')}}" alt="Image">
                    <div class="bg-overlay">
                      <div class="bg-overlay-content justify-content-start align-items-end">
                        <div class="h4 font-weight-light bg-light text-dark px-3 py-2">Repairing of Houses</div>
                      </div>
                    </div>
                  </div>
                  <div class="slide" data-thumb="{{asset('assets/demos/construction/images/gallery/thumbs/6.jpg')}}">
                    <img src="{{asset('assets/demos/construction/images/gallery/6.jpg')}}" alt="Image">
                    <div class="bg-overlay">
                      <div class="bg-overlay-content justify-content-start align-items-end">
                        <div class="h4 font-weight-light bg-light text-dark px-3 py-2">Building Renovaion</div>
                      </div>
                    </div>
                  </div>
                  <div class="slide" data-thumb="{{asset('assets/demos/construction/images/gallery/thumbs/7.jpg')}}">
                    <img src="{{asset('assets/demos/construction/images/gallery/7.jpg')}}" alt="Image">
                    <div class="bg-overlay">
                      <div class="bg-overlay-content justify-content-start align-items-end">
                        <div class="h4 font-weight-light bg-light text-dark px-3 py-2">Hightech Construction</div>
                      </div>
                    </div>
                  </div>
                  <div class="slide" data-thumb="{{asset('assets/demos/construction/images/gallery/thumbs/8.jpg')}}">
                    <img src="{{asset('assets/demos/construction/images/gallery/8.jpg')}}" alt="Image">
                    <div class="bg-overlay">
                      <div class="bg-overlay-content justify-content-start align-items-end">
                        <div class="h4 font-weight-light bg-light text-dark px-3 py-2">Hardwood Flooring</div>
                      </div>
                    </div>
                  </div>
                  <div class="slide" data-thumb="{{asset('assets/demos/construction/images/gallery/thumbs/9.jpg')}}">
                    <img src="{{asset('assets/demos/construction/images/gallery/9.jpg')}}" alt="Image">
                    <div class="bg-overlay">
                      <div class="bg-overlay-content justify-content-start align-items-end">
                        <div class="h4 font-weight-light bg-light text-dark px-3 py-2">Commercial Construction</div>
                      </div>
                    </div>
                  </div>
                  <div class="slide" data-thumb="{{asset('assets/demos/construction/images/gallery/thumbs/10.jpg')}}">
                    <img src="{{asset('assets/demos/construction/images/gallery/10.jpg')}}" alt="Image">
                    <div class="bg-overlay">
                      <div class="bg-overlay-content justify-content-start align-items-end">
                        <div class="h4 font-weight-light bg-light text-dark px-3 py-2">Repairing Of Roof</div>
                      </div>
                    </div>
                  </div>
                  <div class="slide" data-thumb="{{asset('assets/demos/construction/images/gallery/thumbs/11.jpg')}}">
                    <img src="{{asset('assets/demos/construction/images/gallery/11.jpg')}}" alt="Image">
                    <div class="bg-overlay">
                      <div class="bg-overlay-content justify-content-start align-items-end">
                        <div class="h4 font-weight-light bg-light text-dark px-3 py-2">Home Renovation</div>
                      </div>
                    </div>
                  </div>
                  <div class="slide" data-thumb="{{asset('assets/demos/construction/images/gallery/thumbs/12.jpg')}}">
                    <img src="{{asset('assets/demos/construction/images/gallery/12.jpg')}}" alt="Image">
                    <div class="bg-overlay">
                      <div class="bg-overlay-content justify-content-start align-items-end">
                        <div class="h4 font-weight-light bg-light text-dark px-3 py-2">Office Renovation</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="clear"></div>

      <div class="section row p-0 align-items-stretch dark topmargin clearfix">
        <div class="col-lg-4 d-none d-md-block" style="background: url({{asset('assets/demos/construction/images/services/parallax.jpg')}}) center center repeat; background-size: cover;">
          <div>&nbsp;</div>
        </div>
        <div class="col-lg-8">
          <div class="col-padding">

            <div class="row align-items-stretch clearfix">
              <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain">
                  <div class="fbox-icon">
                    <a href="#"><img src="{{asset('assets/demos/construction/images/icons/building.png')}}" alt="Concrete Developments"></a>
                  </div>
                  <div class="fbox-content">
                    <h3>Concrete Developments</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain">
                  <div class="fbox-icon">
                    <a href="#"><img src="{{asset('assets/demos/construction/images/icons/bank.png')}}" alt="Finance Assistance"></a>
                  </div>
                  <div class="fbox-content">
                    <h3>Finance Assistance</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain">
                  <div class="fbox-icon">
                    <a href="#"><img src="{{asset('assets/demos/construction/images/icons/traffic-cone.png')}}" alt="Smart Builders"></a>
                  </div>
                  <div class="fbox-content">
                    <h3>Smart Builders</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain">
                  <div class="fbox-icon">
                    <a href="#"><img src="{{asset('assets/demos/construction/images/icons/paint-brush.png')}}" alt="Quality Infrastructure"></a>
                  </div>
                  <div class="fbox-content">
                    <h3>Quality Infrastructure</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="feature-box fbox-plain">
                  <div class="fbox-icon">
                    <a href="#"><img src="{{asset('assets/demos/construction/images/icons/drawer.png')}}" alt="Interiorly Designed"></a>
                  </div>
                  <div class="fbox-content">
                    <h3>Interiorly Designed</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="feature-box fbox-plain">
                  <div class="fbox-icon">
                    <a href="#"><img src="{{asset('assets/demos/construction/images/icons/paper-money.png')}}" alt="Cost Effective Solutions"></a>
                  </div>
                  <div class="fbox-content">
                    <h3>Cost Effective Solutions</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem minima, facere distinctio placeat.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section><!-- #content end -->
@endsection
