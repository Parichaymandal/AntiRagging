<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>All Article Page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/page_component_css/navbar_style.css">
    <link rel="stylesheet" type="text/css" href="css/all_article_page_style.css">
    <link rel="stylesheet" type="text/css" href="css/page_component_css/footer_style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
            <img src="images/cover_img_3.jpg" class="img-responsive">
        </div>
    </div>
</div>

<!-- Cover section ends -->

@if ( Auth::user()->role === 1)



<div class="givePostArea">
    <div class="col-md-12 givePostTitleArea">
        <h1>Create Group</h1>
        <hr>
    </div>
    <div class="col-md-12 givePostFormArea">
        {!! Form::open(['route'=>'group_control.store']) !!}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Group Name" rows="4">
            <textarea class="form-control" id="description" name="description" placeholder="Group Name" rows="4"></textarea>

            <button type="submit" class="btn btn-default pull-right">Create</button>
        </div>
        {!! Form::close() !!}
    </div>
</div>


@else
    <h2>You are not authorized to create new group.</h2>
@endif


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
                <img src="images/logo_sm.jpg" class="img-responsive">
            </div>

            <div class="col-md-4 social-corner-outer">
                <div class="social-corner-inner">
                    <div class="col-md-6">
                        <a href="#"><img src="images/logo-fb.jpg"></a>
                    </div>
                    <div class="col-md-6">
                        <a href="#"><img src="images/logo-yt.jpg"></a>
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
<script src="../../public/js/bootstrap_js/bootstrap.min.js"></script>

<script src="../../public/js/all_article_page_js.js"></script>
</body>
</html>