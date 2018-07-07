@extends('layout.master')
@section('title', 'Services - Sagar Gautam - A Software Developer ')
@section('assets')
@parent

@endsection
@section('header')
	@include('layout.header')
@endsection

@section('content')
  <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title"> Services</h3>
          <div class="section-title-divider"></div>
          <!-- <p class="service-quote">"We organize our software development process to meet your project requirements with in your time limit"</p> -->
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 service-item">
          <h4 class="service-title"><a>Web App Development</a></h4>
          <p class="service-description">We design and build general websites like static websites, corporate websites. We build web application with variety of features based on required functionalities with responsive and friendly user interface. We provide affordable website design services, for companies, businesses and individuals. We are able to provide your company or business, large or small with a range of options to ensure we can create the website you require.
</p>
        </div>
        <div class="col-md-4 service-item">
          <h4 class="service-title"><a>Software Development</a></h4>
          <p class="service-description">We build web application based on required functionalities, design responsive and friendly user interface.</p>
        </div>
        <div class="col-md-4 service-item">
          <h4 class="service-title"><a>Mobile App Development</a></h4>
          <p class="service-description">We develop applications and implement functionalites using advance Java programming </a></p>
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
