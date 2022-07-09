<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="{{asset('assets/img/question.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/img/question.png')}}" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
* {
  box-sizing: border-box;
}
.textarea {
    margin-top: 20px;
}
.dropzone {
    margin-top: 20px;
    margin-bottom: 20px;
}
.question {
    margin-bottom: 10px;
}
.question h4 {
    margin: 0;
    margin-bottom: 5px;
}
.question a, .files a {
    color: #ff8ea2;
    margin: 0;
    text-decoration: none;
}
h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}
.invalid-feedback {
    font-size: 1rem;
    font-weight: 600;
    display: block;
}
/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
.logout-btn {
    text-decoration: none;
    background: #ff0000;
    padding: 5px 10px;
    color: #fff;
}
.profilebtn {
    text-decoration: none;
    background: rgb(33, 152, 33);
    padding: 5px 10px;
    color: #fff;
}
.homebtn{
	float:right;
  padding-top:5px;
}
</style>
<body>
  <div class="container">
  <div class="homebtn">
	<a class="profilebtn" href="{{ url('/') }}">Home</a>
  <a class="logout-btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout <i class="fa fa-sign-out"></i></a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
</div>
<form class="was-validated" id="quesform" action="{{route('answare.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
<h1>Question:</h1>
  <!-- One "tab" for each step in the form: -->
  @if($topic1 == 1)
  <div class="tab">
    <div class="row">
      <div class="col-md-8">
					<div class="question">
						<h4>Tast 1 Sample direction to write something:</h4>
						<a href="https://google.com" target="_blank">Step_5template.pptx</a>
					</div>
					<div class="question">
						<h4>Related training material:</h4>
						<a href="https://example.com" target="_blank">Presentation</a>
					</div>
					<div class="question">
						<h4>Related video links:</h4>
						<ul>
							<li><a href="https://google.com" target="_blank">https://www.example.org/wp-content/2020/11/social_enterprise.pdf</a></li>
							<li><a href="https://google.com" target="_blank">https://www.example.com/summary-of</a></li>
						</ul>
					</div>
				</div>
        <div class="col-md-4">
          <img class="img-fluid" src="{{asset('assets/img/grid.jpg')}}">
        </div>
    </div>
    <div class="row pt-5">
      <div class="textarea has-validation">
							<h4>My business plan:</h4>
              <textarea rows="5" id="answare1" name="answare1" class="form-control answarearea" >@if(isset($answer1)) {!! $answer1->answare1 !!} @endif</textarea>
              <div class="invalid-feedback">
              Please enter information or Upload file
              </div>
						</div>
						<div class="dropzone">
							<input type="file" name="file1" id="file1" class="dropify" />
						</div>
            @if(isset($answer1->file1))
            @if($answer1->file1 != '')
            <img src="{{asset('uploads/file/'.$answer1->file1 )}}" height="200px" width="200px">
            @endif
            @endif
  </div>
  </div>
  @endif
  @if($topic2 == 1)
  <div class="tab">
  <div class="row">
      <div class="col-md-8">
      <div class="question">
						<h4>Tast 2 Sample direction to write something:</h4>
						<a href="https://google.com" target="_blank">Step_5template.pptx</a>
					</div>
					<div class="question">
						<h4>Related training material:</h4>
						<a href="https://example.com" target="_blank">Presentation</a>
					</div>
					<div class="question">
						<h4>Related video links:</h4>
						<ul>
							<li><a href="https://google.com" target="_blank">https://www.example.org/wp-content/2020/11/social_enterprise.pdf</a></li>
							<li><a href="https://google.com" target="_blank">https://www.example.com/summary-of</a></li>
						</ul>
					</div>
				</div>
        <div class="col-md-4">
          <img class="img-fluid" src="{{asset('assets/img/grid.jpg')}}">
        </div>
    </div>
    <div class="row pt-5">
      <div class="textarea has-validation">
							<h4>My business plan:</h4>
							<textarea rows="5" id="answare2" name="answare2" class="form-control answarearea" >@if(isset($answer2)) {!! $answer2->answare2 !!} @endif</textarea>
              <div class="invalid-feedback">
              Please enter information or Upload file
              </div>
						</div>
						<div class="dropzone">
							<input type="file" name="file2" id="file2" class="dropify" />
						</div>
            @if(isset($answer2->file2))
            @if($answer2->file2 != '')
            <img src="{{asset('uploads/file/'.$answer2->file2 )}}" height="200px" width="200px">
            @endif
            @endif
  </div>
  </div>
  @endif
  @if($topic3 == 1)
  <div class="tab">
  <div class="row">
      <div class="col-md-8">
      <div class="question">
						<h4>Tast 3 Sample direction to write something:</h4>
						<a href="https://google.com" target="_blank">Step_5template.pptx</a>
					</div>
					<div class="question">
						<h4>Related training material:</h4>
						<a href="https://example.com" target="_blank">Presentation</a>
					</div>
					<div class="question">
						<h4>Related video links:</h4>
						<ul>
							<li><a href="https://google.com" target="_blank">https://www.example.org/wp-content/2020/11/social_enterprise.pdf</a></li>
							<li><a href="https://google.com" target="_blank">https://www.example.com/summary-of</a></li>
						</ul>
					</div>
				</div>
        <div class="col-md-4">
          <img class="img-fluid" src="{{asset('assets/img/grid.jpg')}}">
        </div>
    </div>
    <div class="row pt-5">
      <div class="textarea has-validation">
							<h4>My business plan:</h4>
              <textarea rows="5" id="answare3" name="answare3" class="form-control answarearea" >@if(isset($answer3)) {!! $answer3->answare3 !!} @endif</textarea>
              <div class="invalid-feedback">
              Please enter information or Upload file
              </div>
						</div>
						<div class="dropzone">
							<input type="file" name="file3" id="file3" class="dropify" />
						</div>
            @if(isset($answer3->file3))
            @if($answer3->file3 != '')
            <img src="{{asset('uploads/file/'.$answer3->file3 )}}" height="200px" width="200px">
            @endif
            @endif
  </div>
  </div>
  @endif
  @if($topic4 == 1)
  <div class="tab">
  <div class="row">
      <div class="col-md-8">
      <div class="question">
						<h4>Tast 4 Sample direction to write something:</h4>
						<a href="https://google.com" target="_blank">Step_5template.pptx</a>
					</div>
					<div class="question">
						<h4>Related training material:</h4>
						<a href="https://example.com" target="_blank">Presentation</a>
					</div>
					<div class="question">
						<h4>Related video links:</h4>
						<ul>
							<li><a href="https://google.com" target="_blank">https://www.example.org/wp-content/2020/11/social_enterprise.pdf</a></li>
							<li><a href="https://google.com" target="_blank">https://www.example.com/summary-of</a></li>
						</ul>
					</div>
				</div>
        <div class="col-md-4">
          <img class="img-fluid" src="{{asset('assets/img/grid.jpg')}}">
        </div>
    </div>
    <div class="row pt-5">
      <div class="textarea has-validation">
							<h4>My business plan:</h4>
							<textarea rows="5" id="answare4" name="answare4" class="form-control answarearea" >@if(isset($answer4)) {!! $answer4->answare4 !!} @endif</textarea>
              <div class="invalid-feedback">
              Please enter information or Upload file
              </div>
						</div>
						<div class="dropzone">
							<input type="file" name="file4" id="file4" class="dropify" />
						</div>
            @if(isset($answer4->file4))
            @if($answer4->file4 != '')
            <img src="{{asset('uploads/file/'.$answer4->file4 )}}" height="200px" width="200px">
            @endif
            @endif
  </div>
  </div>
  @endif
  @if($topic5 == 1)
  <div class="tab">
  <div class="row">
      <div class="col-md-8">
      <div class="question">
						<h4>Tast 5 Sample direction to write something:</h4>
						<a href="https://google.com" target="_blank">Step_5template.pptx</a>
					</div>
					<div class="question">
						<h4>Related training material:</h4>
						<a href="https://example.com" target="_blank">Presentation</a>
					</div>
					<div class="question">
						<h4>Related video links:</h4>
						<ul>
							<li><a href="https://google.com" target="_blank">https://www.example.org/wp-content/2020/11/social_enterprise.pdf</a></li>
							<li><a href="https://google.com" target="_blank">https://www.example.com/summary-of</a></li>
						</ul>
					</div>
				</div>
        <div class="col-md-4">
          <img class="img-fluid" src="{{asset('assets/img/grid.jpg')}}">
        </div>
    </div>
    <div class="row pt-5">
      <div class="textarea has-validation">
							<h4>My business plan:</h4>
							<textarea rows="5" id="answare5" name="answare5" class="form-control answarearea" >@if(isset($answer5)) {!! $answer5->answare5 !!} @endif</textarea>
              <div class="invalid-feedback">
              Please enter information or Upload file
              </div>
						</div>
						<div class="dropzone">
							<input type="file" name="file5" id="file5" class="dropify" />
						</div>
            @if(isset($answer5->file5))
            @if($answer5->file5 != '')
            <img src="{{asset('uploads/file/'.$answer5->file5 )}}" height="200px" width="200px">
            @endif
            @endif
  </div>
  </div>
  @endif
  @if($topic6 == 1)
  <div class="tab">
  <div class="row">
      <div class="col-md-8">
      <div class="question">
						<h4>Tast 6 Sample direction to write something:</h4>
						<a href="https://google.com" target="_blank">Step_5template.pptx</a>
					</div>
					<div class="question">
						<h4>Related training material:</h4>
						<a href="https://example.com" target="_blank">Presentation</a>
					</div>
					<div class="question">
						<h4>Related video links:</h4>
						<ul>
							<li><a href="https://google.com" target="_blank">https://www.example.org/wp-content/2020/11/social_enterprise.pdf</a></li>
							<li><a href="https://google.com" target="_blank">https://www.example.com/summary-of</a></li>
						</ul>
					</div>
				</div>
        <div class="col-md-4">
          <img class="img-fluid" src="{{asset('assets/img/grid.jpg')}}">
        </div>
    </div>
    <div class="row pt-5">
      <div class="textarea has-validation">
							<h4>My business plan:</h4>
              <textarea rows="5" id="answare6" name="answare6" class="form-control answarearea" >@if(isset($answer6)) {!! $answer6->answare6 !!} @endif</textarea>
              <div class="invalid-feedback">
              Please enter information or Upload file
              </div>
						</div>
						<div class="dropzone">
							<input type="file" name="file6" id="file6" class="dropify" />
						</div>
            @if(isset($answer6->file6))
            @if($answer6->file6 != '')
            <img src="{{asset('uploads/file/'.$answer6->file6 )}}" height="200px" width="200px">
            @endif
            @endif
  </div>
  </div>
  @endif
  @if($topic7 == 1)
  <div class="tab">
  <div class="row">
      <div class="col-md-8">
      <div class="question">
						<h4>Tast 7 Sample direction to write something:</h4>
						<a href="https://google.com" target="_blank">Step_5template.pptx</a>
					</div>
					<div class="question">
						<h4>Related training material:</h4>
						<a href="https://example.com" target="_blank">Presentation</a>
					</div>
					<div class="question">
						<h4>Related video links:</h4>
						<ul>
							<li><a href="https://google.com" target="_blank">https://www.example.org/wp-content/2020/11/social_enterprise.pdf</a></li>
							<li><a href="https://google.com" target="_blank">https://www.example.com/summary-of</a></li>
						</ul>
					</div>
				</div>
        <div class="col-md-4">
          <img class="img-fluid" src="{{asset('assets/img/grid.jpg')}}">
        </div>
    </div>
    <div class="row pt-5">
      <div class="textarea has-validation">
							<h4>My business plan:</h4>
							<textarea rows="5" id="answare7" name="answare7" class="form-control answarearea" >@if(isset($answer7)) {!! $answer7->answare7 !!} @endif</textarea>
              <div class="invalid-feedback">
              Please enter information or Upload file
              </div>
						</div>
						<div class="dropzone">
							<input type="file" name="file7" id="file7" class="dropify" />
						</div>
            @if(isset($answer7->file7))
            @if($answer7->file7 != '')
            <img src="{{asset('uploads/file/'.$answer7->file7 )}}" height="200px" width="200px">
            @endif
            @endif
  </div>
  </div>
  @endif
  @if($topic8 == 1)
  <div class="tab">
  <div class="row">
      <div class="col-md-8">
      <div class="question">
						<h4>Tast 8 Sample direction to write something:</h4>
						<a href="https://google.com" target="_blank">Step_5template.pptx</a>
					</div>
					<div class="question">
						<h4>Related training material:</h4>
						<a href="https://example.com" target="_blank">Presentation</a>
					</div>
					<div class="question">
						<h4>Related video links:</h4>
						<ul>
							<li><a href="https://google.com" target="_blank">https://www.example.org/wp-content/2020/11/social_enterprise.pdf</a></li>
							<li><a href="https://google.com" target="_blank">https://www.example.com/summary-of</a></li>
						</ul>
					</div>
				</div>
        <div class="col-md-4">
          <img class="img-fluid" src="{{asset('assets/img/grid.jpg')}}">
        </div>
    </div>
    <div class="row pt-5">
      <div class="textarea has-validation">
							<h4>My business plan:</h4>
							<textarea rows="5" id="answare8" name="answare8" class="form-control answarearea" >@if(isset($answer8)) {!! $answer8->answare8 !!} @endif</textarea>
              <div class="invalid-feedback">
              Please enter information or Upload file
              </div>
						</div>
						<div class="dropzone">
							<input type="file" name="file8" id="file8" class="dropify" />
						</div>
            @if(isset($answer8->file8))
            @if($answer8->file8 != '')
            <img src="{{asset('uploads/file/'.$answer8->file8 )}}" height="200px" width="200px">
            @endif
            @endif
  </div>
  </div>
  @endif
  @if($topic9 == 1)
  <div class="tab">
  <div class="row">
      <div class="col-md-8">
      <div class="question">
						<h4>Tast 9 Sample direction to write something:</h4>
						<a href="https://google.com" target="_blank">Step_5template.pptx</a>
					</div>
					<div class="question">
						<h4>Related training material:</h4>
						<a href="https://example.com" target="_blank">Presentation</a>
					</div>
					<div class="question">
						<h4>Related video links:</h4>
						<ul>
							<li><a href="https://google.com" target="_blank">https://www.example.org/wp-content/2020/11/social_enterprise.pdf</a></li>
							<li><a href="https://google.com" target="_blank">https://www.example.com/summary-of</a></li>
						</ul>
					</div>
				</div>
        <div class="col-md-4">
          <img class="img-fluid" src="{{asset('assets/img/grid.jpg')}}">
        </div>
    </div>
    <div class="row pt-5">
      <div class="textarea has-validation">
							<h4>My business plan:</h4>
							<textarea rows="5" id="answare9" name="answare9" class="form-control answarearea" >@if(isset($answer9)) {!! $answer9->answare9 !!} @endif</textarea>
              <div class="invalid-feedback">
              Please enter information or Upload file
              </div>
						</div>
						<div class="dropzone">
							<input type="file" name="file9" id="file9" class="dropify" />
						</div>
            @if(isset($answer9->file9))
            @if($answer9->file9 != '')
            <img src="{{asset('uploads/file/'.$answer9->file9 )}}" height="200px" width="200px">
            @endif
            @endif
  </div>
  </div>
  @endif
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    @if($topic1 == 1)
    <span class="step"></span>
    @endif
    @if($topic2 == 1)
    <span class="step"></span>
    @endif
    @if($topic3 == 1)
    <span class="step"></span>
    @endif
    @if($topic4 == 1)
    <span class="step"></span>
    @endif
    @if($topic5 == 1)
    <span class="step"></span>
    @endif
    @if($topic6 == 1)
    <span class="step"></span>
    @endif
    @if($topic7 == 1)
    <span class="step"></span>
    @endif
    @if($topic8 == 1)
    <span class="step"></span>
    @endif
    @if($topic9 == 1)
    <span class="step"></span>
    @endif
  </div>
</form>
</div>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("quesform").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("textarea");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script> -->
<script src="//cdn.ckeditor.com/4.19.0/basic/ckeditor.js"></script>

<script type="text/javascript">
    @if($topic1 == 1)
    CKEDITOR.replace('answare1', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    @endif
    @if($topic2 == 1)
    CKEDITOR.replace('answare2', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    @endif
    @if($topic3 == 1)
    CKEDITOR.replace('answare3', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    @endif
    @if($topic4 == 1)
    CKEDITOR.replace('answare4', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    @endif
    @if($topic5 == 1)
    CKEDITOR.replace('answare5', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    @endif
    @if($topic6 == 1)
    CKEDITOR.replace('answare6', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    @endif
    @if($topic7 == 1)
    CKEDITOR.replace('answare7', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    @endif
    @if($topic8 == 1)
    CKEDITOR.replace('answare8', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    @endif
    @if($topic9 == 1)
    CKEDITOR.replace('answare9', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
    @endif

</script>
</body>
</html>
