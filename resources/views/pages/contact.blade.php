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
          <p class="contact-message">If you have any queries regarding us and our work, feel free to send your message.</p>
        </div>
      </div>
      @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
          <p class="alert alert-{{ $msg }}" style="text-align:center;">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
      @endforeach
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-8 col-md-push-2">
            <div class="form">
              <form action="{{URL::to('/send/message')}}" method="post" role="form" id="message" onsubmit="return confirm('Are you sure you want to send message ?');">
                {{ csrf_field() }}
                <div class="row">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="col-md-6">
                          <p class="form-label"><b>Note:</b> All fields are required.</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="form-label">First Name *</h4>
                        <input type="text" name="fname" class="form-control" value="{{old('fname')}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        
                            @if($errors->has('fname'))
                              <div class="error">
                                {{$errors->first('fname')}}
                              </div> 
                            @endif
                    </div>
                    <div class="col-md-6">
                        <h4 class="form-label">Last Name *</h4>
                        <input type="text" name="lname" class="form-control" value="{{old('lname')}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        
                            @if($errors->has('lname'))
                              <div class="error">
                                  {{$errors->first('lname')}}
                              </div> 
                            @endif
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <h4 class="form-label">Email *</h4>
                      <input class="form-control" name="email" value="{{old('email')}}" />

                      @if($errors->has('email'))
                        <div class="error">
                          {{$errors->first('email')}}
                        </div>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <h4 class="form-label">Subject *</h4>
                      <input type="text" class="form-control" name="subject" value="{{old('subject')}}" />
                      
                      @if($errors->has('subject'))
                        <div class="error">
                          {{$errors->first('subject')}}
                        </div>
                      @endif
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <h4 class="form-label">Your Message *</h4>
                      <textarea class="form-control" name="message" rows="5" >{{old('message')}}</textarea>
                      
                      @if($errors->has('message'))
                        <div class="error">
                          {{$errors->first('message')}}
                        </div>
                      @endif
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="form-group"> 
                    <div class="col-md-12 captcha">
                        {!! app('captcha')->display(); !!}
                        @if($errors->has('g-recaptcha-response'))
                            <div class="error">
                              {{$errors->first('g-recaptcha-response')}}
                            </div>
                        @endif
                    </div>
                  </div>
                </div>

                <div class="text-center"><button type="submit"><span><i class="fa fa-paper-plane"></i></span></button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-md-12">
          <p class="contact-quote">"Your messages are always great for us"</p>
        </div>
      </div> -->
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
     /*   
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
       });*/
    });
</script>
@endsection
