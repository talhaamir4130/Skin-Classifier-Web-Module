<?php
// Start the session
session_start();
$files = scandir('img/skin_pics/', SCANDIR_SORT_DESCENDING);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portfolio</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/skin.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
    <script src="./script/gallery.js"></script>
    <script type="text/javascript">
        document.getElementsByClassName('btn approve').onclick = function(){
            alert("here");
            //alert(this.id);
        };
    </script>
</head>

<body onload="onLoad()" id="wrapper">
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
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
        </nav>
        <!--/.nav-ends -->
    </header>


<section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>SKIN LESIONS DETECTION</h2>
            </div>
        </div>
        <div class="page_info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-6">
                        <h4>Portfolio</h4>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6" style="text-align:right;">Home<span class="sep"> / </span><span class="current">Gallery</span></div>
                </div>
            </div>
        </div>

        </div>
    </section>

<section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="section-heading text-center">
                    <div class="col-md-12 col-xs-12">
                        <h1>Our <span>Latest Work</span></h1>
                        <p class="subheading">This gallery shows the latest images added to our huge Dataset of images on skin lesions.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
                    <div class="portfolio-one">
                        <div class="portfolio-head">
                            <div class="portfolio-img"><?php echo '<img src="img/skin_pics/'.$files[0].'"/>';?></div>
                            <?php 
                                    error_reporting(0);
                                    if( $_SESSION["usertype"]=="doctor")
                                    {
                                    ?>  
                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;">
                                
                                        <button class="btn approve" onclick="approve(document.getElementById('img_name_1').innerHTML)"><i>Approve</i></button>
                                        <button class="btn not_approve" onclick="not_approve(document.getElementById('img_name_1').innerHTML)"><i>Dont't Approve</i></button>

                                        </div>
                                    <?php 
                                    }
                                    if($_SESSION["usertype"]=="admin")
                                    {
                                        ?>

                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;"> 
                                        <button class="btn approve" onclick="remove_image(document.getElementById('img_name_1').innerHTML)"><i>Remove Image</i></button>
                                        </div>

                                        <?php
                                    } 
                                ?>

                        </div>
                        <!-- End portfolio-head -->
                        <div class="portfolio-content">
                            <h5 id="img_name_1" class="title"></h5>
                            <p class="doc">Doctor Approval : <i class="approved_image">Pending</i></p>
                        </div>
                        <!-- End portfolio-content -->
                    </div>
                    <!-- End portfolio-item -->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
                    <div class="portfolio-one">
                        <div class="portfolio-head">
                            <div class="portfolio-img"><?php echo '<img src="img/skin_pics/'.$files[1].'"/>';?></div>
                            <?php 
                                    error_reporting(0);
                                    if( $_SESSION["usertype"]=="doctor")
                                    {
                                    ?>  
                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;">
                                
                                        <button class="btn approve" onclick="approve(document.getElementById('img_name_2').innerHTML)"><i>Approve</i></button>
                                        <button class="btn not_approve" onclick="not_approve(document.getElementById('img_name_2').innerHTML)"><i>Dont't Approve</i></button>

                                        </div>
                                    <?php 
                                    }
                                    if($_SESSION["usertype"]=="admin")
                                    {
                                        ?>

                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;"> 
                                        <button class="btn approve" onclick="remove_image(document.getElementById('img_name_2').innerHTML)"><i>Remove Image</i></button>
                                        </div>

                                        <?php
                                    } 
                                ?>

                        </div>
                        <!-- End portfolio-head -->
                        <div class="portfolio-content">
                            <h5 id="img_name_2" class="title"></h5>
                            <p class="doc">Doctor Approval : <i class="approved_image">Pending</i></p>
                        </div>
                        <!-- End portfolio-content -->
                    </div>
                    <!-- End portfolio-item -->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
                    <div class="portfolio-one">
                        <div class="portfolio-head">
                            <div class="portfolio-img"><?php echo '<img src="img/skin_pics/'.$files[2].'"/>';?></div>
                            <?php 
                                    error_reporting(0);
                                    if( $_SESSION["usertype"]=="doctor")
                                    {
                                    ?>  
                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;">
                                
                                        <button class="btn approve" onclick="approve(document.getElementById('img_name_3').innerHTML)"><i>Approve</i></button>
                                        <button class="btn not_approve" onclick="not_approve(document.getElementById('img_name_3').innerHTML)"><i>Dont't Approve</i></button>

                                        </div>
                                    <?php 
                                    }
                                    if($_SESSION["usertype"]=="admin")
                                    {
                                        ?>

                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;"> 
                                        <button class="btn approve" onclick="remove_image(document.getElementById('img_name_3').innerHTML)"><i>Remove Image</i></button>
                                        </div>

                                        <?php
                                    } 
                                ?>

                        </div>
                        <!-- End portfolio-head -->
                        <div class="portfolio-content">
                            <h5 id="img_name_3" class="title"></h5>
                            <p class="doc">Doctor Approval : <i class="approved_image">Pending</i></p>
                        </div>
                        <!-- End portfolio-content -->
                    </div>
                    <!-- End portfolio-item -->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
                    <div class="portfolio-one">
                        <div class="portfolio-head">
                            <div class="portfolio-img"><?php echo '<img src="img/skin_pics/'.$files[3].'"/>';?></div>
                            <?php 
                                    error_reporting(0);
                                    if( $_SESSION["usertype"]=="doctor")
                                    {
                                    ?>  
                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;">
                                
                                        <button class="btn approve" onclick="approve(document.getElementById('img_name_4').innerHTML)"><i>Approve</i></button>
                                        <button class="btn not_approve" onclick="not_approve(document.getElementById('img_name_4').innerHTML)"><i>Dont't Approve</i></button>

                                        </div>
                                    <?php 
                                    }
                                    if($_SESSION["usertype"]=="admin")
                                    {
                                        ?>

                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;"> 
                                        <button class="btn approve" onclick="remove_image(document.getElementById('img_name_4').innerHTML)"><i>Remove Image</i></button>
                                        </div>

                                        <?php
                                    } 
                                ?>

                        </div>
                        <!-- End portfolio-head -->
                        <div class="portfolio-content">
                            <h5 id="img_name_4" class="title"></h5>
                            <p class="doc">Doctor Approval : <i class="approved_image">Pending</i></p>
                        </div>
                        <!-- End portfolio-content -->
                    </div>
                    <!-- End portfolio-item -->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
                    <div class="portfolio-one">
                        <div class="portfolio-head">
                            <div class="portfolio-img"><?php echo '<img src="img/skin_pics/'.$files[4].'"/>';?></div>
                            <?php 
                                    error_reporting(0);
                                    if( $_SESSION["usertype"]=="doctor")
                                    {
                                    ?>  
                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;">
                                
                                        <button class="btn approve" onclick="approve(document.getElementById('img_name_5').innerHTML)"><i>Approve</i></button>
                                        <button class="btn not_approve" onclick="not_approve(document.getElementById('img_name_5').innerHTML)"><i>Dont't Approve</i></button>

                                        </div>
                                    <?php 
                                    }
                                    if($_SESSION["usertype"]=="admin")
                                    {
                                        ?>

                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;"> 
                                        <button class="btn approve" onclick="remove_image(document.getElementById('img_name_5').innerHTML)"><i>Remove Image</i></button>
                                        </div>

                                        <?php
                                    } 
                                ?>

                        </div>
                        <!-- End portfolio-head -->
                        <div class="portfolio-content">
                            <h5 id="img_name_5" class="title"></h5>
                            <p class="doc">Doctor Approval : <i class="approved_image">Pending</i></p>
                        </div>
                        <!-- End portfolio-content -->
                    </div>
                    <!-- End portfolio-item -->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
                    <div class="portfolio-one">
                        <div class="portfolio-head">
                            <div class="portfolio-img"><?php echo '<img src="img/skin_pics/'.$files[5].'"/>';?></div>
                            <?php 
                                    error_reporting(0);
                                    if( $_SESSION["usertype"]=="doctor")
                                    {
                                    ?>  
                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;">
                                
                                        <button class="btn approve" onclick="approve(document.getElementById('img_name_6').innerHTML)"><i>Approve</i></button>
                                        <button class="btn not_approve" onclick="not_approve(document.getElementById('img_name_6').innerHTML)"><i>Dont't Approve</i></button>

                                        </div>
                                    <?php 
                                    }
                                    if($_SESSION["usertype"]=="admin")
                                    {
                                        ?>

                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;"> 
                                        <button class="btn approve" onclick="remove_image(document.getElementById('img_name_6').innerHTML)"><i>Remove Image</i></button>
                                        </div>

                                        <?php
                                    } 
                                ?>

                        </div>
                        <!-- End portfolio-head -->
                        <div class="portfolio-content">
                            <h5 id="img_name_6" class="title"></h5>
                            <p class="doc">Doctor Approval : <i class="approved_image">Pending</i></p>
                        </div>
                        <!-- End portfolio-content -->
                    </div>
                    <!-- End portfolio-item -->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
                    <div class="portfolio-one">
                        <div class="portfolio-head">
                            <div class="portfolio-img"><?php echo '<img src="img/skin_pics/'.$files[6].'"/>';?></div>
                            <?php 
                                    error_reporting(0);
                                    if( $_SESSION["usertype"]=="doctor")
                                    {
                                    ?>  
                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;">
                                
                                        <button class="btn approve" onclick="approve(document.getElementById('img_name_7').innerHTML)"><i>Approve</i></button>
                                        <button class="btn not_approve" onclick="not_approve(document.getElementById('img_name_7').innerHTML)"><i>Dont't Approve</i></button>

                                        </div>
                                    <?php 
                                    }
                                    if($_SESSION["usertype"]=="admin")
                                    {
                                        ?>

                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;"> 
                                        <button class="btn approve" onclick="remove_image(document.getElementById('img_name_7').innerHTML)"><i>Remove Image</i></button>
                                        </div>

                                        <?php
                                    } 
                                ?>

                        </div>
                        <!-- End portfolio-head -->
                        <div class="portfolio-content">
                            <h5 id="img_name_7" class="title"></h5>
                            <p class="doc">Doctor Approval : <i class="approved_image">Pending</i></p>
                        </div>
                        <!-- End portfolio-content -->
                    </div>
                    <!-- End portfolio-item -->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
                    <div class="portfolio-one">
                        <div class="portfolio-head">
                            <div class="portfolio-img"><?php echo '<img src="img/skin_pics/'.$files[7].'"/>';?></div>
                            <?php 
                                    error_reporting(0);
                                    if( $_SESSION["usertype"]=="doctor")
                                    {
                                    ?>  
                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;">
                                
                                        <button class="btn approve" onclick="approve(document.getElementById('img_name_8').innerHTML)"><i>Approve</i></button>
                                        <button class="btn not_approve" onclick="not_approve(document.getElementById('img_name_8').innerHTML)"><i>Dont't Approve</i></button>

                                        </div>
                                    <?php 
                                    }
                                    if($_SESSION["usertype"]=="admin")
                                    {
                                        ?>

                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;"> 
                                        <button class="btn approve" onclick="remove_image(document.getElementById('img_name_8').innerHTML)"><i>Remove Image</i></button>
                                        </div>

                                        <?php
                                    } 
                                ?>

                        </div>
                        <!-- End portfolio-head -->
                        <div class="portfolio-content">
                            <h5 id="img_name_8" class="title"></h5>
                            <p class="doc">Doctor Approval : <i class="approved_image">Pending</i></p>
                        </div>
                        <!-- End portfolio-content -->
                    </div>
                    <!-- End portfolio-item -->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 portfolio-item">
                    <div class="portfolio-one">
                        <div class="portfolio-head">
                            <div class="portfolio-img"><?php echo '<img src="img/skin_pics/'.$files[8].'"/>';?></div>
                            <?php 
                                    error_reporting(0);
                                    if( $_SESSION["usertype"]=="doctor")
                                    {
                                    ?>  
                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;">
                                
                                        <button class="btn approve" onclick="approve(document.getElementById('img_name_9').innerHTML)"><i>Approve</i></button>
                                        <button class="btn not_approve" onclick="not_approve(document.getElementById('img_name_9').innerHTML)"><i>Dont't Approve</i></button>

                                        </div>
                                    <?php 
                                    }
                                    if($_SESSION["usertype"]=="admin")
                                    {
                                        ?>

                                        <div class="portfolio-hover" style="text-align:center;margin-top: 30%; background-color: transparent;"> 
                                        <button class="btn approve" onclick="remove_image(document.getElementById('img_name_9').innerHTML)"><i>Remove Image</i></button>
                                        </div>

                                        <?php
                                    } 
                                ?>

                        </div>
                        <!-- End portfolio-head -->
                        <div class="portfolio-content">
                            <h5 id="img_name_9" class="title"></h5>
                            <p class="doc">Doctor Approval : <i class="approved_image">Pending</i></p>
                        </div>
                        <!-- End portfolio-content -->
                    </div>
                    <!-- End portfolio-item -->
                </div>
            </div>
            <?php 

               if( $_SESSION["usertype"]=="admin")
                    {
                        ?>
                        <form action="includes/upload.php" method="POST" enctype="multipart/form-data">
                            <input type="file" name="file[]" placeholder="Upload" multiple="multiple">
                            <br>
                            <button type="submit" name="submit" class="btn">Upload Images</button>
                        </form>
                        <?php 
                    } 

                ?>

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

    
</body>

</html>