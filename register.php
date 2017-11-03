<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="IT"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Biblioteca</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!--<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,600,700' rel='stylesheet' type='text/css'>-->
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>
    <body data-spy="scroll" data-target="#navmenu">
        
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	
        <div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!--Home page style-->

        <?php include 'includes/header.php';?>
        <?php include 'includes/bannerhome.php';?> <!-- End of Banner Section -->



        <!-- End of Banner Section -->


        <!-- <section class="login">
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
            </div>
            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1"># </span>
                <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1">
            </div>
        </section> -->
        <div class="container">
            <div class="row">
            <section class="three-fourth">
                    
                       
                        
                        



        

                    <form action="check_login.php" id="contact-form" class="simple-form" method="post">
                        <div id="error-field">
                        </div>
                        <fieldset>
                            <i class="icon-user tooltip left" title="Utente"></i><input  title="Utente"  type="text" class="text requiredField" placeholder="Utente" id="utente" name="utente"/>
                        </fieldset>
                        <fieldset>
                            <i class="icon-envelope tooltip left" title="Password"></i><input type="password" title="Your Password" class="password requiredField" placeholder="Password" id="password" name="password"/>
                        </fieldset>
                        <div class="three-fourth">
                            <input type="submit" value="Login" class="button big grey round"/>
                        </div>
                    
                    </form>
                    </section>
                    </div>
                </div>

            <?php include 'includes/aboutus.php';?>
                        

                    </div>
                </div>
            </div>
        
        </section><!-- End of Pricing Section -->
        <?php include 'includes/review.php';?>
        

        
        <?php include 'includes/social.php';?>

        
		
		<?php include 'includes/footer.php';?>





        <!-- STRAT SCROLL TO TOP -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>


    </body>
    </html>