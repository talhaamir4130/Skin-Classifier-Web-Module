<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/skin.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
</head>
<body id="wrapper">

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
                        <a class="navbar-brand" href="index.php">
                            <h1>Lesions Classifier</h1><span>Machine learning & Image Processing</span></a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="login.php">Sign In</a></li>
                            <li><a href="registration.php">Sign Up</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </nav>
    </header>
    <!--/.nav-ends -->

    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/4.jpeg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 id="demo" class="banner_heading">Skin <span>Cassification </span></h1>
                    <p class="banner_txt">With Machine learning and Image Processing techniques.</p>
                    <div class="slider_btn">
                        <button type="button" onclick="learnMore()" class="btn btn-default slide">Learn More <i class="fa fa-caret-right"></i>
                    </button>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url('img/5.jpeg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Over <span>3 different </span>Classifires</h1>
                    <p class="banner_txt">Melanoma ,Nevus etc
                    </p>
                    
                    <div class="slider_btn">
                        <button type="button" onclick="learnMore()" class="btn btn-default slide">Learn More <i class="fa fa-caret-right"></i></button>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="fill" style="background-image:url('img/6.jpeg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">Providing Doctor's <span>Advices </span>on Skin</h1>
                    <p class="banner_txt">With Frequent Image Checking</p>
                    <div class="slider_btn">
                        <button type="button" onclick="learnMore()" class="btn btn-default slide">Learn More <i class="fa fa-caret-right"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>

    </div>

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-laptop feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>Over 70% Accuracy</h4>
                        <p>From our technolgy and Data Set we were able to achieve over 70% accuracy for all the classifires.</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-bullhorn feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>Powerful Features</h4>
                        <p>We have included Image Processing techiniques which is able to edit and crop dataset which is then later fed into calssifires of nerual network.</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-support feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>Doctor's Support</h4>
                        <p>Our Communities of passaionate doctors regularly check our recent inclusion of images and dataset and help us in improving accuracy.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="about">
        <div class="image-holder col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-left">
            <div class="background-imgholder">
                <img src="img/1.jpg" alt="about" class="img-responsive" style="display:none;" />
            </div>
        </div>

        <div class="container-fluid">

            <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-2 col-xs-12 text-inner ">
                <div class="text-block">
                    <div class="section-heading">
                        <h1>ABOUT <span>US</span></h1>
                        <p class="subheading">Skin dieseases classification with machine learning.</p>
                    </div>

                    <ul class="aboutul">
                        <li> <i class="fa fa-check"></i>More than 3 classifications.</li>
                        <li> <i class="fa fa-check"></i>High Accuracy.</li>
                        <li> <i class="fa fa-check"></i>Doctor's Athentication.</li>
                        <li> <i class="fa fa-check"></i>Huge Dataset.</li>
                        <li> <i class="fa fa-check"></i>Android App.</li>
                        <li> <i class="fa fa-check"></i>Frequent Image Dataset Additions.</li>
                    </ul>

                    <button type="button" class="btn btn-primary slide" onclick="window.location.href = 'about.php'">Learn More  <i class="fa fa-caret-right"></i> </button>


                </div>
            </div>
        </div>
    </section>


    <section id="footer">
        <div class="container">
            <div class="row">
                

                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">	
                        <h4>Useful Links</h4>
                        <hr/>
                        <ul class="footer-links">
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="gallery.php">Portfolio</a></li>
                            <li><a href="login.php">Sign In</a></li>
                            <li><a href="registration.php">Sign Up</a></li>
                        </ul>
                    </div>
                </div>

                
            </div>
        </div>


    </section>


</html>