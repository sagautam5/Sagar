@extends('layout.master')
@section('title', 'Contact - Sagar Gautam - A Software eveloper')
@section('assets')
@parent

@endsection
@section('header')
	@include('layout.header')
@endsection

@section('content')
  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">If you have any queries regarding us and our work, feel free to send your message.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="col-md-8 col-md-push-2">
            <div class="form">
              <form action="{{URL::to('/send/message')}}" method="post" role="form" id="message">
                <div class="form-group">  
                  <h5>Name *</h5>
                  <input type="text" name="name" class="form-control" placeholder="Please provide your name" value="{{old('email')}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  
                      <span class="help-block">
                          <strong></strong>
                      </span>
                  
                </div>
                
                <div class="form-group">
                  <h5>Email *</h5>
                  <input type="email" class="form-control" name="email" placeholder="Please provide your email" value="{{old('email')}}" data-rule="email" data-msg="Please enter a valid email" />

                  <span class="help-block">
                      <strong></strong>
                  </span>
                  
                </div>
                
                <div class="form-group">
                  <h5>Subject *</h5>
                  <input type="text" class="form-control" name="subject" placeholder="Please add subject" value="{{old('message')}}" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  
                  <span class="help-block">
                      <strong></strong>
                  </span>
                  
                </div>
                
                <div class="form-group">
                  <h5>Your Message *</h5>
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Send something awesome to my inbox.">{{old('message')}}</textarea>
                  
                  <span class="help-block">
                      <strong></strong>
                  </span>
                  
                </div>
                <div class="text-center"><button type="submit"><span><i class="fa fa-paper-plane"></i></span></button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="contact-quote">"I always like to know who I'm speaking with."</p>
        </div>
      </div>
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

            <div class="col-md-3 ">
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
