@extends('layout.master')
@section('title', 'About - Sagar Gautam - A Software Engineer')
@section('assets')
@parent

@endsection
@section('header')
	@include('layout.header')
@endsection

@section('content')

  <section id="about">

    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="sub-title">Who I am ?</h3>
        </div>
      </div>
    </div>

    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-12 about-content">
          	<p class="about-text">
              Hi, I'm Sagar Gautam, a software developer from Lalitpur, Nepal, have completed Bachelor’s 
              degrees in Computer Engineering from Institute of Engineering (IOE) Pulchowk Campus in 2016.
              I design and build static websites, functional websites and web applications. I also like to 
           		work on Java Console Programming and making simple UI in Java.
          	</p>
        </div>
      </div>
    </div>

    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="sub-title">Work Experience</h3>
        </div>
      </div>
    </div>

    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-12 about-content">
            <p class="about-text">
              
            </p>
        </div>
      </div>
    </div>

    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="sub-title">Contribution at Stack Overflow</h3>
        </div>
      </div>
    </div>

    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-12 about-content">
          <p class="about-text">
            I am one of the active user on <a href="http://stackoverflow.com" target="_blank">stackoverflow.com</a>
            since Semptember 2016.
          </p> 
          <p class="about-text">
            I have asked a lot of questions and contributed solution to many questions on the site. I have provided 
            answers to the questions related to Laravel, PHP, MySQL, HTML, Java, Arrays many more tags. I've collected most
            reputation on Laravel and then in PHP tag untill today. I visit the site when I have some free time to help the 
            people in problem.
          </p>
          <p class="about-text">You can visit my stack overflow profile <a href="https://stackoverflow.com/users/6708661/sagar-gautam" target="blank">here</a></p>
        </div>
      </div>
    </div>
  
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="sub-title">Participation at Project Eular</h3>
        </div>
      </div>
    </div>

    <div class="container about-container wow fadeInUp">
      <div class="row">
        <div class="col-md-12 about-content">
            <p class="about-text">
            
            </p>
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
