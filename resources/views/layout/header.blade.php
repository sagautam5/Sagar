
  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="{{URL::to('/home')}}"><img src="{{asset('images/logo.png')}}" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li @if(url()->current()==URL::to('/home')) class="menu-active" @endif><a href="{{URL::to('/home')}}">Home</a></li>
          <li @if(url()->current()==URL::to('/about')) class="menu-active" @endif><a href="{{URL::to('/about')}}">About</a></li>
          <li @if(url()->current()==URL::to('/resume')) class="menu-active" @endif><a href="{{URL::to('/resume')}}">Resume</a></li>
          <li @if(url()->current()==URL::to('/projects')) class="menu-active" @endif><a href="{{URL::to('/projects')}}">Projects</a></li>
          <li @if(url()->current()==URL::to('/services')) class="menu-active" @endif><a href="{{URL::to('/services')}}">Services</a></li>
          <li @if(url()->current()==URL::to('/contact')) class="menu-active" @endif><a href="{{URL::to('/contact')}}">Contact</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->