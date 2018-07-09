@extends('layout.master')
@section('title', 'Projects - Sagar Gautam - A Software Developer ')
@section('assets')
@parent

@endsection
@section('header')
	@include('layout.header')
@endsection

@section('content')
  <section id="project">
  	<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="project-section-title">Academic Projects</h3>
          <div class="project-title-divider"></div>
        </div>
      </div>
    </div>
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-5">
            <div class="project-item major-project">
              <img src="{{asset('/images/project/dementia.jpg')}}">
              <div class="front-content">
                <h4 class="project-title">Major Project</h4>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-md-push-2">
            <div class="project-item minor-project">
              <img src="{{asset('/images/project/dementia.jpg')}}">
              <div class="front-content">
                <h4 class="project-title">Minor Project</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="project-section-title"> Personal Projects</h3>
          <div class="project-title-divider"></div>
        </div>
      </div>
    </div>
     <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-5">
            <div class="project-item major-project">
              <img src="{{asset('/images/project/dementia.jpg')}}">
              <div class="front-content">
                <h4 class="project-title">Spelling Corrector</h4>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-md-push-2">
            <div class="project-item minor-project">
              <img src="{{asset('/images/project/dementia.jpg')}}">
              <div class="front-content">
                <h4 class="project-title">Guessing Number</h4>
              </div>
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
