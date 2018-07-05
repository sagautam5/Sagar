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
          <div class="service-icon"><i class="fa fa-desktop"></i></div>
          <h4 class="service-title"><a>Website Design</a></h4>
          <p class="service-description">We design and build general websites such as static websites, corporate websites and different types of functional websites</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
          <h4 class="service-title"><a>Web App development</a></h4>
          <p class="service-description">We build web application based on required functionalities, design responsive and friendly user interface.</p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title"><a>Java Programming</a></h4>
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
