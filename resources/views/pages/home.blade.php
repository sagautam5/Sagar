@extends('layout.master')
@section('title', 'Sagar Gautam - A Software Engineer')
@section('assets')
@parent

@endsection

@section('top_header')
   @include('layout.top_header')
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
        <div class="col-md-10 col-md-push-1 about-content">
          <p class="about-text">
            Hi, I'm Sagar Gautam, a software developer from Lalitpur, Nepal, have completed Bachelor’s 
            degrees in Computer Engineering from Institute of Engineering (IOE) Pulchowk Campus in 2016.
            I’ve previously worked as a PHP Developer at Business Veins Pvt. Ltd. for nearly one year.

          <p class="about-text">I design and build static websites, functional websites and web applications. I also like to 
            work on . . . . . <a href="{{URL::to('/about')}}" target="_blank"> read more >> </a>
          </p>
          <p class="about-text"></p>
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
<!--           <p class="service-quote">"We organize our software development process in accordance with your project requirement and time limits."</p>
 -->        </div>
      </div>

      <div class="row">
        <a  href="{{URL::to('/services')}}">
          <div class="col-md-4 service-item">
              <div class="service-icon">
                <i class="fa fa-desktop"></i>
                <h4 class="service-title"><a>Web App Development</a></h4>
              </div>
          </div>
        </a>
        <a href="{{URL::to('/services')}}">
          <div class="col-md-4 service-item">
            <div class="service-icon">
              <i class="fa fa-cogs"></i>
              <h4 class="service-title"><a>Software Development</a></h4>
            </div>
          </div>
        </a>
        <a href="{{URL::to('/services')}}">
          <div class="col-md-4 service-item">
            <div class="service-icon">
              <i class="fa fa-mobile" aria-hidden="true"></i>
              <h4 class="service-title"><a>Mobile App Development</a></h4>
            </div>
            </div>
        </a>
      </div>
    </div>
  </section>

  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row info-box">
        <div class="col-md-9 col-md-push-2">
          <div class="info">
            <div class="col-md-3 contact-item">
              <i class="fa fa-map-marker"></i>
              <p>Sankhamul<br/>Lalitpur, Nepal</p>
            </div>

            <div class="col-md-3 contact-item">
              <i class="fa fa-envelope"></i>
              <p>sagautam5@gmail.com</p>
            </div>

            <div class="col-md-3 contact-item">
              <i class="fa fa-phone"></i>
              <p>+ 977 9840254602</p>
            </div>
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
@endsection
