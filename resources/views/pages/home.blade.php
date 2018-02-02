@extends('layout.master')
@section('title', 'Sagar Gautam')
@section('assets')
@parent

@endsection

@section('header')
	@include('layout.header')
@endsection

@section('content')
  <!--==========================
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">About</h3>
          <div class="section-title-divider"></div>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-12 about-content">
          <p class="about-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate
          </p>
          <p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
            id est laborum
          </p>
          <p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
            id est laborum
          </p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title"> Services</h3>
          <div class="section-title-divider"></div>
          <p class="service-quote">"We organize our software development process in accordance with your project requirement and time limits."</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-desktop"></i></div>
          <h4 class="service-title"><a href="{{URL::to('web/development')}}">Web development</a></h4>
          <p class="service-description">We design and build general websites such as static websites, corporate websites and different types of functional websites . . . . <a href="{{URL::to('web/development')}}">read more >> </a></p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
          <h4 class="service-title"><a href="">Java Programming</a></h4>
          <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title"><a href="">Dorwhjber Bosfndj</a></h4>
          <p class="service-description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>Sankhamul<br/>Lalitpur, Nepal</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>sagautam5@gmail.com</p><br/>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>+ 977 9840254602</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <form action="{{URL::to('/send/message')}}" method="post" role="form" id="message">
              
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" value="{{old('email')}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                
                    <span class="help-block">
                        <strong></strong>
                    </span>
                
              </div>
              
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email" value="{{old('email')}}" data-rule="email" data-msg="Please enter a valid email" />

                <span class="help-block">
                    <strong></strong>
                </span>
                
              </div>
              
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject" value="{{old('message')}}" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                
                <span class="help-block">
                    <strong></strong>
                </span>
                
              </div>
              
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message">{{old('message')}}</textarea>
                
                <span class="help-block">
                    <strong></strong>
                </span>
                
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
@section('footer')
	@include('layout.footer')
@endsection
@section('imports')
@parent
<script type="text/javascript">
     jQuery(document).ready(function($){
        
        $('#message').on('submit',function(e){
          e.preventDefault(e);
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });

          var formURL = $(this).attr("action");
          var postData = $(this).serializeArray();

          $.ajax({
              url: formURL,
              type: 'POST',
              data: postData,
              dataType: 'JSON',
              success: function (data) {
                  console.log(data);
              }
          });
       });
    });
</script>
@endsection
