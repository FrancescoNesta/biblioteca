<?php echo include_once 'includes/db_connect.php';?>
<!-- <!doctype html> -->
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
        <link rel="stylesheet" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target="#navmenu">
        
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!--Home page style-->

        
<header id="main_menu" class="header">
            <div class="main_menu_bg navbar-fixed-top">
                <div class="container-fluid">
                    <div class="row">
                <div class="nave_menu wow fadeInUp" data-wow-duration="1s">
                            <nav class="navbar navbar-default" id="navmenu">
                                <div class="container-fluid">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav navbar-left">
                                        <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-2x fa-book" aria-hidden="true"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Libri più noleggiati</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Libri più votati</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Libri non disponibili</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Ultimi arrivi</a></li>
                                        </ul>
                                    </ul>
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#"><img src="assets/images/biblio-logo.png" class="img-responsive" id="logo" alt=""/></a>
                                    </div>
                                        <ul class="nav navbar-nav navbar-right">
                                        </li>
                                            <li class="active"><a href="#home">Home</a></li>
                                            <li><a href="#review">Review</a></li>
                                            <li><a href="#social">Social</a></li>
                                            <li><a href="#footer">Support</a></li>
                                            <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-2x fa-user-circle" aria-hidden="true"></i> </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#"><i class="fa fa-book" aria-hidden="true"></i> I miei libri</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                                        
                                        </ul>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                      
                        </div>	
                    </div>

                </div>

            </div>
        </header>




        <?php include 'includes/bannerhome.php';?> <!-- End of Banner Section -->


        <form action="check_profilo.php" id="contact-form" class="simple-form" method="post" style="padding:3rem;">
            <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4" id="form">
        
                        </div>
                    </div>
            </div> 
        </form>
  
           

            <?php include 'includes/aboutus.php';?>
                        

                    </div>
                </div>
            </div>
        
        </section><!-- End of Pricing Section -->
        <?php include 'includes/review.php';?>
        <!-- <?php include 'includes/review.php';?> -->

        
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


    

        <script>


    jQuery(document).ready(function() {
        
        var url= 'http://localhost/artoo/biblioteca/modifica_JSON.php';
        var id2={};
        id2.id= localStorage.getItem("id");
        

    jQuery.ajax({
        url:url,
        type: "POST",
        data: JSON.stringify(id2),
        processData: false,
        success: function(utente){
        console.log(utente);
       


        let form=`
        
       
        <h3>Modifica profilo</h3>
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" id="nome" value=${utente.nome} placeholder="Nome">
            </div>
            <div class="form-group">
                <label>Cognome</label>
                <input type="text" class="form-control" id="cognome" value=${utente.cognome} placeholder="Cognome">
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="email" class="form-control" id="email" value=${utente.email}  placeholder="email">
            </div>
            <div class="form-group">
                <label>Telefono</label>
                <input type="text" class="form-control" id="telefono" value=${utente.telefono} placeholder="Telefono">
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="password" class="form-control" id="password" value=${utente.password} placeholder="password">
            </div>
            <div class="form-group">
                <label>Data di nascita</label>
                <input type="date" class="form-control" id="nascita" value=${utente.data_nascita} placeholder="Data di nascita">
            </div>
            <div class="form-group">
                <label >Luogo di ascita</label>
                <input type="text" class="form-control" id="luogo" value=${utente.luogo_nascita} placeholder="Luogo di nascita">
            </div>
            <div class="form-group">
                <label >Città</label>
                <input type="text" class="form-control" value=${utente.citta} id="citta" placeholder="Città">
            </div>
            <div class="form-group">
                <label >Provincia</label>
                <input type="text" class="form-control" id="provincia" value=${utente.provincia} placeholder="Provincia">
            </div>
            <div class="form-group">
                <label>Stato</label>
                <input type="text" class="form-control" id="stato" value=${utente.stato} placeholder="Stato">
            </div>
            <button type="submit" class="btn btn-default" style="background-color: #90abc5 ; color:#fff;">Modifica Profilo</button>
 `       ;
            jQuery("#form").append(form);
        },
        error: function(errore){
            console.log(error);

        }

    });
   });

       

   jQuery(document).ready(function() {
   $("#contact-form").on("submit",function(event){
       event.preventDefault();
        var url= 'http://localhost/artoo/biblioteca/check_profilo.php';
        var date={};
        date.id=localStorage.getItem("id");
        date.nome= $("#nome").val();
        date.cognome= $("#cognome").val();
        date.email= $("#email").val();
        date.telefono= $("#telefono").val();
        date.password= $("#password").val();
        date.nascita= $("#nascita").val();
        date.luogo= $("#luogo").val();
        date.citta= $("#citta").val();
        date.provincia= $("#provincia").val();
        date.stato= $("#stato").val();
   jQuery.ajax({
        url:url,
        type: "POST",
        data: JSON.stringify(date),
        processData: false,
        success: function(response){
        console.log(response);
                 
        },
        error: function(errore){
            console.log(error);

        }

    });
   });
});
</script>

<!-- <script>


    jQuery(document).ready(function() {
        
        var url= 'http://localhost/artoo/biblioteca/check_profilo.php';
        var id3={};
        id3.id= localStorage.getItem("id");

    jQuery.ajax({
        url:url,
        type: "POST",
        data: JSON.stringify(id3),
        processData: false,
        success: function(utente){
        console.log(utente);
       
        error: function(errore){
            console.log(error);

        }


   }
    });
    }):

       
</script> -->
    </body>
</html>
