<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Approved Group Page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/page_component_css/navbar_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/page_component_css/chat-box-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/page_component_css/footer_style.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <![endif]-->
</head>
<body onload="coverImgAdjust()">

<!-- Navigation bar section starts -->

<nav class="navbar navbar-default navbar-fixed-top" id="comNav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#comNavCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">Anti-Ragging</a>
        </div><!-- End nav header -->
        <div class="collapse navbar-collapse" id="comNavCollapse">
            <ul class="nav navbar-nav">
                @if(Auth::user()->group != null)
                    <li><a href="/group">{!! Auth::user()->group->name !!}</a></li>
                @endif
                <li><a href="/all">Articles</a></li>
                @if ( Auth::user()->role === 1)
                    <li><a href="create_group">Create New Group</a></li>
                    <li><a href="group_control">My Groups</a></li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="groupChoose">All Groups</a></li>
                <li><a>{!! Auth::user()->name !!}</a></li>
                <li><a href="/logout">Sign out</a></li>
            </ul>
        </div><!-- End navbar content area -->
    </div>
</nav>

<!-- End navbar section ends -->


<!-- Cover section starts -->

<div class="container-fluid cover">
    <div class="row">
        <div class="col-md-12">
            <img src="{{URL::asset('images/cover_img_3.jpg')}}" class="img-responsive">
        </div>
    </div>
</div>

<!-- Cover section ends -->


<!-- Group post and available member section starts -->

@if($user->group == null)

    <div class="col-md-offset-1 col-md-10 singlePost">
        <!-- Post Description section -->
        <div class="row">
            <div class="col-md-offset-1 col-md-10 singlePostDescription">
                <h3>Sorry! You don't belong to any group</h3>
            </div>
        </div>
    </div>
@else

<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">

            <!-- Group post section starts -->
            <div class="col-md-9" id="postSection">

                <!-- Give post section starts -->
                <div class="givePostArea">
                    <div class="col-md-12 givePostTitleArea">
                        <h1>Give Post</h1>
                        <hr>
                    </div>
                    <div class="col-md-12 givePostFormArea">
                        {!! Form::open(['route'=>'group.store']) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                                <textarea class="form-control" id="post" name="post" placeholder="Give your post..." rows="4"></textarea>
                                <input type="file" id="InputFile">
                                <button type="submit" class="btn btn-default pull-right">Post</button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- Give post section ends -->

                <!-- All post section starts -->
                <div class="seeAllPostArea">
                    <div class="col-md-12 allPostTitleArea">
                        <h1>All Posts</h1>
                        <hr>
                    </div>

                    <div class="col-md-12 allPostPreviewArea">



                        @foreach($posts as $p)

                        <!--Single post starts-->
                        <div class="row">

                            <div class="col-md-offset-1 col-md-10 singlePost">
                                <!-- Post Description section -->
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10 singlePostDescription">
                                        <h3>{!! $p->user['name'] !!}</h3>
                                        <hr>
                                        <p>
                                            {!! $p['post'] !!}
                                        </p>
                                    </div>
                                </div>

                                <!-- post comment section -->
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10 singlePostPreviousComment">
                                        <div class="col-md-12 allCommentTitleArea">
                                            <h1>All Comments</h1>
                                            <hr>
                                        </div>

                                        @foreach($p->comments as $comments)
                                            <h3>Name: {!! $comments->user['name'] !!}</h3>
                                            <p>{!! $comments['comment'] !!}</p>
                                        @endforeach

                                    </div>
                                </div>

                                <!-- my comment section -->
                                <div class="row">
                                    <div class="col-md-offset-1 col-md-10 myCommentSection">
                                        {!! Form::open(['route'=>'comment.store' ]) !!}
                                            <div class="form-group">
                                                <label for="yourComment">Give your comment</label>
                                                <input type="text" class="form-control" id="yourComment" name="comment" placeholder="comment...">
                                                <input type="hidden" name="post_id" value="{!! $p['id'] !!}">
                                                <button type="submit" class="btn btn-default pull-right comment-btn">Comment</button>
                                            </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--Single post ends-->

                        @endforeach

                        <!--Single post starts-->
                        <!--Single post ends-->

                        <!--Single post starts-->
                        <!--Single post ends-->

                        <!--Single post starts-->
                        <!--Single post ends-->

                    </div>
                </div>
                <!-- All post section ends -->

            </div>
            <!-- Group post section ends -->


            <!-- Chat section starts -->
            <div class="col-md-8 charSection" id="chatBoxSection">

                <div class="row">
                    <div class="col-md-offset-3 col-md-6">

                        <div class="row charMessages">
                            <div class="col-md-12">
                                <h1>Chat Area</h1>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <textarea id="chatBox" class="form-control" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="row chatMessageInputBox">
                            <div class="col-md-12">
                                <input type="text" id="message" class="form-control" placeholder="Text input...">
                            </div>
                        </div>

                        <div class="row chatButtons">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-danger pull-left" onclick="exitWindow()">Exit Char</button>
                                <button type="button" id="send" class="btn btn-info pull-right">Send</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- Chat section ends -->


            <!-- Group available member section starts -->
            <div class="col-md-3 available-members-section">

                <!-- Heading section starts -->
                <div class="row" style="text-align: center">
                    <div class="col-md-12">
                        <h3>Available Members</h3>
                        <hr>
                    </div>
                </div>
                <!-- Heading section ends -->

                <!-- Member list section starts -->
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" id="chaterMember" value="">

                    @foreach($members as $member)
                        <ul>

                            <li ><a class="chatMember btn btn-lg btn-group-lg" value="{!! $member['id'] !!}"
                                    type="button" onclick="getChatBox({!! $member['id'] !!})">{!! $member['name'] !!}</a></li>

                        </ul>
                        @endforeach
                    </div>
                </div>
                <!-- Member list section ends -->

            </div>
            <!-- Group available member section ends -->

        </div>
    </div>

</div>

@endif


<!-- Group post and available member section ends -->


<!-- Footer section starts -->

<footer>

    <div class="row">
        <div class="col-md-12 the-footer">

            <div class="col-md-4 address-contact">
                <ul>
                    <li><span class="title">Contact No:</span> 01234567890</li>
                    <li><span class="title">Address:</span></li>
                    <li class="align-right">Gollamari</li>
                    <li class="align-right">Khulna University</li>
                    <li class="align-right">Khulna</li>
                </ul>
            </div>

            <div class="col-md-4 logo-corner">
                <img src="{{URL::asset('images/logo_sm.jpg')}}" class="img-responsive">
            </div>

            <div class="col-md-4 social-corner-outer">
                <div class="social-corner-inner">
                    <div class="col-md-6">
                        <a href="#"><img src="{{URL::asset('images/logo-fb.jpg')}}"></a>
                    </div>
                    <div class="col-md-6">
                        <a href="#"><img src="{{URL::asset('images/logo-yt.jpg')}}"></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>

<!-- Footer section ends -->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{URL::asset('js/bootstrap_js/bootstrap.min.js')}}"></script>

<!-- Approved group page javascript -->
<script src="{{URL::asset('js/approved_group_page_js.js')}}"></script>
<script src="{{URL::asset('js/chatting.js')}}"></script>


</body>
</html>