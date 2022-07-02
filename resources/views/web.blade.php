<!DOCTYPE html>
<html>

<head>
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Question & Answare</title>
	
	<!-- Drag and Drop file uploader designing  -->
	<link rel="stylesheet" href="{{asset('assets/dropify/dist/css/dropify.min.css')}}">
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
</style>

<body>
	<div class="container">
		<!-- Grid Structure -->
		<div id="grid">
			<h3>Business Canvas Model</h3>
			<div class="grid">
				<div class="item tp1 topic" tabindex="1">
					<!-- Checkbox input field to get all checked items in array list on click topic -->
					<input type="checkbox" name="topic[]" id="t1" value="t1" data-class="tp1">
					<label for="t1">Food Suppliers</label>
				</div>
				<div class="item" tabindex="1">
					<div class="tp2 topic">
						<!-- Checkbox input field to get all checked items in array list on click topic -->
						<input type="checkbox" name="topic[]" id="t2" value="t2" data-class="tp2">
						<label for="t2">Key Activities</label>
					</div>
					<div class="tp3 topic">
						<!-- Checkbox input field to get all checked items in array list on click topic -->
						<input type="checkbox" name="topic[]" id="t3" value="t3" data-class="tp3">
						<label for="t3">Key Resources</label>
					</div>
				</div>
				<div class="item tp4 topic" tabindex="1">
					<!-- Checkbox input field to get all checked items in array list on click topic -->
					<input type="checkbox" name="topic[]" id="t4" value="t4" data-class="tp4">
					<label for="t4">Value Propositions</label>
				</div>
				<div class="item" tabindex="1">
					<div class="tp5 topic">
						<!-- Checkbox input field to get all checked items in array list on click topic -->
						<input type="checkbox" name="topic[]" id="t5" value="t5" data-class="tp5">
						<label for="t5">Customer Relationships</label>
					</div>
					<div class="tp6 topic">
						<!-- Checkbox input field to get all checked items in array list on click topic -->
						<input type="checkbox" name="topic[]" id="t6" value="t6" data-class="tp6">
						<label for="t6">Channels</label>
					</div>
				</div>
				<div class="item tp7 topic" tabindex="1">
					<!-- Checkbox input field to get all checked items in array list on click topic -->
					<input type="checkbox" name="topic[]" id="t7" value="t7" data-class="tp7">
					<label for="t7">Customer Segments</label>
				</div>
			</div>
			<div class="grid-2">
				<div class="item tp8 topic" tabindex="1">
					<!-- Checkbox input field to get all checked items in array list on click topic -->
					<input type="checkbox" name="topic[]" id="t8" value="t8" data-class="tp8">
					<label for="t8">Cost Structure</label>
				</div>
				<div class="item tp9 topic" tabindex="1">
					<!-- Checkbox input field to get all checked items in array list on click topic -->
					<input type="checkbox" name="topic[]" id="t9" value="t9" data-class="tp9">
					<label for="t9">Revenue Streams</label>
				</div>
			</div>
			<div class="submit-box">
				<button id="selected" type="button">Submit</button>
			</div>
		</div>
		<!-- All Responses -->
		<div class="pages"></div>
		<!-- Final Result -->
		<div id="page2" class="hide"></div>
	</div>
</body>

<div class="hide" id="values"></div>

<!-- Juqery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Text Editor -->
<script src="{{asset('assets/tinymce/tinymce.min.js')}}"></script>
<!-- Drag and Drop  -->
<script src="{{asset('assets/dropify/dist/js/dropify.min.js')}}"></script>
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

	// This code is used to append html according to grid selection
	$(document).on('click', '#selected', function () {
		// get all checked items
		var checkedVals = $('input[name="topic[]"]:checked').map(function (x) {
			let topic_id = this.value;
			let status = '';
			let button = '';
			let flex = '';
			let back = x - 1;
			if (x > 0) {
				status = 'hide';
			}
			if (x == 0) {
				button = 'hide';
				flex = 'flex-end';
			}

			// Render html of selected topics in array on click
			var html = `
					<div id="page-${x}" class="${status} ${topic_id}">
						<div class="material-box">
							<div class="mg-50 student-material-${x}"></div>
							<div class="material-img">
								<img src="{{asset('assets/img/grid.jpg')}}" />
							</div>
						</div>
						<div class="textarea">
							<h4>My business plan:</h4>
							<textarea id="material-info-${x}" class="editor"></textarea>
						</div>
						<div class="dropzone">
							<input type="file" id="file-${x}" class="dropify" />
						</div>
						<div class="red" id="material-error-${x}">Please enter information or Upload file</div>
						<div class="submit-box buttons-box ${flex}">
							<button id="back-button" class="${button}" data-val="${back}" type="button">Back</button>
							<button id="submit-form" data-val="${x}" type="button">Submit</button>
						</div>
					</div>
				`;

			// append html according to selection
			$('.pages').append(html);
			// initialize drag and drop on click
			$('.dropify').dropify();
			// initialize editor on click
			editor();
			// get questions of selected items
			var ques = questions(this.value);
			// set questions
			$('.student-material-' + x).append(ques);
			// set hidden topic values to check if there is an form.
			$('#values').append('<input type="hidden" id="check_val_' + x + '" value="' + this.value + '" />')
			return this.value;
		}).get();

		$('#grid').hide();
		$('#page').show();
	});

	// This code is used to navigate back to previous topics
	$(document).on('click', '#back-button', function () {
		var val = $(this).data('val');
		var x = val + 1;
		// show next page
		$('#page-' + val).show();
		// hide current page
		$('#page-' + x).hide();
		// start from top
		$(window).scrollTop(0);
	});

	// This code is used to save form values like response and files
	$(document).on('click', '#submit-form', function () {
		// get the form number value
		var index = $(this).data('val');
		// get the content in the editor
		var val = tinymce.get('material-info-' + index).getContent();
		// get the file which is selected
		var file = $('#file-' + index)[0].files[0];

		console.log(index + val + file);

		if (val == '' && file == undefined) {
			// show error if both fields are empty
			$('#material-error-' + index).show();
		}
		else {
			// hide error
			$('#material-error-' + index).hide();
			// check next form number
			let indVal = index + 1;
			var check = $('#check_val_' + indVal).val();

			// save file in browser local storage
			if (file != undefined) {
				var tmppath = URL.createObjectURL(file);
				localStorage.setItem('tmpfile_' + index, tmppath);
				localStorage.setItem('file_' + index, file.name);
			}

			// set content value in browser local storage
			localStorage.setItem('info_' + index, val);

			// show next form 
			if (check) {
				$('#page-' + index).hide();
				$('#page-' + indVal).show();
				$(window).scrollTop(0);
			}

			// show result page if all form are submitted
			else {

				if(tinymce.get('material-info-t1')){
				var ans1 = tinymce.get('material-info-t1').getContent();
				}else{
					var ans1 = null;
				}
				if(tinymce.get('material-info-t2')){
				var ans2 = tinymce.get('material-info-t2').getContent();
				}else{
					var ans2 = null;
				}
				if(tinymce.get('material-info-t3')){
				var ans3 = tinymce.get('material-info-t3').getContent();
				}else{
					var ans3 = null;
				}
				if(tinymce.get('material-info-t4')){
				var ans4 = tinymce.get('material-info-t4').getContent();
				}else{
					var ans4 = null;
				}
				if(tinymce.get('material-info-t5')){
				var ans5 = tinymce.get('material-info-t5').getContent();
				}else{
					var ans5 = null;
				}
				if(tinymce.get('material-info-t6')){
				var ans6 = tinymce.get('material-info-t6').getContent();
				}else{
					var ans6 = null;
				}
				if(tinymce.get('material-info-t7')){
				var ans7 = tinymce.get('material-info-t7').getContent();
				}else{
					var ans7 = null;
				}
				if(tinymce.get('material-info-t8')){
				var ans8 = tinymce.get('material-info-t8').getContent();
				}else{
					var ans8 = null;
				}
				if(tinymce.get('material-info-t9')){
				var ans9 = tinymce.get('material-info-t9').getContent();
				}else{
					var ans9 = null;
				}

				$.ajax({
					url:"{{ url('answare/store')}}",
					method:'POST',
					headers: {
							'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
							},
					data:{
						_token : $('meta[name="csrf-token"]').attr('content'), 
						ans1:ans1, 
						ans2:ans2,
						ans3:ans3,
						ans4:ans4,
						ans5:ans5,
						ans6:ans6,
						ans7:ans7,
						ans8:ans8,
						ans9:ans9,
							},
					success:function(response){
						if(response.success){
							alert(response.message) //Message come from controller
						}else{
							alert("Error")
						}
					},
					error:function(error){
						console.log(error)
					}
				});





				// get all checked topics
				$('input[name="topic[]"]:checked').map(function (x) {
					var finalques = questions_only(this.value);
					var responseInfo = localStorage.getItem('info_' + x);
					var URL = localStorage.getItem('tmpfile_' + x);
					var UrlName = localStorage.getItem('file_' + x);
					// render html of final result
					var html = `
							<div class="material-box">
								<div class="final-questions">
									${finalques}
									<div>
										<h4>My business plan:</h4>
										<p>${responseInfo}</p>
									</div>
									<div class="files ${URL}"><a href="${URL}" target="_blank">${UrlName}</a></div>
								</div>
								<div class="material-img">
									<img src="{{asset('assets/img/grid.jpg')}}" />
								</div>
							</div>
						`;
					// append result html
					$('#page2').append(html)
				}).get();
				// hide forms
				$('.pages').hide();
				// show result page
				$('#page2').show();
			}
		}
	});

	// Here you can set the question for each topic.
	function questions(topic) {
		var data = '';
		// set Topic 1 questions
		if (topic == 't1') {
			data = `
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
				`;
		}
		// set Topic 2 questions
		else if (topic == 't2') {
			data = `
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
				`;
		}
		// set Topic 3 questions
		else if (topic == 't3') {
			data = `
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
				`;
		}
		// set Topic 4 questions
		else if (topic == 't4') {
			data = `
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
				`;
		}
		// set Topic 5 questions
		else if (topic == 't5') {
			data = `
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
				`;
		}
		// set Topic 6 questions
		else if (topic == 't6') {
			data = `
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
				`;
		}
		// set Topic 7 questions
		else if (topic == 't7') {
			data = `
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
				`;
		}
		// set Topic 8 questions
		else if (topic == 't8') {
			data = `
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
				`;
		}
		// set Topic 9 questions
		else if (topic == 't9') {
			data = `
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
				`;
		}

		return data;
	}

	// Questions only for the results section
	function questions_only(topic) {
		var data = '';
		// set Topic 1 questions
		if (topic == 't1') {
			data = `
					<div class="question">
						<h4>Tast 1 Sample direction to write something:</h4>
					</div>
				`;
		}
		// set Topic 2 questions
		else if (topic == 't2') {
			data = `
					<div class="question">
						<h4>Tast 2 Sample direction to write something:</h4>
					</div>
				`;
		}
		// set Topic 3 questions
		else if (topic == 't3') {
			data = `
					<div class="question">
						<h4>Tast 3 Sample direction to write something:</h4>
					</div>
				`;
		}
		// set Topic 4 questions
		else if (topic == 't4') {
			data = `
					<div class="question">
						<h4>Tast 4 Sample direction to write something:</h4>
					</div>
				`;
		}
		// set Topic 5 questions
		else if (topic == 't5') {
			data = `
					<div class="question">
						<h4>Tast 5 Sample direction to write something:</h4>
					</div>
				`;
		}
		// set Topic 6 questions
		else if (topic == 't6') {
			data = `
					<div class="question">
						<h4>Tast 6 Sample direction to write something:</h4>
					</div>
				`;
		}
		// set Topic 7 questions
		else if (topic == 't7') {
			data = `
					<div class="question">
						<h4>Tast 7 Sample direction to write something:</h4>
					</div>
				`;
		}
		// set Topic 8 questions
		else if (topic == 't8') {
			data = `
					<div class="question">
						<h4>Tast 8 Sample direction to write something:</h4>
					</div>
				`;
		}
		// set Topic 9 questions
		else if (topic == 't9') {
			data = `
					<div class="question">
						<h4>Tast 9 Sample direction to write something:</h4>
					</div>
				`;
		}
		return data;
	}
</script>
<script>
	// initialize drag and drop on page load
	$(document).ready(function () {
		$('.dropify').dropify();
	});

	// editor function
	function editor() {
		if ($(".editor").length > 0) {
			tinymce.init({
				selector: "textarea.editor",
				theme: "modern",
				height: 300,
				plugins: [
					"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
					"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
					"save table contextmenu directionality emoticons template paste textcolor"
				],
				toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

			});
		}
	}
</script>

</html>