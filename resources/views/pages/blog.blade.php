@extends('layout.master')
@section('title', 'About - Sagar Gautam - A Software Engineer')
@section('assets')
@parent

@endsection
@section('header')
	@include('layout.header')
@endsection

@section('content')
<section id="blog">
	<div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Blog</h3>
          <div class="section-title-divider"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p> kjabsdfkajsdbfaskjdbf ashfb ajsdfhasdfahsdfas sahfasjfds</p>
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
