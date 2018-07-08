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
          <h3 class="section-title"> What We do</h3>
          <div class="section-title-divider"></div>
          <!-- <p class="service-quote">"We organize our software development process to meet your project requirements with in your time limit"</p> -->
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 service-item">
            <h4 class="service-item-title">Web App development</h4>
             <p class="service-description">We design and develop general websites like static websites and functional websites. We also build web application with variety of features and responsive design based on required functionalities. </p>
        </div>
        <div class="col-md-4 service-item">
          <h4 class="service-item-title">Software Development</h4>
          <p class="service-description">We provide quality oriented, affordable and reliable software development services with friendly user interface, for companies, businesses and individuals.</p>

        </div>
        <div class="col-md-4 service-item">
          
          <h4 class="service-item-title">Mobile App Development</h4>
          <p class="service-description">We design and develop variety of mobile applications. We use advanced tools and technology to provide highly customized mobile applications for consumer needs and enterprises.</p>
           
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
