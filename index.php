<?php //include config
require_once('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MACWAY || GET THRILLED || ITS MORE THEN WHAT YOU SEE</title>
    <meta name="Description" content="What started out with one concept product soon became a company where we ventured into everything that involved modern entertainment and gaming. Macway is not just about calling customers to a location but also actively reaching out to them and making the event an edge above others. Following the path of being trendy in sports Macway, today has set a threshold for the innovative gamers. Macway offers a lot more than just the traditional gaming space. It has a wide array of indoor and outdoor activities to choose from with a combination of music, sports and intelligence. Here at Macway the activities are not only about how fit you are but it is also got a lot to do with your mind. So don’t just run, THINK, run and compete!!">
    <meta name="Keywords" content="Macway, Macwayintl, Macway International, Macway International India, MINI- SELF- BALANCING SCOOTER, BALANCING SCOOTER, SCOOTER, JoyRide Self-Balancing, JoyRide, GO KARTING, Virtual Reality, Virtual Reality (Walk the plank), CRICKET ZONE, CRICKET Simulator, Karaoke, Football Keeper, Football Simulator, Adventure, Fun, Picnic, Games, Virtual Games, Segway, Hoverboard, drift board, Hoverboard on rent, Segway on rent">
    <meta name="author" content="Dinika Dhanwani" />
    <meta name="robots" content="index, follow" />
    <meta property="fb:app_id" content="382736275417259" />
    <meta property="og:title" content="MACWAY || GET THRILLED || ITS MORE THEN WHAT YOU SEE" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="What started out with one concept product soon became a company where we ventured into everything that involved modern entertainment and gaming. Macway is not just about calling customers to a location but also actively reaching out to them and making the event an edge above others. Following the path of being trendy in sports Macway, today has set a threshold for the innovative gamers. Macway offers a lot more than just the traditional gaming space. It has a wide array of indoor and outdoor activities to choose from with a combination of music, sports and intelligence. Here at Macway the activities are not only about how fit you are but it is also got a lot to do with your mind. So don’t just run, THINK, run and compete!!" />
    <meta property="og:url" content="http://macwayintl.com/" />
    <meta property="og:image" content="http://macwayintl.com/img/macway_og.png" />
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="apple-touch-icon" sizes="57x57" href="img/fevicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/fevicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/fevicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/fevicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/fevicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/fevicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/fevicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/fevicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/fevicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/fevicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fevicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/fevicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fevicon/favicon-16x16.png">
    <link rel="manifest" href="img/fevicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/fevicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="vendor/formstone/background.css" rel="stylesheet" type="text/css">
    <link href="vendor/animate.css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/device-mockups/device-mockups.min.css" rel="stylesheet" type="text/css">
     <link href="css/styles.css" rel="stylesheet" type="text/css">
     <style type="text/css">

     </style>
     <script src="vendor/jquery/jquery.min.js"></script>
     <script type="text/javascript">
      $(document).ready(function(){
        $(".allcity").click(function(){
            $(".all_city").show();
        });
            <?php
        try {

            $stmt = $db->query('SELECT RegionID, Region FROM findusatregion ORDER BY RegionID');
            while($row = $stmt->fetch()){
                
                echo ' $(".'.str_replace(' ', '', strtolower($row['Region'])).'").click(function(){';
                echo '$(".all_city").hide();';
                echo '$(".city_'.str_replace(' ', '', strtolower($row['Region'])).'").show();';
                echo '});';

            }

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    ?>

    $(".cityfilter").on("click", function() {
      $(".cityfilter").removeClass("active");
      $(this).addClass("active");
    });


    });
</script>
<script>
$(document).ready(function(){
    $('.bookaride-rent').click(function(){
        $('#bookaride-fromdate').css('display','block');
        $('#bookaride-todate').css('display','block');
 });

    $('.bookaride-buy').click(function(){
        $('#bookaride-fromdate').css('display','none');
        $('#bookaride-todate').css('display','none');
 });
});
</script>
</head>
<body id="page-top">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i> Menu
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="img/logo_white.png" class="img-responsive img-logo" alt="">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#page-top">HOME</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">ABOUT US</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#explore">EXPLORE MACWAY</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#gallery">GALLERY</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#findusat">FIND US AT</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#newsandmedia">NEWS AND MEDIA</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#testomonials">TESTOMONIALS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="fixed-bookaride-btn"><a href="#myModal" class="btn" role="button" data-toggle="modal"><img src="img/bookride.png" class="img-responsive img-centered" alt=""></a></div>
    <div class="follow-us-box-fixed">
        <div class="follow-us-box-title-fixed">FOLLOW US:</div>
        <div class="follow-us-box-images-fixed"><a href="https://www.facebook.com/Macway-1632051467026616/" target="_blank"><img src="img/facebook.png" alt=""></a><!--<a href="https://www.facebook.com/Macway-1632051467026616/" target="_blank"><img src="img/twitter.png" alt=""></a> --><a href="https://www.instagram.com/macway_intl/" target="_blank"><img src="img/insta.png" alt=""></a><!--<a href="https://www.facebook.com/Macway-1632051467026616/" target="_blank"><img src="img/google-plus.png" alt=""></a>--></div>
    </div>
    <!-- Header -->
    <header class="background-size-cover transition-slow" style="background-image: url('img/backgrounds/bg-header.jpg');">
        <div class="intro-content">
            <img src="img/profile.svg" class="img-responsive img-centered img-profile-size" alt="">
            <div class="brand-name">It’s More than<br>what you see</div>
             <a href="#myModal" class="btn" role="button" data-toggle="modal"><img src="img/bookride.png" class="img-responsive img-centered" alt=""></a>

        </div>
        <div class="scroll-down">
            <a class="btn page-scroll" href="#about"><img src="img/scroll_white.gif?25" class="img-responsive img-centered" alt=""></a>
        </div>
    </header>

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <img src="img/close.png" class="img-responsive img-centered close-image" data-dismiss="modal" alt="">
      <!-- Modal content-->
      <div class="modal-content bookaride-model-box">
            <!--<?php
                /*
                    //if form has been submitted process it
                   if(isset($_POST['submitbookaride'])){

                
                        $bookaride = $_POST['bookaride-option'];
                        $name = $_POST['name'];
                        $contact = $_POST['contact-number'];
                        $fromdate = $_POST['fromdate'];
                        $todate = $_POST['todate'];

                        //very basic validation
                        if($bookaride ==''){
                            $error[] = 'Please select book a ride option';
                        }

                        if($name ==''){
                            $error[] = 'Please enter your name';
                        }

                        if($contact ==''){
                            $error[] = 'Please enter contact number';
                        }
                        if($fromdate ==''){
                            $error[] = 'Please enter fromdate';
                        }
                        if($name ==''){
                            $error[] = 'Please enter todate';
                        }


                        if(!isset($error)){
 
                            try {

                                //insert into database
                                $stmt = $db->prepare('INSERT INTO bookaride (boption,name,contact,fromdate,todate) VALUES (:boption,:name,:contact,:fromdate,:todate)') ;
                                $stmt->execute(array(
                                    ':boption' => $bookaride,
                                    ':name' => $name,
                                    ':contact' => $contact,
                                    ':fromdate' => $fromdate,
                                    ':todate' => $todate
                                ));

                                //redirect to index page    header('Location: index.php?action=added');
                                exit;

                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }

                        }

                    }

                    //check for any errors
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<p class="help-block text-danger">'.$error.'</p>';
                        }
                    }
                     */
                    ?> -->

        <form id="bookaride-form" action='' method='post' enctype="multipart/form-data" novalidate>
                        <h2 class="bookaride-headline">BOOK NOW</h2>
                        <div class="row control-group margin0">
                            <div class="form-group col-xs-12 controls margin0">
                                 <a class="btn btn-default btn-select btn-select-light">
                                <input type="hidden" class="btn-select-input" id="bookaride-option" name="bookaride-option" value="" required data-validation-required-message="Please select option."/>
                                <span class="btn-select-value" value="">Select</span>
                                <img src="img/dropdown.png" class='btn-select-arrow' />
                                <ul>
                                    <li class="bookaride-rent" value="Rent">Rent</li>
                                    <li class="bookaride-buy" value="Buy">Buy</li>
                                </ul>
                            </a>
                                <p class="help-block text-danger"></p>
                            </div>

                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="bookaride-name" name="bookaride-name" required data-validation-required-message="Please enter Name."/>
                                
                            </div>
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Contact Number</label>
                                <input type="tel" class="form-control" placeholder="Contact Number" id="bookaride-contact-number" name="contact-number" required data-validation-required-message="Please enter Contact Number."/>
                                
                            </div>
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="bookaride-email" required data-validation-required-message="Please enter your email address.">
                            </div>
                        <div id="bookaride-fromdate" class="form-group col-xs-12 floating-label-form-group controls">
                                <label>From Date (dd/mm/yy)</label>
                                <input type="text" class="form-control" placeholder="From Date (dd/mm/yy)" id="bookaride-fromdate" name="fromdate"/>
                                
                            </div>
                            <div id="bookaride-todate"  class="form-group col-xs-12 floating-label-form-group controls">
                                <label>To Date (dd/mm/yy)</label>
                                <input type="text" class="form-control" placeholder="To Date (dd/mm/yy)" id="bookaride-todate" name="todate"/>
                                
                            </div>
                        <br>
                        <div id="success1"></div>
                        <div class="row">
                            <div class="form-group col-xs-12 bookaride-form-cta-box">
                                <button type="submit" name="submitbookaride" class="btn btn-outline-dark bookaride-form-cta">Submit</button>
                            </div>
                        </div>
             </div>
                    </form>
      </div>
      
    </div>
  </div>
  
     <section id="about" class="portfolio-carousel wow fadeIn background-size-cover"  style="background-image: url('img/backgrounds/bg-1.jpg')">
        <!-- NOTE: You can add more items to the carousel, or remove items you don't need! -->
        <!-- Carousel Item 1 -->
        <div class="item item-css-change">
            <div class="container-fluid">
                <div class="row">
                     <div class="col-md-5 about-us-box" data-wow-delay=".4s">
                        <div class="project-details">
                            <span class="project-name about-us-title">ABOUT US</span>
                            <span class="project-description about-us-description">What started out with one concept product soon became a company where we ventured into everything that involved modern entertainment and gaming. Macway is not just about calling customers to a location but also actively reaching out to them and making the event an edge above others.</span>
                            <a href="#aboutusModel" data-toggle="modal" class="btn btn-outline-light about-us-know-more">KNOW MORE</a>
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md-12 about-us-motto">
                        <div class="about-us-motto-title">Our Motto</div>
                        <hr class="hr_border">
                        <div class="about-us-motto-description">Make a ‘lively’ business and have some ‘serious’ fun !</div>
                    </div>
                </div>
            </div>
        </div>
       
    </section>
    <!-- Example Modal 1: Corresponds with Portfolio Carousel Item 1 -->
    <div class="portfolio-modal modal fade" id="aboutusModel" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/backgrounds/bg-1.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 black-opacity">
                            <h2>ABOUT US</h2>
                            <hr class="colored">
                            <p class="macway-description">What started out with one concept product soon became a company where we ventured into everything that involved modern entertainment and gaming. Macway is not just about calling customers to a location but also actively reaching out to them and making the event an edge above others. Following the path of being trendy in sports Macway, today has set a threshold for the innovative gamers. Macway offers a lot more than just the traditional gaming space. It has a wide array of indoor and outdoor activities to choose from with a combination of music, sports and intelligence.<br /><br />Here at Macway the activities are not only about how fit you are but it is also got a lot to do with your mind.<br /><br /><strong>So don’t just run, THINK, run and compete!!</strong></p>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="device-mockup macbook portrait black">
                                <div class="device">
                                    <div class="screen">

                                        <!-- Modal Mockup Option 1: Single Image (Uncomment Below to Use) -->
                                        <!-- <img src="img/portfolio/carousel/screen-1a.jpg" class="img-responsive" alt=""> -->

                                        <!-- Modal Mockup Option 2: Carousel (Example In Use Below) -->
                                        <div class="mockup-carousel">
                                            <div class="item">
                                                <img src="img/portfolio/carousel/screen-1a.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="img/portfolio/carousel/screen-1b.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="img/portfolio/carousel/screen-1c1.jpg" class="img-responsive" alt="">
                                            </div>
                                            <div class="item">
                                                <img src="img/portfolio/carousel/screen-1d.jpg" class="img-responsive" alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                             <!--<ul class="list-inline item-details">
                                <li>Client: <strong>Start Bootstrap</strong>
                                </li>
                                <li>Date: <strong>April 2015</strong>
                                </li>
                                <li>Service: <strong>JOY RIDE</strong>
                                </li>
                            </ul> -->
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <section id="explore" class="pricing" style="background-image: url('img/backgrounds/bg-header2.jpg')">
        <div class="container wow fadeIn">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 class="explore_macway_heading">EXPLORE MACWAY</h2>
                    <p class="explore_macway_description">GET READY TO GET THRILLED coz the Game is tough and so are you!!!!</p>
                </div>
            </div>
        </div>
        <div class="scroll-down-explore">
            <a class="btn page-scroll" href="#explore_more"><img src="img/scroll_white.gif?23" class="img-responsive img-centered" alt=""></a>
        </div>
    </section>
    <div  id="explore_more">
    <section id="explore_more_1" class="explore_more" style="background-image: url('img/backgrounds/explore1.jpg')">
        <div class="container-fluid">
            <div class="row text-center content-row">
                <div class="col-xs-6 wow fadeIn pull-left" data-wow-delay=".4s">
                    <div class="about-content-left">
                        <h3 class="about-heading">JoyRide Self-Balancing</h3>
                        <p class="about-description">“Sway-A-Way, like never before!”<br /><br />Move swiftly by climbing on the self-balancing vehicle and enjoy the ride by just focusing on your body weight.</p>
                        <a href="#portfolioModal1" data-toggle="modal" class="btn btn-outline-light about-know-more">KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section id="explore_more_2" class="explore_more" style="background-image: url('img/backgrounds/explore2.jpg')">
        <div class="container-fluid">
            <div class="row text-center content-row">
                <div class="col-xs-6 wow fadeIn pull-right" data-wow-delay=".4s">
                    <div class="about-content-right">
                        <h3 class="about-heading">GO KARTING</h3>
                        <p class="about-description">“ Move. Compete. Play!”<br /><br />Experience the old-school karting in a completely different form. Sit at ground level and move with the ABC in your hands.</p>
                        <a href="#portfolioModal2" data-toggle="modal" class="btn btn-outline-light about-know-more">KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section id="explore_more_3" class="explore_more" style="background-image: url('img/backgrounds/explore3.jpg')">
        <div class="container-fluid">
            <div class="row text-center content-row">
                <div class="col-xs-6 wow fadeIn pull-left" data-wow-delay=".4s">
                    <div class="about-content-left">
                        <h3 class="about-heading">Virtual Reality (Walk the plank)</h3>
                        <p class="about-description">“It’s More than what you see”<br /><br />Challenge yourself to walk over a plank placed over a 50 storey building.</p>
                        <a href="#portfolioModal3" data-toggle="modal" class="btn btn-outline-light about-know-more">KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section id="explore_more_4" class="explore_more" style="background-image: url('img/backgrounds/explore4.jpg')">
        <div class="container-fluid">
            <div class="row text-center content-row">
                <div class="col-xs-6 wow fadeIn pull-right" data-wow-delay=".4s">
                    <div class="about-content-right">
                        <h3 class="about-heading">CRICKET ZONE</h3>
                        <p class="about-description">“Cric, Cric, Cricket, Don’t throw your wicket!”<br /><br />Bat against the most renowned bowlers and give your best shot.</p>
                        <a href="#portfolioModal4" data-toggle="modal" class="btn btn-outline-light about-know-more">KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="explore_more_5" class="explore_more" style="background-image: url('img/backgrounds/explore5.jpg')">
        <div class="container-fluid">
            <div class="row text-center content-row">
                <div class="col-xs-6 wow fadeIn pull-left" data-wow-delay=".4s">
                    <div class="about-content-left">
                        <h3 class="about-heading">Karaoke</h3>
                        <p class="about-description">“Sing-a-long and make some noise!”<br /><br />Bring out the singer in you by dancing to your own sweet voice. All you need to do is pick your favourite tune, grab the mic and sing the lyrics to the best of your ability.</p>
                        <a href="#portfolioModal5" data-toggle="modal" class="btn btn-outline-light about-know-more">KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <section id="explore_more_6" class="explore_more" style="background-image: url('img/backgrounds/explore6.jpg')">
        <div class="container-fluid">
            <div class="row text-center content-row">
                <div class="col-xs-6 wow fadeIn pull-right" data-wow-delay=".4s">
                    <div class="about-content-right">
                        <h3 class="about-heading">Football Keeper</h3>
                        <p class="about-description">“Winning isn't everything, it’s the only thing!”<br /><br />Get a chance to hit a goal faster than the goalkeeper gets you. The goalkeeper is made to react as soon as you go for goal giving you a real feel of a penalty shot.</p>
                        <a href="#portfolioModal6" data-toggle="modal" class="btn btn-outline-light about-know-more">KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
       <!-- Portfolio Carousel -->
    <section  id="explore_more_1" class="portfolio-carousel wow fadeIn explore_more_mobile">
        <!-- NOTE: You can add more items to the carousel, or remove items you don't need! -->
        <!-- Carousel Item 1 -->
        <div class="item background-size-cover" style="background-image: url('img/portfolio/carousel/screen-1a.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="project-details black-opacity">
                            <span class="project-name">JoyRide Self-Balancing</span>
                            <span class="project-description">“Sway-A-Way, like never before!”<br /><br />Move swiftly by climbing on the self-balancing vehicle and enjoy the ride by just focusing on your body weight.</span>
                            <hr class="colored">
                            <a href="#portfolioModal1" data-toggle="modal" class="btn btn-outline-light about-know-more">KNOW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel Item 2 -->
        <div class="item background-size-cover" style="background-image: url('img/portfolio/carousel/screen-1c1.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="project-details black-opacity">
                            <span class="project-name">GO KARTING</span>
                            <span class="project-description">“ Move. Compete. Play!”<br /><br />Experience the old-school karting in a completely different form. Sit at ground level and move with the ABC in your hands.</span>
                            <hr class="colored">
                            <a href="#portfolioModal2" data-toggle="modal" class="btn btn-outline-light about-know-more">KNOW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel Item 3 -->
        <div class="item background-size-cover" style="background-image: url('img/portfolio/carousel/screen-1b.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="project-details black-opacity">
                            <span class="project-name">Virtual Reality (Walk the plank)</span>
                            <span class="project-description">“It’s More than what you see”<br /><br />Challenge yourself to walk over a plank placed over a 50 storey building.</span>
                            <hr class="colored">
                            <a href="#portfolioModal3" data-toggle="modal" class="btn btn-outline-light about-know-more">KNOW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel Item 4 -->
        <div class="item background-size-cover" style="background-image: url('img/portfolio/carousel/screen-1d.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="project-details black-opacity">
                            <span class="project-name">CRICKET ZONE</span>
                            <span class="project-description">Cricket Simulator : “Cric, Cric, Cricket, Don’t throw your wicket!”<br /><br />Bat against the most renowned bowlers and give your best shot.</span>
                            <hr class="colored">
                            <a href="#portfolioModal4" data-toggle="modal" class="btn btn-outline-light about-know-more">KNOW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item background-size-cover" style="background-image: url('img/portfolio/carousel/screen-1e.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="project-details black-opacity">
                            <span class="project-name">Karaoke</span>
                            <span class="project-description">“Sing-a-long and make some noise!”<br /><br />Bring out the singer in you by dancing to your own sweet voice. All you need to do is pick your favourite tune, grab the mic and sing the lyrics to the best of your ability.</span>
                            <hr class="colored">
                            <a href="#portfolioModal5" data-toggle="modal" class="btn btn-outline-light about-know-more">KNOW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item background-size-cover" style="background-image: url('img/portfolio/carousel/screen-1f.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="project-details black-opacity">
                            <span class="project-name">Football Keeper</span>
                            <span class="project-description">“Winning isn't everything, it’s the only thing!”<br /><br />Get a chance to hit a goal faster than the goalkeeper gets you. The goalkeeper is made to react as soon as you go for goal giving you a real feel of a penalty shot.</span>
                            <hr class="colored">
                            <a href="#portfolioModal6" data-toggle="modal" class="btn btn-outline-light about-know-more">KNOW MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div>
    <a href="#lotsmoreModel" data-toggle="modal" class="lotsmore-box-a"><div class="lotsmore-box"><span class="lots-span">&amp; LOTS&nbsp;</span><span class="more-span">&nbsp;MORE!!</span></div></a>
    <div class="portfolio-modal modal fade" id="lotsmoreModel" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/portfolio/carousel/bg-3.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 lotsmore-model-box">
                            <h2>Lots More!!</h2>
                            <hr class="colored">
                        </div>
                        <div class="col-md-8 col-md-offset-2">

                                        <!-- Modal Mockup Option 1: Single Image (Uncomment Below to Use) -->
                                        <!-- <img src="img/portfolio/carousel/screen-1a.jpg" class="img-responsive" alt=""> -->

                                        <!-- Modal Mockup Option 2: Carousel (Example In Use Below) -->
                                        <div class="mockup-carousel">
                                            <div class="item">
                                                <div class="row lotsmore-model-slider-box">
                                                    <div class="col-md-6 lotsmore-model-slider-img"><img src="img/massagechair.png" class="img-responsive" alt=""></div>
                                                    <div class="col-md-6 lotsmore-model-slider-text">Massage Chair
                                                        <p class="lotsmore-model-slider-text-description">Massage chairs allow easy access to the head, shoulders, and back of a massage recipient, while robotic massage chairs use electronic vibrators and motors to provide a massage</p>
                                                    </div>
                                                </div>
                                             </div>
                                            <div class="item">
                                                <div class="row lotsmore-model-slider-box">
                                                    <div class="col-md-6 lotsmore-model-slider-img"><img src="img/hoverboard.jpg" class="img-responsive" alt=""></div>
                                                    <div class="col-md-6 lotsmore-model-slider-text">Hoverboard
                                                        <p class="lotsmore-model-slider-text-description">Hoverboard is a type of portable, rechargeable battery-powered scooter. The device is controlled by the rider's feet, standing on the built-in gyroscopic, sensored pads.</p>
                                                    </div>
                                                </div>
                                             </div>
                                            <div class="item">
                                                <div class="row lotsmore-model-slider-box">
                                                    <div class="col-md-6 lotsmore-model-slider-img"><img src="img/airhockey.jpeg" class="img-responsive" alt=""></div>
                                                    <div class="col-md-6 lotsmore-model-slider-text">Air hockey
                                                        <p class="lotsmore-model-slider-text-description">Air hockey is a game where 2 players play against each other on a low-friction table. Air hockey requires an air-hockey table, two player-held paddles, and a puck.</p>
                                                    </div>
                                                </div>
                                             </div>
                                        </div>

        
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                             <!--<ul class="list-inline item-details">
                                <li>Client: <strong>Start Bootstrap</strong>
                                </li>
                                <li>Date: <strong>April 2015</strong>
                                </li>
                                <li>Service: <strong>JOY RIDE</strong>
                                </li>
                            </ul> -->
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modals -->
    <!-- Example Modal 1: Corresponds with Portfolio Carousel Item 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/portfolio/carousel/bg-3.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>JoyRide Self-Balancing</h2>
                            <hr class="colored">
                            <p class="macway-description"><strong>“Sway-A-Way, like never before!”</strong><br /><br />Move swiftly by climbing on the self-balancing vehicle and enjoy the ride by just focusing on your body weight. The ride will take you places as soon as it senses your body weight. All the control is in your hands.</p>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="device-mockup macbook portrait black">
                                <div class="device">
                                    <div class="screen">
                                        <img src="img/portfolio/carousel/screen-1a.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Example Modal 2: Corresponds with Portfolio Carousel Item 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/portfolio/carousel/bg-3.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>Virtual Reality (Walk the plank)</h2>
                            <hr class="colored">
                            <p><strong>“It’s More than what you see”</strong><br /><br />Challenge yourself to walk over a plank placed over a 50 storey building. The oculus will test your fear of height giving you a real time experience.</p>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="device-mockup macbook portrait black">
                                <div class="device">
                                    <div class="screen">
                                        <img src="img/portfolio/carousel/screen-1b.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Example Modal 3: Corresponds with Portfolio Carousel Item 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/portfolio/carousel/bg-3.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>GO KARTING</h2>
                            <hr class="colored">
                            <p><strong>“ Move. Compete. Play!”</strong><br /><br />Experience the old-school karting in a completely different form. Sit at ground level and move with the ABC in your hands.</p>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="device-mockup macbook portrait black">
                                <div class="device">
                                    <div class="screen">
                                        <img src="img/portfolio/carousel/screen-1c1.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Example Modal 4: Corresponds with Portfolio Carousel Item 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/portfolio/carousel/bg-3.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>CRICKET ZONE</h2>
                            <hr class="colored">
                            <p><strong>“Cric, Cric, Cricket, Don’t throw your wicket!”</strong><br /><br />Bat against the most renowned bowlers and give your best shot. The system is advanced and gives you a real life experience with an updated software.</p>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="device-mockup macbook portrait black">
                                <div class="device">
                                    <div class="screen">
                                        <img src="img/portfolio/carousel/screen-1d.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/portfolio/carousel/bg-3.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>Karaoke</h2>
                            <hr class="colored">
                            <p><strong>“Sing-a-long and make some noise!”</strong><br /><br />Bring out the singer in you by dancing to your own sweet voice. All you need to do is pick your favourite tune, grab the mic and sing the lyrics to the best of your ability.</p>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="device-mockup macbook portrait black">
                                <div class="device">
                                    <div class="screen">
                                        <img src="img/portfolio/carousel/screen-1e.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('img/portfolio/carousel/bg-3.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2>Football Keeper</h2>
                            <hr class="colored">
                            <p><strong>“Winning isn't everything, it’s the only thing!”</strong><br /><br />Get a chance to hit a goal faster than the goalkeeper gets you. The goalkeeper is made to react as soon as you go for goal giving you a real feel of a penalty shot.</p>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <div class="device-mockup macbook portrait black">
                                <div class="device">
                                    <div class="screen">
                                        <img src="img/portfolio/carousel/screen-1f.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Grid Section -->
    <section class="gallery-style" id="gallery"  style="background-image: url('img/backgrounds/gallery.jpg')">
        <div class="container text-center wow fadeIn">
            <h2 class="gallery-headline">Gallery</h2>
            <div class="row content-row">
                <div class="col-lg-12">
                    <div class="portfolio-filter">
                        <ul id="filters" class="clearfix">

                            <li>
                                <span class="filter active" data-filter="all">All</span>
                            </li>
                            
                            <?php
        try {

            $stmt = $db->query('SELECT categoryID, category FROM gallerycategory ORDER BY categoryID');
            while($row = $stmt->fetch()){
                
                echo '<li>';
                echo '<span class="filter" data-filter=".'.str_replace(' ', '', strtolower($row['category'])).'">'.strtoupper($row['category']).'</span>';
                echo '</li>';
            }

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    ?>                  
                        <li>
                                <span class="filter active" data-filter="others">OTHERS</span>
                            </li> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="portfoliolist" class="gallery-carousel">


                            <?php
        try {

            $stmt = $db->query('SELECT galleryID, galleryFile, galleryTag, gallerycategory FROM gallery ORDER BY galleryID');
            while($row = $stmt->fetch()){
                
                echo '<div class="item">';
                echo '<div class="mix '.str_replace(' ', '', strtolower($row['gallerycategory'])).'" href="admin/production/uploads/gallery/'.$row['galleryFile'].'" title="'.$row['galleryTag'].'">';
                echo '<div class="portfolio-wrapper">';
                echo '<img src="admin/production/uploads/gallery/'.$row['galleryFile'].'" alt="'.$row['galleryTag'].'">';
                echo '<div class="caption">';
                echo '<div class="caption-text">';
                echo '<a class="text-title">'.$row['galleryTag'].'</a>';
                echo '<span class="text-category">'.$row['gallerycategory'].'</span>';
                echo '</div>';
                echo '<div class="caption-bg"></div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';


            }

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid Section -->
    <section class="findusat-style" id="findusat"  style="background-image: url('img/backgrounds/findusat.jpg')">
        <div class="container text-center wow fadeIn">
            <h2 class="findusat-headline">FIND US AT</h2>
            <div class="row content-row">
                <div class="col-lg-12">
                    <div class="findusat-filter">
                        <ul id="cityfilters" class="clearfix">
                            <li>
                                <span class="cityfilter active allcity">All</span>
                            </li>
                            <?php
                                try {

                                    $stmt = $db->query('SELECT RegionID, Region FROM findusatregion ORDER BY RegionID');
                                    while($row = $stmt->fetch()){
                                        echo '<li>';
                                        echo '<span class="cityfilter '.str_replace(' ', '', strtolower($row['Region'])).'">'.$row['Region'].'</span>';
                                        echo '<li>';
                                    }

                                } catch(PDOException $e) {
                                    echo $e->getMessage();
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row content-row">
                <div class="col-lg-12">
                    <div class="about-carousel"  id="findatusList">
                        <!-- NOTE: You can add more items to the carousel, or remove items you don't need! -->
                        <!-- Team Member 1 -->
                            <?php
                            try {

                                $stmt = $db->query('SELECT findusatID, findusatFile, findusatPlaceName, findusatPlaceAddress, findusatRegion FROM findusat ORDER BY findusatID');
                                while($row = $stmt->fetch()){
                                    
                                    echo '<div class="item all_city city_'.str_replace(' ', '', strtolower($row['findusatRegion'])).'">';
                                    echo '<div class="overlay"></div>';
                                    echo '<img src="admin/production/uploads/findusat/'.$row['findusatFile'].'" class="img-responsive img-centered img-fullwidth" alt="">';
                                    echo '<div class="finduasat-content-box">';
                                    echo '<div class="finduasat-content-title">'.$row['findusatPlaceName'].'</div>';
                                    echo '<div class="finduasat-content-description">'.$row['findusatPlaceAddress'].'</div>';
                                    echo '</div>';
                                    echo '</div>';

                                }

                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }
                        ?>
                        <!--<div class="item all_city city_pune">
                            <div class="overlay"></div>
                            <img src="img/portfolio/findusat/Wonderla_Kochi.jpg" class="img-responsive img-centered img-fullwidth" alt="">
                            <div class="finduasat-content-box">
                                <div class="finduasat-content-title">ADLABS IMAGICA</div>
                                <div class="finduasat-content-description">Mumbai - Pune Expressway, Khopoli</div>
                            </div>
                        </div>-->
                        <!-- Team Member 2 -->
                        <!--<div class="item all_city city_bengaluru">
                            <div class="overlay"></div>
                            <img src="img/portfolio/findusat/WTC.jpg" class="img-responsive img-centered img-fullwidth" alt="">
                            <div class="finduasat-content-box">
                                <div class="finduasat-content-title">ADLABS IMAGICA</div>
                                <div class="finduasat-content-description">Mumbai - Pune Expressway, Khopoli</div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- news and media Section -->
    <section id="newsandmedia" class="testimonials background-size-cover" style="background-image: url('img/backgrounds/newsandmedia.jpg')">
        <div class="container-fluid wow fadeIn">
            <h2 class="newsandmedia-headline">NEWS AND MEDIA</h2>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonials-carousel">
                        <div class="item">
                            <div class="row">
                        <?php
                            try {
                                $stmt = $db->query('SELECT postID, post_created, post_text, post_url, post_picture, post_fb FROM newsandmedia ORDER BY post_created DESC limit 3');
                                while($row = $stmt->fetch()){

                                    $date = date('d-m-Y', strtotime($row['post_created']));
                                    $post_created = str_replace('-', '.', $date);                                    
                                    echo '<div class="col-lg-4">';
                                    echo '<a href="'.$row['post_url'].'" target="_blank" style="text-decoration: none;">';
                                    if($row['post_fb'] == 'NO'){
                                       echo '<img src="admin/production/uploads/newsandmedia/'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">'; 
                                    }
                                    else{
                                        echo '<img src="'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">';
                                    }

                                    echo '<div class="news-content-box">';
                                    echo '<!--<div class="news-content-title">ADLABS IMAGICA</div>-->';
                                    echo '<div class="news-content-description">'.$row['post_text'].'</div>';
                                    echo '<div class="news-content-date">'.$post_created.'</div>';
                                    if($row['post_fb'] == 'YES')
                                    {
                                        echo '<div class="news-content-fb"><img src="img/fb.png"></div>';
                                    }
                                    echo '</div>';
                                    echo '</a>';
                                    echo '</div>';
                                }

                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }
                        ?>
                        </div>
                        </div>
                        <div class="item">
                            <div class="row">
                        <?php
                            try {
                                $stmt = $db->query('SELECT postID, post_created, post_text, post_url, post_picture, post_fb FROM newsandmedia ORDER BY post_created DESC limit 3 OFFSET 3');
                                while($row = $stmt->fetch()){

                                    $date = date('d-m-Y', strtotime($row['post_created']));
                                    $post_created = str_replace('-', '.', $date);                                    
                                    echo '<div class="col-lg-4">';
                                    echo '<a href="'.$row['post_url'].'" target="_blank" style="text-decoration: none;">';
                                    if($row['post_fb'] == 'NO'){
                                       echo '<img src="admin/production/uploads/newsandmedia/'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">'; 
                                    }
                                    else{
                                        echo '<img src="'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">';
                                    }

                                    echo '<div class="news-content-box">';
                                    echo '<!--<div class="news-content-title">ADLABS IMAGICA</div>-->';
                                    echo '<div class="news-content-description">'.$row['post_text'].'</div>';
                                    echo '<div class="news-content-date">'.$post_created.'</div>';
                                    if($row['post_fb'] == 'YES')
                                    {
                                        echo '<div class="news-content-fb"><img src="img/fb.png"></div>';
                                    }
                                    echo '</div>';
                                    echo '</a>';
                                    echo '</div>';
                                }

                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }
                        ?>
                        </div>
                        </div>
                        <div class="item">
                            <div class="row">
                        <?php
                            try {
                                $stmt = $db->query('SELECT postID, post_created, post_text, post_url, post_picture, post_fb FROM newsandmedia ORDER BY post_created DESC limit 3 OFFSET 6');
                                while($row = $stmt->fetch()){

                                    $date = date('d-m-Y', strtotime($row['post_created']));
                                    $post_created = str_replace('-', '.', $date);                                    
                                    echo '<div class="col-lg-4">';
                                    echo '<a href="'.$row['post_url'].'" target="_blank" style="text-decoration: none;">';
                                    if($row['post_fb'] == 'NO'){
                                       echo '<img src="admin/production/uploads/newsandmedia/'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">'; 
                                    }
                                    else{
                                        echo '<img src="'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">';
                                    }

                                    echo '<div class="news-content-box">';
                                    echo '<!--<div class="news-content-title">ADLABS IMAGICA</div>-->';
                                    echo '<div class="news-content-description">'.$row['post_text'].'</div>';
                                    echo '<div class="news-content-date">'.$post_created.'</div>';
                                    if($row['post_fb'] == 'YES')
                                    {
                                        echo '<div class="news-content-fb"><img src="img/fb.png"></div>';
                                    }
                                    echo '</div>';
                                    echo '</a>';
                                    echo '</div>';
                                }

                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }
                        ?>
                        </div>
                        </div>
                        <div class="item">
                            <div class="row">
                        <?php
                            try {
                                $stmt = $db->query('SELECT postID, post_created, post_text, post_url, post_picture, post_fb FROM newsandmedia ORDER BY post_created DESC limit 3 OFFSET 9');
                                while($row = $stmt->fetch()){

                                    $date = date('d-m-Y', strtotime($row['post_created']));
                                    $post_created = str_replace('-', '.', $date);                                    
                                    echo '<div class="col-lg-4">';
                                    echo '<a href="'.$row['post_url'].'" target="_blank" style="text-decoration: none;">';
                                    if($row['post_fb'] == 'NO'){
                                       echo '<img src="admin/production/uploads/newsandmedia/'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">'; 
                                    }
                                    else{
                                        echo '<img src="'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">';
                                    }

                                    echo '<div class="news-content-box">';
                                    echo '<!--<div class="news-content-title">ADLABS IMAGICA</div>-->';
                                    echo '<div class="news-content-description">'.$row['post_text'].'</div>';
                                    echo '<div class="news-content-date">'.$post_created.'</div>';
                                    if($row['post_fb'] == 'YES')
                                    {
                                        echo '<div class="news-content-fb"><img src="img/fb.png"></div>';
                                    }
                                    echo '</div>';
                                    echo '</a>';
                                    echo '</div>';
                                }

                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }
                        ?>
                        </div>
                        </div>
                        <div class="item">
                            <div class="row">
                        <?php
                            try {
                                $stmt = $db->query('SELECT postID, post_created, post_text, post_url, post_picture, post_fb FROM newsandmedia ORDER BY post_created DESC limit 3 OFFSET 12');
                                while($row = $stmt->fetch()){

                                    $date = date('d-m-Y', strtotime($row['post_created']));
                                    $post_created = str_replace('-', '.', $date);                                    
                                    echo '<div class="col-lg-4">';
                                    echo '<a href="'.$row['post_url'].'" target="_blank" style="text-decoration: none;">';
                                    if($row['post_fb'] == 'NO'){
                                       echo '<img src="admin/production/uploads/newsandmedia/'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">'; 
                                    }
                                    else{
                                        echo '<img src="'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">';
                                    }

                                    echo '<div class="news-content-box">';
                                    echo '<!--<div class="news-content-title">ADLABS IMAGICA</div>-->';
                                    echo '<div class="news-content-description">'.$row['post_text'].'</div>';
                                    echo '<div class="news-content-date">'.$post_created.'</div>';
                                    if($row['post_fb'] == 'YES')
                                    {
                                        echo '<div class="news-content-fb"><img src="img/fb.png"></div>';
                                    }
                                    echo '</div>';
                                    echo '</a>';
                                    echo '</div>';
                                }

                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }
                        ?>
                        </div>
                        </div>
                        <div class="item">
                            <div class="row">
                        <?php
                            try {
                                $stmt = $db->query('SELECT postID, post_created, post_text, post_url, post_picture, post_fb FROM newsandmedia ORDER BY post_created DESC limit 3 OFFSET 15');
                                while($row = $stmt->fetch()){

                                    $date = date('d-m-Y', strtotime($row['post_created']));
                                    $post_created = str_replace('-', '.', $date);                                    
                                    echo '<div class="col-lg-4">';
                                    echo '<a href="'.$row['post_url'].'" target="_blank" style="text-decoration: none;">';
                                    if($row['post_fb'] == 'NO'){
                                       echo '<img src="admin/production/uploads/newsandmedia/'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">'; 
                                    }
                                    else{
                                        echo '<img src="'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">';
                                    }

                                    echo '<div class="news-content-box">';
                                    echo '<!--<div class="news-content-title">ADLABS IMAGICA</div>-->';
                                    echo '<div class="news-content-description">'.$row['post_text'].'</div>';
                                    echo '<div class="news-content-date">'.$post_created.'</div>';
                                    if($row['post_fb'] == 'YES')
                                    {
                                        echo '<div class="news-content-fb"><img src="img/fb.png"></div>';
                                    }
                                    echo '</div>';
                                    echo '</a>';
                                    echo '</div>';
                                }

                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }
                        ?>
                        </div>
                        </div>  
                        <div class="item">
                            <div class="row">
                        <?php
                            try {
                                $stmt = $db->query('SELECT postID, post_created, post_text, post_url, post_picture, post_fb FROM newsandmedia ORDER BY post_created DESC limit 3 OFFSET 18');
                                while($row = $stmt->fetch()){

                                    $date = date('d-m-Y', strtotime($row['post_created']));
                                    $post_created = str_replace('-', '.', $date);                                    
                                    echo '<div class="col-lg-4">';
                                    echo '<a href="'.$row['post_url'].'" target="_blank" style="text-decoration: none;">';
                                    if($row['post_fb'] == 'NO'){
                                       echo '<img src="admin/production/uploads/newsandmedia/'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">'; 
                                    }
                                    else{
                                        echo '<img src="'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">';
                                    }

                                    echo '<div class="news-content-box">';
                                    echo '<!--<div class="news-content-title">ADLABS IMAGICA</div>-->';
                                    echo '<div class="news-content-description">'.$row['post_text'].'</div>';
                                    echo '<div class="news-content-date">'.$post_created.'</div>';
                                    if($row['post_fb'] == 'YES')
                                    {
                                        echo '<div class="news-content-fb"><img src="img/fb.png"></div>';
                                    }
                                    echo '</div>';
                                    echo '</a>';
                                    echo '</div>';
                                }

                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }
                        ?>
                        </div>
                        </div>
                        <div class="item">
                            <div class="row">
                        <?php
                            try {
                                $stmt = $db->query('SELECT postID, post_created, post_text, post_url, post_picture, post_fb FROM newsandmedia ORDER BY post_created DESC limit 3 OFFSET 21');
                                while($row = $stmt->fetch()){

                                    $date = date('d-m-Y', strtotime($row['post_created']));
                                    $post_created = str_replace('-', '.', $date);                                    
                                    echo '<div class="col-lg-4">';
                                    echo '<a href="'.$row['post_url'].'" target="_blank" style="text-decoration: none;">';
                                    if($row['post_fb'] == 'NO'){
                                       echo '<img src="admin/production/uploads/newsandmedia/'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">'; 
                                    }
                                    else{
                                        echo '<img src="'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">';
                                    }

                                    echo '<div class="news-content-box">';
                                    echo '<!--<div class="news-content-title">ADLABS IMAGICA</div>-->';
                                    echo '<div class="news-content-description">'.$row['post_text'].'</div>';
                                    echo '<div class="news-content-date">'.$post_created.'</div>';
                                    if($row['post_fb'] == 'YES')
                                    {
                                        echo '<div class="news-content-fb"><img src="img/fb.png"></div>';
                                    }
                                    echo '</div>';
                                    echo '</a>';
                                    echo '</div>';
                                }

                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }
                        ?>
                        </div>
                        </div>
                        <div class="item">
                            <div class="row">
                        <?php
                            try {
                                $stmt = $db->query('SELECT postID, post_created, post_text, post_url, post_picture, post_fb FROM newsandmedia ORDER BY post_created DESC limit 3 OFFSET 24');
                                while($row = $stmt->fetch()){

                                    $date = date('d-m-Y', strtotime($row['post_created']));
                                    $post_created = str_replace('-', '.', $date);                                    
                                    echo '<div class="col-lg-4">';
                                    echo '<a href="'.$row['post_url'].'" target="_blank" style="text-decoration: none;">';
                                    if($row['post_fb'] == 'NO'){
                                       echo '<img src="admin/production/uploads/newsandmedia/'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">'; 
                                    }
                                    else{
                                        echo '<img src="'.$row['post_picture'].'" class="img-responsive img-fullwidth" alt="">';
                                    }

                                    echo '<div class="news-content-box">';
                                    echo '<!--<div class="news-content-title">ADLABS IMAGICA</div>-->';
                                    echo '<div class="news-content-description">'.$row['post_text'].'</div>';
                                    echo '<div class="news-content-date">'.$post_created.'</div>';
                                    if($row['post_fb'] == 'YES')
                                    {
                                        echo '<div class="news-content-fb"><img src="img/fb.png"></div>';
                                    }
                                    echo '</div>';
                                    echo '</a>';
                                    echo '</div>';
                                }

                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }
                        ?>
                        </div>
                        </div>
                    </div> 
                </div> 
            </div> 
        </div> 
    </section> 
    <!-- Testomonials Section -->
    <section id="testomonials" class="testimonials bg-gray background-size-cover" style="background-image: url('img/backgrounds/findusat.jpg')">
        <div class="container wow fadeIn">
            <div class="row">
                <h2 class="testimonials-headline">TESTIMONIALS</h2>
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="testimonials-carousel">
                        <?php
                            try {

                                $stmt = $db->query('SELECT testimonialID, testimonialFile, testimonialName, testimonialTitle, testimonialDescription, testimonialRating FROM testimonial ORDER BY testimonialID');
                                while($row = $stmt->fetch()){

                                        echo '<div class="item">';
                                        echo '<div class="row">';
                                        echo '<div class="col-lg-12">';
                                        echo '<p class="lead">&ldquo;'.$row['testimonialTitle'].'&rdquo;</p>';
                                        echo '<hr class="colored">';
                                        echo '<p class="quote">'.$row['testimonialDescription'].'</p>';
                                        echo '<div class="testimonial-info">';
                                        echo '<div class="testimonial-img">';
                                        echo '<img src="admin/production/uploads/testimonial/'.$row['testimonialFile'].'" class="img-circle img-responsive" alt="">';
                                        echo '</div>';
                                        echo '<div class="testimonial-author">';
                                        echo '<span class="name">'.$row['testimonialName'].'</span>';
                                        echo '<!--<p class="small">Works at Bhansali Productions</p>-->';
                                        echo '<div class="stars">';
                                        if($row['testimonialRating'] === '0.5' )
                                        {
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star-half-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';

                                        }
                                        if($row['testimonialRating'] === '1' )
                                        {
                                            echo '<i class="fa fa-star-half-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';

                                        }
                                        if($row['testimonialRating'] === '1.5' )
                                        {
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star-half-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                            
                                        }
                                        if($row['testimonialRating'] === '2' )
                                        {
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                            
                                        }
                                        if($row['testimonialRating'] === '2.5' )
                                        {
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star-half-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                        }
                                        if($row['testimonialRating'] === '3' )
                                        {
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                        }
                                        if($row['testimonialRating'] === '3.5' )
                                        {
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star-half-o"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                            
                                        }
                                        if($row['testimonialRating'] === '4' )
                                        {
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star-o"></i>';
                                        }
                                        if($row['testimonialRating'] === '4.5' )
                                        {
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star-half-o"></i>';
                                        }
                                        if($row['testimonialRating'] === '5' )
                                        {
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            echo '<i class="fa fa-star"></i>';
                                            
                                        }

                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                    
                                }

                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section class="contact-us" id="contact">
        <div class="container wow fadeIn contact-us-main">
            <div class="row content-row">
                <div class="col-md-6">
                    <div class="contactus-info-box">
                        <h2 class="contactus-info-title">Contact Us</h2>
                         <div class="contactus-info-details-box">
                            <img src="img/yash.jpg">
                            <div class="contactus-info-box1">
                                <div class="contactus-info-box1-name">Yash Shah<span style="float: right;">Director</span></div>
                                <div class="contactus-info-box1-details"><a href="tel:+919920130534">+91-9920130534</a><br /><a href="mailto:info@macwayintl.com">info@macwayintl.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
                            </div>
                        </div>
                        <div class="contactus-info-details-box">
                            <img src="img/dinika.jpg">
                            <div class="contactus-info-box1">
                                <div class="contactus-info-box1-name">Dinika Shah Dhanwani<span style="float: right;">Director</span></div>
                                <div class="contactus-info-box1-details"><a href="tel:+919820130534">+91-9820130534</a><br /><a href="mailto:info@macwayintl.com">info@macwayintl.com&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
                            </div>
                        </div>
                        <div class="contactus-address-box">
                                <div class="contactus-address-box-title">OFFICE ADDRESS</div>
                                <div class="contactus-address-box-details">No. 1/67, Om Heera Panna Mall, Oshiwara Link Road, Andheri (W) Mumbai – 400053; Maharashtra, India</div>
                            </div>
                        <div id="map"></div>
                    </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="contactus-info-box">
                        <div class="contactus-enquiry-box-title">SEND US AN ENQUIRY</div>
                        <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls marginbottom5">
                                <input type="text" class="form-control contactus-enquiry-fixes" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls marginbottom5">
                                <input type="email" class="form-control contactus-enquiry-fixes" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls marginbottom5">
                                <input type="tel" class="form-control contactus-enquiry-fixes" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-marginbottom5">
                            <div class="form-group col-xs-12 controls marginbottom5">
                                <textarea rows="5" class="form-control contactus-enquiry-fixes" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-outline-dark enquiry-form-cta">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                    <div class="follow-us-box">
                        <div class="follow-us-box-title">FOLLOW US:</div>
                        <div class="follow-us-box-images"><a href="https://www.facebook.com/Macway-1632051467026616/" target="_blank"><img src="img/facebook.png" class="follow-us-facebook" alt=""></a><!--<a href="https://www.facebook.com/Macway-1632051467026616/" target="_blank"><img src="img/twitter.png" alt=""></a> --><a href="https://www.instagram.com/macway_intl/" target="_blank"><img src="img/insta.png" alt=""></a><!--<a href="https://www.facebook.com/Macway-1632051467026616/" target="_blank"><img src="img/google-plus.png" alt=""></a>--></div>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="copyright-box">© Copyright 2017 Macway. All rights reserved.</div>
    </section>
     <script>
      function initMap() {
        var uluru = {lat: 19.148602,  lng: 72.832503};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQJqEBNoxcSH81h5c_O0TBU6qdigs_w9U&callback=initMap">
    </script>
        <!-- Core Scripts -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Plugin Scripts -->
    <script src="vendor/pace/pace.min.js"></script>
    <script src="vendor/imgpreload/createjs-2015.11.26.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/owl-carousel/owl.carousel.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/formstone/core.js"></script>
    <script src="vendor/formstone/transition.js"></script>
    <script src="vendor/formstone/background.js"></script>
    <script src="vendor/mixitup/jquery.mixitup.js"></script>
    <script src="vendor/wow/wow.min.js"></script>

    <!-- Contact Form Scripts -->
    <script src="js/contact_me.js"></script>
    <script src="js/contact_me1.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Vitality Theme Scripts -->
    <script src="js/vitality.js"></script>

    <!-- build:remove:dist -->

   <script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-93771114-1', 'auto');
 ga('send', 'pageview');

</script>
    <script> 
$(document).ready(function(){
        $(".brand-name").animate({left: '0px'}, 1000);   
});
</script> 
    <script type="text/javascript">
        jQuery(function($) {
  function fixDiv() {
    var $cache = $('.fixed-bookaride-btn');
    if ($(window).scrollTop() > 750)
      $cache.css({
        'display': 'block'
      });
    else
      $cache.css({
        'display': 'none'
      });
  }
  $(window).scroll(fixDiv);
  fixDiv();
});
     </script>
     <script type="text/javascript">
        jQuery(function($) {
  function fixDiv1() {
    var $cache = $('.follow-us-box-fixed');
    if ($(window).scrollTop() > 6000)
      $cache.css({
        'display': 'none'
      });
    else
      $cache.css({
        'display': 'block'
      });
  }
  $(window).scroll(fixDiv1);
  fixDiv1();
});
     </script>
     <script type="text/javascript">
        $(window).load(function() {
    var header = $('header');
	var brand = $('.brand-name');
    var backgrounds = [
    <?php
        try {

            $stmt = $db->query('SELECT backgroundID, backgroundFile, backgroungTag FROM background ORDER BY backgroundID');
            while($row = $stmt->fetch()){
                echo "'url(admin/production/uploads/backgrounds/".$row['backgroundFile'].")',";

            }

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    ?>
    ];

     var content = [
    <?php
        try {

            $stmt = $db->query('SELECT backgroundID, backgroundFile, backgroungTag FROM background ORDER BY backgroundID');
            while($row = $stmt->fetch()){
                echo "'".$row['backgroungTag']."',";

            }

        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    ?>
    ];
    var current = 0;
	var current1 = 0;
    function nextBackground() {
        $(".brand-name").animate({left: '-2000px'}, 1000);
        header.css(
            'background',
        backgrounds[current = ++current % backgrounds.length]);
		brand.html(content[current1 = ++current1 % content.length]);
        setTimeout(nextBackground, 5000);
        $(".brand-name").animate({left: '0px'}, 1000); 
    }
    setTimeout(nextBackground, 5000);
    header.css('background', backgrounds[0]);
	brand.html(content[0]);
});
     </script>

    <!-- /build -->

</body>


</html>
