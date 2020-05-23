<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Anti Ragging</title>

    <!-- Bootstrap -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/page_component_css/navbar_style.css">
      <link rel="stylesheet" type="text/css" href="css/index-page-style.css">
      <link rel="stylesheet" type="text/css" href="css/page_component_css/footer_style.css">

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>
    
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
                    @if ( Auth::user()!== null)
                    @if(Auth::user()->group != null)
                        <li><a href="/group">{!! Auth::user()->group->name !!}</a></li>
                    @endif
                    <li><a href="/all">Articles</a></li>
                    @if ( Auth::user()->role === 1)
                        <li><a href="create_group">Create New Group</a></li>
                        <li><a href="group_control">My Groups</a></li>
                    @endif
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">

                </ul>
                <ul class="nav navbar-nav navbar-right">

                    @if ( Auth::user()!== null)
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="groupChoose">All Groups</a></li>
                            <li><a>{!! Auth::user()->name !!}</a></li>
                            <li><a href="/logout">Sign out</a></li>
                        </ul>
                    @else
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/login">Signin</a></li>
                        </ul>
                    @endif

                </ul>
            </div><!-- End navbar content area -->
        </div>
    </nav>

    <!-- End navbar section ends -->


    <!-- Carousal slider section -->

    <div class="carousel slide" id="theSlider">
        <ol class="carousel-indicators">
            <li data-target="#theSlider" data-slide-to="0" class="active"></li>
            <li data-target="#theSlider" data-slide-to="1"></li>
            <li data-target="#theSlider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" id="carousel_section">
            <div class="item active">
                <img class="imgJS  img-responsive" src="images/slider/1.jpg" alt="truck 1" id = "img1">
                <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                    <a href="#" class="btn btn-info">Download App</a>
                </div>
            </div>
            <div class="item">
                <img class="imgJS  img-responsive" src="images/slider/2.jpg" alt="truck 2">
                <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                    <a href="#" class="btn btn-info">Download App</a>
                </div>
            </div>
            <div class="item">
                <img class="imgJS img-responsive" src="images/slider/4.jpg" alt="truck 3">
                <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                    <a href="#" class="btn btn-info">Download App</a>
                </div>
            </div>
        </div>

        <a href="#theSlider" class="carousel-control left" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#theSlider" class="carousel-control right" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

    <!-- Carousal slider ends here -->


  	<!-- Present article title section starts -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 article">

                <!-- Article title section -->
                <div class="row">
                    <div class="col-md-12 article-title">

                        <h1>
                            Where can I get some?
                        </h1>

                    </div>
                </div>

                <!-- Article description section -->
                <div class="row">
                    <div class="col-md-12 article-description">

                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                            making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
                            to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                            making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
                            to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                            making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
                            to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                            making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
                            to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                            making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
                            to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,
                            or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there
                            isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                            making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
                            to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Present article title section ends -->


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
                            <a href="https://www.facebook.com" target="_blank"><img src="images/logo-fb.jpg"></a>
                        </div>
                        <div class="col-md-6">
                            <a href="https://www.youtube.com" target="_blank"><img src="images/logo-yt.jpg"></a>
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
    <script src="js/bootstrap_js/bootstrap.min.js"></script>

    <!-- Home page javascript -->
    <script src="js/homePageScript.js"></script>
  </body>
</html>