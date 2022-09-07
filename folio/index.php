<?php

$host = "localhost";
$user = "root";
$pw = "";
$db ="folio";

$msg = $css_class = "";
$conn = mysqli_connect($host , $user , $pw, $db);

if($conn == false){
    echo "wahala connection"; 
}



    if(isset($_POST["submit"])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];




        $sql = "INSERT INTO `client`(`id`, `name`, `email`, `subject`, `message`) VALUES ('','$name','$email','$subject','$message')";
        $result = mysqli_query($conn, $sql);

        $result = mysqli_query($conn, $sql);

        if($result === true){
            $msg = "Thank you $name , I will reply as soon as possible.";
            $css_class = "alert_danger";
        }else{
            $msg = "Unable to sent message at the moment, Please use social media to reach me";
            $css_class = "alert_danger";
        }

    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Truth Irechukwu Portfolio</title>

    <meta name="description" content="Truth portforlio site">
    <meta name="author" content="Truth Irechukwu">
    <meta name="keywords" content="Truth Irechukwu">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Varela" rel="stylesheet">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="icon" sizes="16x16" href="assets/img/favicon.ico">
    <link rel="manifest" href="assets/img/manifest.json">
    <link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Font Awesome core CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

    <!-- Hero Section, Background Image change in css -->
    <div id="top" class="hero background-overlay">
    
        <!-- Name & Description -->
        <div class="hero-content">
            <h1>I am TRUTH Irechukwu</h1>
            <p class="hero-job"><span>I'M A BACKEND DEVELOPER(PHP)</span></p>
            <p class="hero-job-desc">I STAND ON A SWEET SPOT WHERE PROGRAMMING &amp; MANAGEMENT INTERSECTS. </p>

        </div><!-- /.hero-content -->

        <div class="hero-arrow page-scroll home-arrow-down">
            <a class="" href="#works"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
        </div><!-- /.hero-arrow -->

    </div><!-- /.hero -->
    <!-- End Hero -->

    <!-- Header -->
    <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation" data-spy="affix">
            <div class="container">
                <div class="navbar-header page-scroll">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#portfolio-perfect-collapse" aria-expanded="false" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <!-- Name -->
                    <div class="page-scroll site-logo">
                        <a href="#top">Truth Irechukwu</a>
                    </div>

                </div><!-- /.navbar-header -->

                <div class="main-menu collapse navbar-collapse" id="portfolio-perfect-collapse">

                    <!-- Navigation -->
                    <ul class="nav navbar-nav navbar-right">

                        <li class="page-scroll"><a href="#top">Home</a></li>
                        <li class="page-scroll"><a href="#works">Works</a></li>
                        <li class="page-scroll"><a href="#contact">Contact</a></li>
                        
                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->
            </div>
        </nav><!-- /.primary-navigation -->
    </header><!-- /#header -->
    <!-- End Header -->

    <!-- Main content -->
    <main id="main" class="site-main">

           <!-- Portfolio/Works section --> 
           <section class="site-section section-works" id="works">
            <div class="container">
                <h2>RECENT WORKS</h2>
                <p class="section-subtitle"><span>Explore my works</span></p>

                <div class="portfolio">
                    <ul class="portfolio-sorting list-inline">
                        <li><a href="#" class="active text-center" data-group="all">all</a></li>

                    </ul><!-- /.portfolio-sorting  -->

                    <div id="grid">
                        
                        <!-- Portfolio item --> 
                        <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
                            <div class="portfolio-item">
                                <div class="portfolio-item-thumb">
                                    <img src="assets/img/project1 (1).png" alt="" class="img-res">
                                    <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem1">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div><!-- /.portfolio-item-thumb  -->
                                <div class="portfolio-info">
                                    <h3>Web App</h3>
                                    <p>Web development</p>
                                </div><!-- /.portfolio-info  -->
                            </div>
                        </div><!-- /.col-md-3  -->
                     
                    </div><!-- /#grid -->
                </div>
            </div>
        </section><!-- /.section-works -->
        <!-- End Works section --> 

        <!-- Quote section -->
		<section class="section-background section-quote background-overlay text-center">
			<div class="container">
				<p>I build  <span>web applications</span>  with <span> PHP</span> &amp; coupled with my <span>product management  </span>skills, I make products come to life.</p>
			</div>
		</section><!-- /.section-quote -->
        <!-- End Quote section -->

        <!-- Contacts section --> 
        <section class="site-section section-contact" id="contact">
            <div class="container">
                <h2>CONTACT TRUTH</h2>
                <p class="section-subtitle"><span>Here i am</span></p>
                <h4 class="alert  <?php echo $css_class;?>"> <?php echo $msg; ?>
                </h4>
                <div class="row">
                    <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="col-md-4 ">
                            <input class="form-control" type="text" placeholder="Name" name="name" required>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="text" placeholder="Subject" name="subject" required>
                        </div>
                        <div class="col-sm-12">
                            <textarea class="form-control" placeholder="Your Message" name="message"  required></textarea>
                        </div>

                        <div class="col-sm-12">
                            <button class="btn btn-inverted" name="submit">Send Message</button>
                        </div>  
                    </form>
                </div>
            </div>
        </section><!-- /.section-contact-->
        <!-- End Contacts section --> 
        
        <!-- Social Networks section --> 
        <section class="section-networks blue-bg">
            <div class="container">
                <a href="#" class="rectangle">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="#" class="rectangle">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#" class="rectangle">
                    <i class="fa fa-github"></i>
                </a>
                <a href="#" class="rectangle">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="#" class="rectangle">
                    <i class="fa fa-telegram"></i>
                </a>
            </div>
        </section><!-- /.section-networks-->
        <!-- End Social Networks section --> 

    </main><!-- /#main -->
    <!-- End Main content -->

    <!-- Footer --> 
    <footer id="colophon" class="site-footer">

        <div class="container-fluid">

            <ul class="list-unstyled list-inline">
                <li class="page-scroll"><a href="#top">Home</a></li>
                <li class="page-scroll"><a href="#works">Works</a></li>
                <li class="page-scroll"><a href="#contact">Contact</a></li>
            </ul>

            <div class="page-scroll">
                <a href="#top" class="rectangle">
                    <i class="fa fa-angle-double-up"></i>
                </a>
            </div>

        </div>

        <div class="container text-center">
            <p class="copyright">&copy; <a href="" target="_blank">Truthirechukwu</a> - 2022</p>
        </div>

    </footer><!-- /#footer -->
    <!-- End Footer --> 

    <!-- Modals -->
    <div id="portfolioItem1" class="modal fade fade-scale" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="rectangle" data-dismiss="modal"><i class="fa fa-times"></i></a>
                    <img class="img-res" src="assets/img/pro1.png" alt="">
                </div>
                <div class="modal-body">
                    <h4 class="modal-title">AirdropSource.com</h4>
                    <p>AirdropSource is a web app that you can list crypto airdrop. Its a site you can list airdrop without going to ur  code.</p>
                </div>
                <div class="modal-footer">
                    <a href="https://www.irehh.github.io" class="btn">Visit Page</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery core js | Do not Delete -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap core js | Do not Delete -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Easing JS -->
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
  
</body>
</html>