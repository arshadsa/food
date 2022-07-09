<!DOCTYPE html>
<html>

<head>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, maximum-scale=1.0">
    <title>Question & Answare</title>
    <link rel="shortcut icon" href="{{asset('assets/img/question.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/img/question.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
        position: relative;
    }

    /* .item:hover{
		background:yellow;
	} */

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
        width: 100%;
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

    .homebtn {
        float: right;
    }
    .item-answer, .item-answer2, .item-answer3, .item-answer4, .item-answer5, .item-answer6, .item-answer7, .item-answer8, .item-answer9 {
    position: absolute;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    }
    .item-answer {
        display: none;
    }

    .item-answer2 {
        display: none;
    }

    .item-answer3 {
        display: none;
    }

    .item-answer4 {
        display: none;
    }

    .item-answer5 {
        display: none;
    }

    .item-answer6 {
        display: none;
    }

    .item-answer7 {
        display: none;
    }

    .item-answer8 {
        display: none;
    }

    .item-answer9 {
        display: none;
    }

    .answer-button {
        background: blue;
        color: #fff;
        padding: 5px;
        font-size: 14px;
        border: 1px solid #000;
        border-radius: 5px;
    }

</style>


<body>
    <div class="container">
        <div class="homebtn">
            <a class="profilebtn" href="{{ url('/user/profile') }}">User Profile</a>
            <a class="logout-btn" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout <i
                    class="fa fa-sign-out"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        <!-- Grid Structure -->
        <div id="grid">
            <h3>Business Canvas Model</h3>
            <form action="{{route('question.show')}}" method="GET">
                <div class="grid">
                    <div class="item tp1 topic" tabindex="1" @if(isset($answares)) @if($answares->answare1 != '')
                        style="background:red;color:#fff;" @endif @endif>
                        <!-- Checkbox input field to get all checked items in array list on click topic -->
                        <input type="checkbox" name="topic1" id="t1" value="1" data-class="tp1">
                        <label for="t1">Food Suppliers and Outlets</label>

                        <div class="item-answer" id="item-answer">
                        @if(isset($answares->answare1 ))
                            <a class="btn btn-primary" href="{{url('question?topic1=1')}}">Edit</a>
                            @endif
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal1">Details</a>
                        </div>

                    </div>
                    <div class="item" tabindex="1">
                        <div class="tp2 topic" @if(isset($answares)) @if($answares->answare2 != '')
                            style="background:red;color:#fff;" @endif @endif>
                            <!-- Checkbox input field to get all checked items in array list on click topic -->
                            <input type="checkbox" name="topic2" id="t2" value="1" data-class="tp2">
                            <label for="t2">Storage and packaging</label>

                            <div class="item-answer2" id="item-answer2">
                            @if(isset($answares->answare2 ))
                                <a class="btn btn-primary" href="{{url('question?topic2=1')}}">Edit</a>
                                @endif
                                <a class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2">Details</a>
                            </div>

                        </div>
                        <div class="tp3 topic" @if(isset($answares)) @if($answares->answare3 != '')
                            style="background:red;color:#fff;" @endif @endif>
                            <!-- Checkbox input field to get all checked items in array list on click topic -->
                            <input type="checkbox" name="topic3" id="t3" value="1" data-class="tp3">
                            <label for="t3">Food Preparation and Food Waste</label>

                            <div class="item-answer3" id="item-answer3">
                            @if(isset($answares->answare3 ))
                                <a class="btn btn-primary" href="{{url('question?topic3=1')}}">Edit</a>
                                @endif
                                <a class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal3">Details</a>
                            </div>

                        </div>
                    </div>
                    <div class="item tp4 topic" tabindex="1" @if(isset($answares)) @if($answares->answare4 != '')
                        style="background:red;color:#fff;" @endif @endif>
                        <!-- Checkbox input field to get all checked items in array list on click topic -->
                        <input type="checkbox" name="topic4" id="t4" value="1" data-class="tp4">
                        <label for="t4">Staff - Kitchen and Front-of-house</label>

                        <div class="item-answer4" id="item-answer4">
                        @if(isset($answares->answare4 ))
                            <a class="btn btn-primary" href="{{url('question?topic4=1')}}">Edit</a>
                            @endif
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal4">Details</a>
                        </div>

                    </div>
                    <div class="item" tabindex="1">
                        <div class="tp5 topic" @if(isset($answares)) @if($answares->answare5 != '')
                            style="background:red;color:#fff;" @endif @endif>
                            <!-- Checkbox input field to get all checked items in array list on click topic -->
                            <input type="checkbox" name="topic5" id="t5" value="1" data-class="tp5">
                            <label for="t5">Customer engagement</label>

                            <div class="item-answer5" id="item-answer5">
                            @if(isset($answares->answare5 ))
                                <a class="btn btn-primary" href="{{url('question?topic5=1')}}">Edit</a>
                                @endif
                                <a class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal5">Details</a>
                            </div>

                        </div>
                        <div class="tp6 topic" @if(isset($answares)) @if($answares->answare6 != '')
                            style="background:red;color:#fff;" @endif @endif>
                            <!-- Checkbox input field to get all checked items in array list on click topic -->
                            <input type="checkbox" name="topic6" id="t6" value="1" data-class="tp6">
                            <label for="t6">Menu</label>

                            <div class="item-answer6" id="item-answer6">
                            @if(isset($answares->answare6 ))
                                <a class="btn btn-primary" href="{{url('question?topic6=1')}}">Edit</a>
                                @endif
                                <a class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal6">Details</a>
                            </div>

                        </div>
                    </div>
                    <div class="item tp7 topic" tabindex="1" @if(isset($answares)) @if($answares->answare7 != '')
                        style="background:red;color:#fff;" @endif @endif>
                        <!-- Checkbox input field to get all checked items in array list on click topic -->
                        <input type="checkbox" name="topic7" id="t7" value="1" data-class="tp7">
                        <label for="t7">Customer</label>

                        <div class="item-answer7" id="item-answer7">
                        @if(isset($answares->answare7 ))
                            <a class="btn btn-primary" href="{{url('question?topic7=1')}}">Edit</a>
                            @endif
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal7">Details</a>
                        </div>

                    </div>
                </div>
                <div class="grid-2">
                    <div class="item tp8 topic" tabindex="1" @if(isset($answares)) @if($answares->answare8 != '')
                        style="background:red;color:#fff;" @endif @endif>
                        <!-- Checkbox input field to get all checked items in array list on click topic -->
                        <input type="checkbox" name="topic8" id="t8" value="1" data-class="tp8">
                        <label for="t8">Tools</label>

                        <div class="item-answer8" id="item-answer8">
                        @if(isset($answares->answare8 ))
                            <a class="btn btn-primary" href="{{url('question?topic8=1')}}">Edit</a>
                            @endif
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal8">Details</a>
                        </div>
                    </div>
                    <div class="item tp9 topic" tabindex="1" @if(isset($answares)) @if($answares->answare9 != '')
                        style="background:red;color:#fff;" @endif @endif>
                        <!-- Checkbox input field to get all checked items in array list on click topic -->
                        <input type="checkbox" name="topic9" id="t9" value="1" data-class="tp9">
                        <label for="t9">Revenue and Costs</label>

                        <div class="item-answer9" id="item-answer9">
                            @if(isset($answares->answare9 ))
                            <a class="btn btn-primary" href="{{url('question?topic9=1')}}">Edit</a>
                            @endif
                            <a class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal9">Details</a>
                        </div>
                    </div>
                </div>
                <div class="submit-box">
                    <button id="selected" type="submit">Submit</button>
                </div>
        </div>
        </form>

    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal1Label">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi
                        quo perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint? Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Quidem, velit ea. Natus molestias modi quo perferendis ratione architecto alias, temporibus
                        blanditiis laboriosam exercitationem quam minima et molestiae velit nihil sint? Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi quo
                        perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal2Label">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi
                        quo perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint? Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Quidem, velit ea. Natus molestias modi quo perferendis ratione architecto alias, temporibus
                        blanditiis laboriosam exercitationem quam minima et molestiae velit nihil sint? Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi quo
                        perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal3Label">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi
                        quo perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint? Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Quidem, velit ea. Natus molestias modi quo perferendis ratione architecto alias, temporibus
                        blanditiis laboriosam exercitationem quam minima et molestiae velit nihil sint? Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi quo
                        perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal4Label">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi
                        quo perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint? Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Quidem, velit ea. Natus molestias modi quo perferendis ratione architecto alias, temporibus
                        blanditiis laboriosam exercitationem quam minima et molestiae velit nihil sint? Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi quo
                        perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModal5Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal5Label">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi
                        quo perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint? Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Quidem, velit ea. Natus molestias modi quo perferendis ratione architecto alias, temporibus
                        blanditiis laboriosam exercitationem quam minima et molestiae velit nihil sint? Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi quo
                        perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModal6Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal6Label">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi
                        quo perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint? Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Quidem, velit ea. Natus molestias modi quo perferendis ratione architecto alias, temporibus
                        blanditiis laboriosam exercitationem quam minima et molestiae velit nihil sint? Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi quo
                        perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModal7Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal7Label">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi
                        quo perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint? Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Quidem, velit ea. Natus molestias modi quo perferendis ratione architecto alias, temporibus
                        blanditiis laboriosam exercitationem quam minima et molestiae velit nihil sint? Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi quo
                        perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModal8Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal8Label">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi
                        quo perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint? Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Quidem, velit ea. Natus molestias modi quo perferendis ratione architecto alias, temporibus
                        blanditiis laboriosam exercitationem quam minima et molestiae velit nihil sint? Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi quo
                        perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModal9Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal9Label">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi
                        quo perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint? Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Quidem, velit ea. Natus molestias modi quo perferendis ratione architecto alias, temporibus
                        blanditiis laboriosam exercitationem quam minima et molestiae velit nihil sint? Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Quidem, velit ea. Natus molestias modi quo
                        perferendis ratione architecto alias, temporibus blanditiis laboriosam exercitationem quam
                        minima et molestiae velit nihil sint?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

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
            } else {
                // set background and text of un-checked box
                $('.' + cls).css('background', 'transparent');
                $('.' + cls).css('color', '#000');
            }
        });
        $(".tp1").mouseover(function () {
            $(".item-answer").css("display", "block");
        });
        $(".tp1").mouseout(function () {
            $(".item-answer").css("display", "none");
        });
        $(".tp2").mouseover(function () {
            $(".item-answer2").css("display", "block");
        });
        $(".tp2").mouseout(function () {
            $(".item-answer2").css("display", "none");
        });
        $(".tp3").mouseover(function () {
            $(".item-answer3").css("display", "block");
        });
        $(".tp3").mouseout(function () {
            $(".item-answer3").css("display", "none");
        });
        $(".tp4").mouseover(function () {
            $(".item-answer4").css("display", "block");
        });
        $(".tp4").mouseout(function () {
            $(".item-answer4").css("display", "none");
        });
        $(".tp5").mouseover(function () {
            $(".item-answer5").css("display", "block");
        });
        $(".tp5").mouseout(function () {
            $(".item-answer5").css("display", "none");
        });
        $(".tp6").mouseover(function () {
            $(".item-answer6").css("display", "block");
        });
        $(".tp6").mouseout(function () {
            $(".item-answer6").css("display", "none");
        });
        $(".tp7").mouseover(function () {
            $(".item-answer7").css("display", "block");
        });
        $(".tp7").mouseout(function () {
            $(".item-answer7").css("display", "none");
        });
        $(".tp8").mouseover(function () {
            $(".item-answer8").css("display", "block");
        });
        $(".tp8").mouseout(function () {
            $(".item-answer8").css("display", "none");
        });
        $(".tp9").mouseover(function () {
            $(".item-answer9").css("display", "block");
        });
        $(".tp9").mouseout(function () {
            $(".item-answer9").css("display", "none");
        });

    </script>
</body>

</html>
