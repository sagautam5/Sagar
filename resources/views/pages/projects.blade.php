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
	          <h3 class="sub-title">Machine Learning In Identifying Dementia in MRI Scans</h3>
	          <p class="project-text">Dementia, also known as senility, is a broad category of brain diseases, including Alzheimer’s disease, that cause a long term and often gradual decrease in the ability to think and remember that is great enough to affect a person’s daily functioning. An early detection of dementia makes great difference in it's diagnosis . In this project, We made a system which detects dementia in 3D MRI scans of Human Brain using Artificial Intelligence and Machine Learning.</p>
	          <p class="project-text">This is our Final Year Project as a part of course in Computer Engineering. Image processing techniques and machine learning algorithms are used to identify the presence of dementia. Three dimentional MRI images are preprocessed and then segmented to extract the features which are then used in the implementation of K-Nearest Neighbour model and Artificial Neural Network Model.</p>
	        </div>
    	</div>
    	<div class="row">
	        <div class="col-md-12">
	        	<div class="more-details">	
		          <p class="project-text"><b>Technologies</b>: Java, ImageIO, Python, JPype, NumPy, Pybrain</p>
		          <p class="project-text"><b>Git Hub : </b><a href="https://github.com/sagautam5/MajorProject" target="_blank">View Source</a></p>
		          <p class="project-text"><b>Paper : </b><a href="{{URL::to('/paper/paper.pdf')}}" target="_blank">View Paper</a>
	     		</div>
	     	</div>
      </div>
    </div>
    <div class="container project-container wow fadeInUp">
      <div class="row">
        <div class="col-md-12 project-content">
          	<p class="project-text">
          	</p>
        </div>
      </div>
    </div>
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="sub-title"> Minor Project: CTweets Android Application</h3>
          <p class="project-text"> In this project, we made a system to classify the twitter data using Naive Bayes Classifier. This is our Minor Project as a part of the course. Natural Language Processing and Probabilistic Modeling is performed to identify the features in twitter data and then Naive Bayes Classifier is implemented to classify the twitter data. </p>
          <p class="project-text"> Twitter data is extracted using web services and then language processing methods are applied and finally classified. These classified results are accessible to associated user throgh android application.</p>
        </div>
      </div>
      <div class="row">
	        <div class="col-md-12">
	        	<div class="more-details">	
		          	<p class="project-text"><b> Technologies</b>: Java, PHP, MySQL, Android, HTML, CSS, Bootstrap</p>
		          	<p class="project-text"><b> Git Hub : </b><a href="https://github.com/sagautam5/MinorProject" target="_blank">View Source</a></p>
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
          <h3 class="sub-title"> Spelling Corrector</h3>
          <p class="project-text"> </p>
          <p class="project-text"> </p>
          <p class="project-text"> </p>
        </div>
      </div>
      <div class="row">
	        <div class="col-md-12">
	        	<div class="more-details">	
		          	<p class="project-text"><b> Technologies</b>: Java</p>
		          	<p class="project-text"><b> Git Hub : </b><a href="https://github.com/sagautam5/spellingcorrector" target="_blank">View Source</a></p>
	     		</div>
	     	</div>
      </div>
    </div>
    <div class="container project-container wow fadeInUp">
      <div class="row">
        <div class="col-md-12 project-content">
          	<p class="project-text">
          	</p>
        </div>
      </div>
    </div>
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="sub-title"> Guessing Number</h3>
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
