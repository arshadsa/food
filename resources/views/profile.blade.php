<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="shortcut icon" href="{{asset('assets/img/question.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/img/question.png')}}" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<style>
    body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}

a, button, code, div, img, input, label, li, p, pre, select, span, svg, table, td, textarea, th, ul {
    -webkit-border-radius: 0!important;
    -moz-border-radius: 0!important;
    border-radius: 0!important;
}
.dashboard-stat, .portlet {
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
}
.portlet {
    margin-top: 0;
    margin-bottom: 25px;
    padding: 0;
    border-radius: 4px;
}
.portlet.bordered {
    border-left: 2px solid #e6e9ec!important;
}
.portlet.light {
    padding: 12px 20px 15px;
    background-color: #fff;
}
.portlet.light.bordered {
    border: 1px solid #e7ecf1!important;
}
.list-separated {
    margin-top: 10px;
    margin-bottom: 15px;
}
.profile-stat {
    padding-bottom: 20px;
    border-bottom: 1px solid #f0f4f7;
}
.profile-stat-title {
    color: #7f90a4;
    font-size: 25px;
    text-align: center;
}
.uppercase {
    text-transform: uppercase!important;
}

.profile-stat-text {
    color: #5b9bd1;
    font-size: 10px;
    font-weight: 600;
    text-align: center;
}
.profile-desc-title {
    color: #7f90a4;
    font-size: 17px;
    font-weight: 600;
}
.profile-desc-text {
    color: #7e8c9e;
    font-size: 14px;
}
.margin-top-20 {
    margin-top: 20px!important;
}
[class*=" fa-"]:not(.fa-stack), [class*=" glyphicon-"], [class*=" icon-"], [class^=fa-]:not(.fa-stack), [class^=glyphicon-], [class^=icon-] {
    display: inline-block;
    line-height: 14px;
    -webkit-font-smoothing: antialiased;
}
.profile-desc-link i {
    width: 22px;
    font-size: 19px;
    color: #abb6c4;
    margin-right: 5px;
}


</style>
</head>
<body>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic text-center">
                    @if($users->user_img != '')
					<img src="{{('uploads/user/'.$users->user_img)}}" class="img-fluid" alt="$users->name">
                    @else
                    <img src="https://gravatar.com/avatar/31b64e4876d603ce78e04102c67d6144?s=80&d=https://codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png" class="img-fluid" alt="$users->name">
                    @endif
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
                   {{$users->name}}
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<a href="{{url('/')}}" class="btn btn-success btn-sm">Home</a>
					<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger btn-sm">Logout <i class="fa fa-sign-out"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
				</div>
				<!-- END SIDEBAR BUTTONS -->                 
                                           
        
        
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   @if($users->user_type != 2)
                @if(isset($answares))
                <button class="btn btn-primary" onclick="javascript:demoFromHTML();">Download</button><br>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Question and Answer</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody id="downloadArea">
                  @if($answares->answare1 != '')
                    <tr>
                      <th scope="row">1</th>
                      <td>
                          <div class="question">
                            <h4>Food Suppliers and Outlets:</h4>
                          </div>
                          <p>{!! $answares->answare1 !!}</p>
                          
                          @if($answares->file1 != '')
                          <a href="{{asset('uploads/file/'.$answares->file1)}}" download>{{$answares->file1}}</a>
                          @endif
                      </td>
                      <td>
                      <a class="btn btn-primary" href="{{url('question?topic1=1')}}">Edit</a> 
                      <a class="btn btn-primary" onclick="return confirm('Are you sure? Delete this data.')" href="{{ route('answare.delete',1) }}">Delete</a>
                      </td>
                    </tr>
                    @endif
                    @if($answares->answare2 != '')
                    <tr>
                      <th scope="row">2</th>
                      <td>
                          <div class="question">
                            <h4>Storage and Packaging:</h4>
                          </div>
                          <p>{!! $answares->answare2 !!}</p>
                          
                          @if($answares->file2 != '')
                          <a href="{{asset('uploads/file/'.$answares->file2)}}" download>{{$answares->file2}}</a>
                          @endif
                      </td>
                      <td>
                      <a class="btn btn-primary" href="{{url('question?topic2=1')}}">Edit</a>
                      <a class="btn btn-primary" onclick="return confirm('Are you sure? Delete this data.')" href="{{ route('answare.delete',2) }}">Delete</a>
                      </td>
                    </tr>
                    @endif
                    @if($answares->answare3 != '')
                    <tr>
                      <th scope="row">3</th>
                      <td>
                          <div class="question">
                            <h4>Food Preparation and Food Waste:</h4>
                          </div>
                          <p>{!! $answares->answare3 !!}</p>
                          
                          @if($answares->file3 != '')
                          <a href="{{asset('uploads/file/'.$answares->file3)}}" download>{{$answares->file3}}</a>
                          @endif
                      </td>
                      <td>
                      <a class="btn btn-primary" href="{{url('question?topic3=1')}}">Edit</a>
                      <a class="btn btn-primary" onclick="return confirm('Are you sure? Delete this data.')" href="{{ route('answare.delete',3) }}">Delete</a>
                      </td>
                    </tr>
                    @endif
                    @if($answares->answare4 != '')
                    <tr>
                      <th scope="row">4</th>
                      <td>
                          <div class="question">
                            <h4>Staff - Kitchen and Front-of-house:</h4>
                          </div>
                          <p>{!! $answares->answare4 !!}</p>
                          
                          @if($answares->file4 != '')
                          <a href="{{asset('uploads/file/'.$answares->file4)}}" download>{{$answares->file4}}</a>
                          @endif
                      </td>
                      <td>
                      <a class="btn btn-primary" href="{{url('question?topic4=1')}}">Edit</a>
                      <a class="btn btn-primary" onclick="return confirm('Are you sure? Delete this data.')" href="{{ route('answare.delete',4) }}">Delete</a>
                      </td>
                    </tr>
                    @endif
                    @if($answares->answare5 != '')
                    <tr>
                      <th scope="row">5</th>
                      <td>
                          <div class="question">
                            <h4>Customer Engagement:</h4>
                          </div>
                          <p>{!! $answares->answare5 !!}</p>
                          
                          @if($answares->file5 != '')
                          <a href="{{asset('uploads/file/'.$answares->file5)}}" download>{{$answares->file5}}</a>
                          @endif
                      </td>
                      <td>
                      <a class="btn btn-primary" href="{{url('question?topic5=1')}}">Edit</a>
                      <a class="btn btn-primary" onclick="return confirm('Are you sure? Delete this data.')" href="{{ route('answare.delete',5) }}">Delete</a>
                      </td>
                    </tr>
                    @endif
                    @if($answares->answare6 != '')
                    <tr>
                      <th scope="row">6</th>
                      <td>
                          <div class="question">
                            <h4>Menu:</h4>
                          </div>
                          <p>{!! $answares->answare6 !!}</p>
                          
                          @if($answares->file6 != '')
                          <a href="{{asset('uploads/file/'.$answares->file6)}}" download>{{$answares->file6}}</a>
                          @endif
                      </td>
                      <td>
                      <a class="btn btn-primary" href="{{url('question?topic6=1')}}">Edit</a>
                      <a class="btn btn-primary" onclick="return confirm('Are you sure? Delete this data.')" href="{{ route('answare.delete',6) }}">Delete</a>
                      </td>
                    </tr>
                    @endif
                    @if($answares->answare7 != '')
                    <tr>
                      <th scope="row">7</th>
                      <td>
                          <div class="question">
                            <h4>Customer:</h4>
                          </div>
                          <p>{!! $answares->answare7 !!}</p>
                          
                          @if($answares->file7 != '')
                          <a href="{{asset('uploads/file/'.$answares->file7)}}" download>{{$answares->file7}}</a>
                          @endif
                      </td>
                      <td>
                      <a class="btn btn-primary" href="{{url('question?topic7=1')}}">Edit</a>
                      <a class="btn btn-primary" onclick="return confirm('Are you sure? Delete this data.')" href="{{ route('answare.delete',7) }}">Delete</a>
                      </td>
                    </tr>
                    @endif
                    @if($answares->answare8 != '')
                    <tr>
                      <th scope="row">8</th>
                      <td>
                          <div class="question">
                            <h4>Tools:</h4>
                          </div>
                          <p>{!! $answares->answare8 !!}</p>
                          
                          @if($answares->file8 != '')
                          <a href="{{asset('uploads/file/'.$answares->file8)}}" download>{{$answares->file8}}</a>
                          @endif
                      </td>
                      <td>
                      <a class="btn btn-primary" href="{{url('question?topic8=1')}}">Edit</a>
                      <a class="btn btn-primary" onclick="return confirm('Are you sure? Delete this data.')" href="{{ route('answare.delete',8) }}">Delete</a>
                      </td>
                    </tr>
                    @endif
                    @if($answares->answare9 != '')
                    <tr>
                      <th scope="row">9</th>
                      <td>
                          <div class="question">
                            <h4>Revenue and Costs:</h4>
                          </div>
                          <p>{!! $answares->answare9 !!}</p>
                          
                          @if($answares->file9 != '')
                          <a href="{{asset('uploads/file/'.$answares->file9)}}" download>{{$answares->file9}}</a>
                          @endif
                      </td>
                      <td>
                      <a class="btn btn-primary" href="{{url('question?topic9=1')}}">Edit</a>
                      <a class="btn btn-primary" onclick="return confirm('Are you sure? Delete this data.')" href="{{ route('answare.delete',9) }}">Delete</a>
                      </td>
                    </tr>
                    @endif
                  </tbody>
                </table>
                @else
                No data found
                @endif
               @else
               <div class="table-responsive">
               <table id="questable" class="display table table-striped" style="width:100%;">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th>User Name</th>
                        <th>Ans 1</th>
                        <th>Ans 2</th>
                        <th>Ans 3</th>
                        <th>Ans 4</th>
                        <th>Ans 5</th>
                        <th>Ans 6</th>
                        <th>Ans 7</th>
                        <th>Ans 8</th>
                        <th>Ans 9</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($answares as $ans)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$ans->users->name}}</td>
                        <td>{{$ans->answare1 ?? ''}}</td>
                        <td>{{$ans->answare2 ?? ''}}</td>
                        <td>{{$ans->answare3 ?? ''}}</td>
                        <td>{{$ans->answare4 ?? ''}}</td>
                        <td>{{$ans->answare5 ?? ''}}</td>
                        <td>{{$ans->answare6 ?? ''}}</td>
                        <td>{{$ans->answare7 ?? ''}}</td>
                        <td>{{$ans->answare8 ?? ''}}</td>
                        <td>{{$ans->answare9 ?? ''}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

</div>

               @endif
            </div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>

<script type="text/javascript">
function demoFromHTML() {
  var pdf = new jsPDF('p', 'pt', 'a4');
  source = $('#downloadArea')[0];
  specialElementHandlers = {
    '#bypassme': function(element, renderer) {
      return true
    }
  };
  margins = {
    top: 40,
    bottom: 40,
    left: 40,
    width: 522
  };
  pdf.fromHTML(
    source,
    margins.left,
    margins.top, { 
      'width': margins.width,
      'elementHandlers': specialElementHandlers
    },

    function(dispose) {
      pdf.save('answer.pdf');
    }, margins);
}

</script>
</body>
</html>