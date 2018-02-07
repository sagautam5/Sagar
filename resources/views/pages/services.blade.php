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
          <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla dolore eu fugiat nulla fugiat nulla pariatur . . . . <a href="{{URL::to('java/programming')}}">read more >> </a></p>
        </div>
        <div class="col-md-4 service-item">
          <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="service-title"><a href="">Dorwhjber Bosfndj</a></h4>
          <p class="service-description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata  tarad limino ata . . . . <a href="{{URL::to('java/programming')}}">read more >></a></p>
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
