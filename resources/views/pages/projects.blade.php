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
          <p class="project-text"> This is a simple spelling corrector based on probability. It takes a string as input and then provides spelling corrected word as output using bag of words. If the test word is already correct, then it returns same word.</p>
          <p class="project-text"> A bag of words is created from a text file containing large number of paragraphs and then frequency of each word is calculated. When input string is provided then the word is checked if it's already correct. If so same word is returned otherwise, a list of closer words are created and most probable word from the list is assigned as correct word and then returned as result.</p>
          <p class="project-text"> Here is the algorithm,</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 corrector">
          <h4 class="algorithm">How it Works ?</h4>
          <ul type="1">
            <li class="item">Get a word from users input</li>
            <li class="item">Search word in the collection or Bag of words</li>
            <li class="item">If word is found, just return the same word otherwise
              <ul type="A">
                <li class="sub-item">Generate a list of close and probable words by
                  <ul type="i">
                    <li class="sub-sub-item">single letter deletion</li>
                    <li class="sub-sub-item">single letter insertion</li>
                    <li class="sub-sub-item">single letter replacement</li>
                    <li class="sub-sub-item">swap of two letters </li>
                  </ul>
                </li>
                <li class="sub-item">Get frequency of each probable word from the bag of words</li>
                <li class="sub-item">Return most frequent probable word as spell correct word</li>
              </ul>
            </li>
          </ul>
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
        <div class="col-md-12">
            <h3 class="sub-title"> Guessing Number</h3>
            <p class="project-text">This is a four digit number guessing game in which all we have to do is to guess secret code with in 8 attempts. The secret code consist of four unique digits from 1 to 9. User gives four digit number as the guess and then programme gives no of digits in right and wrong position with respect to the secret code. If user can't guess secret code correctly with in 8 attempts secret code will be displayed after last attempt.</p>
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
  </section>
@endsection
@section('footer')
	@include('layout.footer')
@endsection
@section('imports')
@parent
@endsection
