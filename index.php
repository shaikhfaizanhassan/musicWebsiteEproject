<?php 
    include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Melodi</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="HimanshuGupta">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Font awesome CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-color.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/logo/favicon.ico">
</head>

<body>

    <!-- modal for booking ticket form -->
    <div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="BookTicket">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Name of The Event &nbsp; <small><span
                                class="label label-success">Available</span> &nbsp; <span class="label label-danger">Not
                                Available</span></small></h4>
                </div>
                <!-- form for events ticket booking -->
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                placeholder="example@mail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputContact">Contact</label>
                            <input type="text" class="form-control" id="exampleInputContact"
                                placeholder="+91 55 5555 5555">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputSeats">Number of Tickets</label>
                            <select class="form-control" id="exampleInputSeats">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> I accept the Terms of Service
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <!-- link to payment gatway here -->
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- wrapper -->
    <div class="wrapper" id="home">

        <!-- header area -->
        <header>
            <!-- secondary menu -->
            <nav class="secondary-menu">
                <div class="container">
                    <!-- secondary menu left link area -->
                    <div class="sm-left">
                        <strong>Phone</strong>:&nbsp; <a href="#">555 555 555</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong>E-mail</strong>:&nbsp; <a href="#">music.site@melodi.com</a>
                    </div>
                    <!-- secondary menu right link area -->
                    <div class="sm-right">
                        <!-- social link -->
                        <div class="sm-social-link">
                            <a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </nav>
            <!-- primary menu -->
            <nav class="navbar navbar-fixed-top navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- logo area -->
                        <a class="navbar-brand" href="#home">
                            <!-- logo image -->
                            <img class="img-responsive" src="img/logo/logo.png" alt="" />
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#latestalbum">MUSIC</a></li>
                            <li><a href="#featuredalbum">ALBAM</a></li>
                            <li><a href="#featureARTIEST">ARTIST</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--/ header end -->

        <!-- banner area -->
        <div class="banner">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/banner/b1.jpg" alt="...">
                        <div class="container">
                            <!-- banner caption -->
                            <div class="carousel-caption slide-one">
                                <!-- heading -->
                                <h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i> Melodi For You!</h2>
                                <!-- paragraph -->
                                <h3 class="animated fadeInRightBig">Find More Innovative &amp; Creative Music Albums.
                                </h3>
                                <!-- button -->
                                <a href="#" class="animated fadeIn btn btn-theme">Download Here</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/banner/b2.jpg" alt="...">
                        <div class="container">
                            <!-- banner caption -->
                            <div class="carousel-caption slide-two">
                                <!-- heading -->
                                <h2 class="animated fadeInLeftBig"><i class="fa fa-headphones"></i> Listen It...</h2>
                                <!-- paragraph -->
                                <h3 class="animated fadeInRightBig">Lorem ipsum dolor sit amet, consectetur elit.</h3>
                                <!-- button -->
                                <a href="#" class="animated fadeIn btn btn-theme">Listen Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="fa fa-arrow-left" aria-hidden="true"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="fa fa-arrow-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
        <!--/ banner end -->

        <!-- block for animate navigation menu -->
        <div class="nav-animate"></div>

        <!-- Hero block area -->
        <div id="latestalbum" class="hero pad">
            <div class="container">
                <!-- hero content -->
                <div class="hero-content ">
                    <!-- heading -->
                    <h2>Latest Album</h2>
                    <hr>
                    <!-- paragraph -->
                    <p>We sing the best <strong class="theme-color">Songs</strong> and now we control the world best
                        <strong class="theme-color">Music</strong>.</p>
                </div>
                <!-- hero play list -->
                <div class="hero-playlist">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <!-- music album image -->
                            <div class="figure">
                                <!-- image -->
                                <img class="img-responsive" src="img/album/1.jpg" alt="" />
                                <!-- disk image -->
                                <img class="img-responsive disk" src="img/album/disk.png" alt="" />
                            </div>
                            <!-- album details -->
                            <div class="album-details">
                                <!-- title -->
                                <h4>Perfect Melodi</h4>
                                <!-- composed by -->
                                <h5>By Himanshu</h5>
                                <!-- paragraph -->
                                <p>Lorem Ipsum has been the industry's standard dummy text ever since 1500.</p>
                                <!-- button -->
                                <a href="#" class="btn btn-lg btn-theme" id="playNowBtn"><i
                                        class="fa fa-play"></i>&nbsp; Play Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <!-- play list -->
                            <div class="playlist-content" >
                                <ul class="list-unstyled" >


                                        <?php 
                                            $fetchmusic = mysqli_query($con,"select * from music");
                                            while($music = mysqli_fetch_array($fetchmusic))
                                            {

                                            
                                        ?>

                                    <li class="playlist-number">
                                        <!-- song information -->
                                        <div class="song-info" >
                                            <!-- song title -->
                                            <h4><?php echo $music[1] ?></h4>
                                            <audio controls style="width:520px; ">
                                                <source src="admin/uploadmusic/<?php echo $music[4] ?>" type="audio/mp3">
                                            </audio>
                                        </div>
                                        <!-- music icon -->
                                        
                                        <div class="clearfix"></div>
                                    </li>
                                    <?php } ?>
                                   
                                    
                                    
                                    
                                   
                                    
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ hero end -->

        <!-- promo -->
        <div class="promo parallax-one pad">
            <div class="container">
                <!-- promo element -->
                <div class="promo-element ">
                    <!-- heading -->
                    <h3>Music An Art...</h3>
                    <!-- paragraph -->
                    <p>Music is an art form and cultural activity whose medium is sound organized in time. The common
                        elements of music are <strong>pitch</strong>, <strong>rhythm</strong>, <strong>dynamics</strong>
                        and the sonic qualities of <strong>timbre</strong> and <strong>texture</strong>.</p>
                    <!-- link -->
                    <a class="promo-link" href="#"><i class="fa fa-play-circle"></i></a>
                </div>
            </div>
        </div>
        <!--/ promo end -->

        <!-- featured abbum -->
        <div class="featured pad" id="featuredalbum">
            <div class="container">
                <!-- default heading -->
                <div class="default-heading">
                    <!-- heading -->
                    <h2>Featured Album</h2>
                </div>
                <!-- featured album elements -->
                <div class="featured-element">
                    <div class="row">
                    
                    <?php 
                        $fetchalbam = mysqli_query($con,"select * from albam");
                        while($albam = mysqli_fetch_array($fetchalbam))
                        {

                        
                    ?>
                    
                    
                    <div class="col-lg-4" >
                            <!-- featured item -->
                            <div class="featured-item " >
                                <!-- image container -->
                                <div class="figure" style="width: 100%;">
                                    <!-- image -->
                                    <img class="img-responsive" src="admin/albamimage/<?php echo $albam[2]; ?>" alt="" style="width: 100%;" />
                                    <!-- paragraph -->
                                    <p>There are many variations of passages available, but the majority have suffered
                                        Lorem alteration in some form, by injected look even slightly believable.</p>
                                </div>
                                <!-- featured information -->
                                <div class="featured-item-info">
                                    <!-- featured title -->
                                    <a href="albammusic.php?albammusic=<?php echo $albam[0] ?>"><h4><?php echo $albam[1]; ?></h4></a>
                                    
                                    <!-- horizontal line -->
                                    <hr />
                                    <!-- some responce from social medial or web likes -->
                                    <p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span
                                            class="label label-theme">Love</span></p>
                                </div>
                            </div>
                        </div>
                      
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- features end -->

        <!-- call to action -->
        <div class="cta parallax-one pad">
            <div class="container">
                <!-- cta element -->
                <div class="cta-element ">
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
                            <!-- heading -->
                            <h3>Melodi, A Fully Rock Album Pro</h3>
                            <!-- paragraph -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim sectetur adipiscing elit, sed do eiusmod
                                tempoad minim veniam consequat.</p>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="cta-btn text-center">
                                <!-- purchase now button -->
                                <a href="#" class="btn btn-default btn-lg">Download Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ cta end -->

        <!-- work with us -->
    
        <!--/ end work with us -->

        <!-- news letter -->
   
        <!-- news letter end -->

        <div class="portfolio pad" id="featureARTIEST">
            <div>
                <!-- default heading -->
                <div class="default-heading">
                    <!-- heading -->
                    <h2>Artist</h2>
                </div>
            </div>
            <!-- portfolio -->
            <div class="portfolio-content" id="portfolioOwl">
            <?php 
                        $fetchartest = mysqli_query($con,"select * from artest");
                        while($artest = mysqli_fetch_array($fetchartest))
                        {

                        
                    ?>
            
            <div class="item">
                    <!-- item image -->
                    <img class="img-responsive" src="admin/artestimage/<?php echo $artest[2] ?>" alt="" style="width: 100%;">
                    <!-- transparent background -->
                    <div class="p-transparent"></div>
                    <!-- on mouse hover details -->
                    <div class="p-hover">
                        <!-- heading /title -->
                        <h3><?php echo $artest[1] ?></h3>
                        <hr>
                        <a href="artestmusic.php?artestmusic=<?php echo $artest[0] ?>" style="width: 200px;">MUSIC</a>
                        <!-- project details -->
                        
                    </div>
                </div>
              
           
               <?php } ?>
                
                
          
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-lg btn-theme">View more</a>
            </div>
            <!-- portfolio end -->
        </div>


        <!-- contact -->
        <div class="contact pad" id="contact">
            <div class="container">
                <!-- default heading -->
                <div class="default-heading">
                    <!-- heading -->
                    <h2>Contact Us</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <!-- contact item -->
                        <div class="contact-item ">
                            <!-- big icon -->
                            <i class="fa fa-street-view"></i>
                            <!-- contact details  -->
                            <span class="contact-details">#30/67, 5th Street, Mega Market Circle, New Delhi -
                                625001</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <!-- contact item -->
                        <div class="contact-item ">
                            <!-- big icon -->
                            <i class="fa fa-wifi"></i>
                            <!-- contact details  -->
                            <span class="contact-details">music.site@melodi.com</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <!-- contact item -->
                        <div class="contact-item ">
                            <!-- big icon -->
                            <i class="fa fa-phone"></i>
                            <!-- contact details  -->
                            <span class="contact-details">555 555 5555</span>
                        </div>
                    </div>
                </div>
                <!-- form content -->
                <div class="form-content ">
                    <!-- paragraph -->
                    <p>Do you have any idea in your mind? Drop us a line.</p>
                    <form role="form" id="contactForm" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Enter phone">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" name="message" rows="9"
                                        placeholder="Enter message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-theme">Send Message</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
        <!-- contact end -->

        <!-- footer -->
        <footer>
            <div class="container">
                <!-- social media links -->
                <div class="social">
                    <a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <!-- copy right -->
                <p class="copy-right">&copy; copyright 2018, All rights are reserved.</p>
            </div>
        </footer>
        <!-- footer end -->

        <!-- Scroll to top -->
        <span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span>

    </div>

    <!-- Javascript files -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- WayPoints JS -->
    <script src="js/waypoints.min.js"></script>
    <!-- Include js plugin -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- One Page Nav -->
    <script src="js/jquery.nav.js"></script>
    <!-- Respond JS for IE8 -->
    <script src="js/respond.min.js"></script>
    <!-- HTML5 Support for IE -->
    <script src="js/html5shiv.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
</body>

</html>