<?php
session_start();
if(!$_SESSION["username"]){
header("location: log.php");
}
?>
<!DOCTYPE html> 
<html lang="en" style="height:100%;">
    <head> 
        <meta charset="utf-8"> 
        <title>homepage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="keywords" content="pinegrow, blocks, bootstrap" />
        <meta name="description" content="My new website" />
        <link rel="shortcut icon" href="ico/favicon.png"> 
        <!-- Core CSS -->         
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> 
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet">
        <!-- Style Library -->         
        <link href="css/style-library-1.css" rel="stylesheet">
        <link href="css/plugins.css" rel="stylesheet">
        <link href="css/blocks.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->         
        <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->         
    </head>     
    <body data-spy="scroll" data-target="nav">
        <header id="header-1" class="soft-scroll header-1">
            <!-- Navbar -->
            <nav class="main-nav navbar-fixed-top headroom headroom--pinned">
                <div class="container">
                    <!-- Brand and toggle -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#">
                            <img src="images/brand/cse4.jpg" class="brand-img img-responsive">
                        </a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active nav-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="l1.php">Data</a>
                            </li>
                            <li class="nav-item">
                                <a href="logout.php">logout</a>
                            </li>
                        </ul>
                        <!--//nav-->
                    </div>
                    <!--// End Navigation -->
                </div>
                <!--// End Container -->
            </nav>
            <!--// End Navbar -->
        </header>
        <section id="content-1-1" class="content-block content-0-1 min-height-600px bg-white">
            <div class="container text-center">
                <h1>Project Trinity</h1>
                <div class="col-sm-8 col-sm-offset-2">
                    <p class="lead">server data from the server to the frontend</p>
                </div>
            </div>
        </section>
	<script>
	onkeydown = function(e){
  if(e.ctrlKey && e.keyCode == 'C'.charCodeAt(0)){
    e.preventDefault();  
  }
  else if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
    e.preventDefault();  
  }
    else if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
    e.preventDefault(); 
}
  }
document.oncontextmenu = document.body.oncontextmenu = function() {return false;}
    document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
           //alert('No F-12');
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
</script>
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>         
        <script type="text/javascript" src="js/bootstrap.min.js"></script>         
        <script type="text/javascript" src="js/plugins.js"></script>
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="js/bskit-scripts.js"></script>         
    </body>     
</html>
