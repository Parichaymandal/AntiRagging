<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sign in/Log in</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/page_component_css/navbar_style.css">
    <link rel="stylesheet" type="text/css" href="css/page_component_css/footer_style.css">
    <link rel="stylesheet" type="text/css" href="css/signin-login-page-style.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body onload="adjustHeight()">

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
            <a href="index.blade.php" class="navbar-brand">Anti-Ragging</a>
        </div><!-- End nav header -->
        <div class="collapse navbar-collapse" id="comNavCollapse">
            <ul class="nav navbar-nav">
                <li><a href="#groups">Groups</a></li>
                <li><a href="#articles">Articles</a></li>
                <li><a href="#videos">Videos</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="signin_login_page.blade.php">Sign in</a></li>
            </ul>
        </div><!-- End navbar content area -->
    </div>
</nav>

<!-- End navbar section ends -->

<div class="container-fluid sign-log-background img-responsive">

    <div class="row">
        <div class="col-md-12">

            <!-- Sign in area starts -->

            <div class="col-md-5 well">

                <h1>Sign in</h1>

                <hr>

                <form>

                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter full name...">
                    </div>

                    <div class="form-group">
                        <label for="discipline">Discipline</label>
                        <input type="text" class="form-control" id="discipline" placeholder="Give discipline name...">
                    </div>

                    <div class="form-group">
                        <label for="university">University name</label>
                        <input type="text" class="form-control" id="university" placeholder="Name of the University...">
                    </div>

                    <div class="form-group">
                        <label for="userName">Username</label>
                        <input type="text" class="form-control" id="userName" placeholder="Enter username...">
                    </div>

                    <div class="form-group">
                        <label for="emailArea">Email</label>
                        <input type="email" class="form-control" id="emailArea" placeholder="Give your email...">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password...">
                    </div>

                    <div class="form-group">
                        <label for="re-password">Re-Enter Password</label>
                        <input type="password" class="form-control" id="re-password" placeholder="Re-Enter your password...">
                    </div>

                    <button type="submit" class="btn btn-default pull-right">Sign in</button>

                </form>

            </div>

            <!-- Sign in area ends -->

            <div class="col-md-2 vertical-line">

            <!-- In between space -->
            </div>

            <!-- Log in area starts -->

            <div class="col-md-5 log-in-area well">

                <h1>Log in</h1>

                <hr>

                <form>

                    <div class="form-group">
                        <label for="userNameInput">Username</label>
                        <input type="text" class="form-control" id="userNameInput" placeholder="Username...">
                    </div>

                    <div class="form-group">
                        <label for="passwordInput">Password</label>
                        <input type="password" class="form-control" id="passwordInput" placeholder="Enter your password...">
                    </div>

                    <button type="submit" class="btn btn-default pull-right">Log in</button>

                </form>

            </div>

            <!-- Log in area ends -->

        </div>
    </div>

</div>


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
                <img src="../../public/images/logo_sm.jpg" class="img-responsive">
            </div>

            <div class="col-md-4 social-corner-outer">
                <div class="social-corner-inner">
                    <div class="col-md-6">
                        <a href="#"><img src="../../public/images/logo-fb.jpg"></a>
                    </div>
                    <div class="col-md-6">
                        <a href="#"><img src="../../public/images/logo-yt.jpg"></a>
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

<!-- Sign in / Login page js -->
<script src="../../public/js/signin_login_page_js.js"></script>
</body>
</html>