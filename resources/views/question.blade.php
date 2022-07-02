<!DOCTYPE html>
<html>

<head>
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, maximum-scale=1.0">
	<title>Question & Answare</title>
	<link rel="shortcut icon" href="{{asset('assets/img/question.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/img/question.png')}}" type="image/x-icon">
</head>

<!-- Custom Page css -->
<style type="text/css">
	body {
		font-family: sans-serif;
	}

	table {
		border-collapse: collapse;
	}

	td {
		padding: 20px;
		border: solid 1px #000000;
		padding: 0;
	}

	body {
		padding: 0;
		margin: 0;
	}

	.grid {
		border: 1px solid #000;
		display: flex;
	}

	.grid-2 {
		display: flex;
		border-bottom: 1px solid #000;
		border-right: 1px solid #000;
		border-left: 1px solid #000;
	}

	.grid .item {
		width: 20%;
		text-align: center;
		border-right: 1px solid #000;
	}

	.tp2,
	.tp5 {
		border-bottom: 1px solid #000;
	}

	.tp1,
	.tp4,
	.tp7 {
		padding: 180px 0;
	}

	.tp8,
	.tp9 {
		padding: 70px 0;
	}

	.tp2,
	.tp3,
	.tp5,
	.tp6 {
		padding: 90px 0;
	}

	.tp7 {
		border: none !important;
	}

	.tp8,
	.tp9 {
		width: 50%;
		text-align: center;
	}

	.tp8 {
		border-right: 1px solid #000;
	}

	.item {
		cursor: pointer;
	}

	.item input[type=checkbox] {
		display: none;
	}

	label {
		pointer-events: none;
	}

	.textarea_editor {
		width: 100%;
	}

	.submit-box {
		text-align: right;
		margin-top: 10px;
	}

	.submit-box button {
		margin-top: 10px;
		cursor: pointer;
		padding: 10px 25px;
		background: #1dbf73;
		border: none;
		color: #fff
	}

	.info-box {
		width: 70%;
		margin: 0 auto;
	}

	.information-section {
		text-align: center;
	}

	.hide {
		display: none;
	}

	table {
		border-collapse: collapse;
		width: 100%;
	}

	td,
	th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
	}

	.question {
		margin-bottom: 10px;
	}

	.question a,
	.files a {
		color: #ff8ea2;
		margin: 0;
		text-decoration: none;
	}

	.question h4 {
		margin: 0;
		margin-bottom: 5px;
	}

	.question ul {
		padding: 0;
		margin: 0;
		margin-top: 5px;
		margin-left: 20px;
	}

	.question ul li a,
	#file-val {
		color: #ff8ea2;
	}

	.question ul li a {
		text-decoration: underline;
	}

	.mg-50 {
		margin-top: 50px;
	}

	.container {
		padding: 50px 100px;
	}

	.material-box {
		display: flex;
		justify-content: space-between;
		margin-bottom: 80px;
	}

	.material-img {
		margin-top: 35px;

	}

	.material-img img {
		height: 200px;
		width: 325px;
	}

	.textarea {
		margin-top: 20px;
	}

	.red {
		color: red;
		margin-top: 5px;
		display: none;
	}

	.dropzone {
		margin-top: 20px;
	}

	.buttons-box {
		display: flex;
		justify-content: space-between;
	}

	.flex-end {
		justify-content: flex-end;
	}

	#grid {
		width: 80%;
		margin: 0 auto;
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
}
</style>

<body>
	<div class="container">
		<div class="homebtn">
	<a class="profilebtn" href="{{ url('/user/profile') }}">User Profile</a>
	<a class="logout-btn" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout <i class="fa fa-sign-out"></i></a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
</div>
		<!-- Grid Structure -->
		<div id="grid">
			<h3>Business Canvas Model</h3>
            <form action="{{route('question.show')}}" method="GET">
			<div class="grid">
				<div class="item tp1 topic" tabindex="1" @if(isset($answares)) @if($answares->answare1 != '') style="background:red;color:#fff;" @endif @endif>
					<!-- Checkbox input field to get all checked items in array list on click topic -->
					<input type="checkbox" name="topic1" id="t1" value="1" data-class="tp1">
					<label for="t1">Food Suppliers and Outlets</label>
				</div>
				<div class="item" tabindex="1" >
					<div class="tp2 topic" @if(isset($answares)) @if($answares->answare2 != '') style="background:red;color:#fff;" @endif @endif>
						<!-- Checkbox input field to get all checked items in array list on click topic -->
						<input type="checkbox" name="topic2" id="t2" value="1" data-class="tp2">
						<label for="t2">Storage and packaging</label>
					</div>
					<div class="tp3 topic" @if(isset($answares)) @if($answares->answare3 != '') style="background:red;color:#fff;" @endif @endif>
						<!-- Checkbox input field to get all checked items in array list on click topic -->
						<input type="checkbox" name="topic3" id="t3" value="1" data-class="tp3">
						<label for="t3">Food Preparation and Food Waste</label>
					</div>
				</div>
				<div class="item tp4 topic" tabindex="1" @if(isset($answares)) @if($answares->answare4 != '') style="background:red;color:#fff;" @endif @endif>
					<!-- Checkbox input field to get all checked items in array list on click topic -->
					<input type="checkbox" name="topic4" id="t4" value="1" data-class="tp4">
					<label for="t4">Staff - Kitchen and Front-of-house</label>
				</div>
				<div class="item" tabindex="1" >
					<div class="tp5 topic" @if(isset($answares)) @if($answares->answare5 != '') style="background:red;color:#fff;" @endif @endif>
						<!-- Checkbox input field to get all checked items in array list on click topic -->
						<input type="checkbox" name="topic5" id="t5" value="1" data-class="tp5">
						<label for="t5">Customer engagement</label>
					</div>
					<div class="tp6 topic" @if(isset($answares)) @if($answares->answare6 != '') style="background:red;color:#fff;" @endif @endif>
						<!-- Checkbox input field to get all checked items in array list on click topic -->
						<input type="checkbox" name="topic6" id="t6" value="1" data-class="tp6">
						<label for="t6">Menu</label>
					</div>
				</div>
				<div class="item tp7 topic" tabindex="1" @if(isset($answares)) @if($answares->answare7 != '') style="background:red;color:#fff;" @endif @endif>
					<!-- Checkbox input field to get all checked items in array list on click topic -->
					<input type="checkbox" name="topic7" id="t7" value="1" data-class="tp7">
					<label for="t7">Customer</label>
				</div>
			</div>
			<div class="grid-2">
				<div class="item tp8 topic" tabindex="1" @if(isset($answares)) @if($answares->answare8 != '') style="background:red;color:#fff;" @endif @endif>
					<!-- Checkbox input field to get all checked items in array list on click topic -->
					<input type="checkbox" name="topic8" id="t8" value="1" data-class="tp8">
					<label for="t8">Tools</label>
				</div>
				<div class="item tp9 topic" tabindex="1" @if(isset($answares)) @if($answares->answare9 != '') style="background:red;color:#fff;" @endif @endif>
					<!-- Checkbox input field to get all checked items in array list on click topic -->
					<input type="checkbox" name="topic9" id="t9" value="1" data-class="tp9">
					<label for="t9">Revenue and Costs</label>
				</div>
			</div>
			<div class="submit-box">
				<button id="selected" type="submit">Submit</button>
			</div>
		</div>
</form>

	</div>



    <!-- Juqery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">

	// This code is used to make grid cells clickable
	$(document).on('click', '.topic', function () {
		var target = $(this).find('input[type="checkbox"]');
		var cls = target.data('class');
		target.prop('checked', !target.prop('checked'));
		if ($(target).is(':checked')) {
			// set background and text of checked box
			$('.' + cls).css('background', '#219821');
			$('.' + cls).css('color', '#fff');
		}
		else {
			// set background and text of un-checked box
			$('.' + cls).css('background', 'transparent');
			$('.' + cls).css('color', '#000');
		}
	});

	</script>
</body>
</html>