@extends('frontend.layout.app')

@section('content')

<section id="content">
  <div class="content-wrap">
    <div class="container clearfix">

      <div class="row gutter-40 col-mb-80">
        <!-- Postcontent
        ============================================= -->
        <div class="postcontent col-lg-9">

          <h3>Send us an Email</h3>

          <div class="form-widget">

            <div class="form-result"></div>

            <form class="mb-0" id="template-contactform" name="template-contactform" action="{{route('conuact.us.mail')}}" method="post">
            @csrf
              <div class="form-process">
                <div class="css3-spinner">
                  <div class="css3-spinner-scaler"></div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4 form-group">
                  <label for="template-contactform-name">Name <small>*</small></label>
                  <input type="text" id="template-contactform-name" name="name" value="" class="sm-form-control required" />
                </div>

                <div class="col-md-4 form-group">
                  <label for="template-contactform-email">Email <small>*</small></label>
                  <input type="email" id="template-contactform-email" name="email" value="" class="required email sm-form-control" />
                </div>

                <div class="col-md-4 form-group">
                  <label for="template-contactform-phone">Phone</label>
                  <input type="text" id="template-contactform-phone" name="phone" value="" class="sm-form-control" />
                </div>

                <div class="w-100"></div>

                <div class="col-md-8 form-group">
                  <label for="template-contactform-subject">Subject <small>*</small></label>
                  <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                </div>

                <div class="col-md-4 form-group">
                  <label for="template-contactform-service">Services</label>
                  <select id="template-contactform-service" name="service" class="sm-form-control">
                    <option value="">-- Select One --</option>
                    <option value="plumbilg">plumbilg</option>
                    <option value="construction">construction</option>
                    <option value="maintainance">maintainance</option>
                  </select>
                </div>

                <div class="w-100"></div>

                <div class="col-12 form-group">
                  <label for="template-contactform-message">Message <small>*</small></label>
                  <textarea class="required sm-form-control" id="template-contactform-message" name="message" rows="6" cols="30"></textarea>
                </div>

                <div class="col-12 form-group d-none">
                  <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                </div>

                <div class="col-12 form-group">
                  <button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                </div>
              </div>

              <input type="hidden" name="prefix" value="template-contactform-">

            </form>
          </div>

        </div><!-- .postcontent end -->

        <!-- Sidebar
        ============================================= -->
        <div class="sidebar col-lg-3">

          <div class="widget clearfix">

            <h3 class="mb-0 text-uppercase">DUABI</h3><br>

            <address>
              <strong>Headquarters:</strong><br>
               {{$general_settings->address1}}<br>
{{--              {{$general_settings->address2}}<br>--}}
            </address>
            <abbr title="Phone Number"><strong>Phone:</strong></abbr>{{$general_settings->phone1}}<br>
            <abbr title="Phone Number"><strong>phoene:</strong></abbr>{{$general_settings->phone2}}<br>
            <abbr title="Email Address"><strong>Email:</strong></abbr>{{$general_settings->email1}}
            <abbr title="Email Address"><strong>Email:</strong></abbr>{{$general_settings->email2}}

            <div class="line line-sm"></div>

            <h3 class="mb-0 text-uppercase">AjMAN</h3><br>

            <address>
              <strong>Branch:</strong><br>
                {{$general_settings->address2}}<br>

{{--              Behind Grand mall Rashidiyah-3 shaheen building 201 ajman--}}
              <!-- San Francisco, CA 94107<br> -->
            </address>
            <abbr title="Phone Number"><strong>Phone:</strong></abbr>{{$general_settings->phone1}} <br>
            <abbr title="Phone Number"><strong>phoene:</strong></abbr> {{$general_settings->phone2}}<br>
            <abbr title="Email Address"><strong>Email:</strong></abbr> {{$general_settings->email1}}
          </div>

          <div class="line line-sm"></div>

          <div class="widget mt-0 clearfix">

            <a href="#" class="social-icon si-small si-dark si-facebook">
              <i class="icon-facebook"></i>
              <i class="icon-facebook"></i>
            </a>

            <a href="#" class="social-icon si-small si-dark si-twitter">
              <i class="icon-twitter"></i>
              <i class="icon-twitter"></i>
            </a>

            <a href="#" class="social-icon si-small si-dark si-dribbble">
              <i class="icon-dribbble"></i>
              <i class="icon-dribbble"></i>
            </a>

            <a href="#" class="social-icon si-small si-dark si-forrst">
              <i class="icon-forrst"></i>
              <i class="icon-forrst"></i>
            </a>

            <a href="#" class="social-icon si-small si-dark si-pinterest">
              <i class="icon-pinterest"></i>
              <i class="icon-pinterest"></i>
            </a>

            <a href="#" class="social-icon si-small si-dark si-gplus">
              <i class="icon-gplus"></i>
              <i class="icon-gplus"></i>
            </a>

          </div>

        </div><!-- .sidebar end -->
      </div>

    </div>

    <a href="{{route('contect.Us')}}" class="button button-3d border-bottom-0 button-full center text-right font-weight-light font-primary topmargin footer-stick" style="font-size: 26px;">
      <div class="container clearfix">
        Would you like to Build your Dream Home with Us? <strong>Click Here</strong> <i class="icon-angle-right" style="top:3px;"></i>
      </div>
    </a>

  </div>
</section><!-- #content end -->

@endsection
