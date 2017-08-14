<?php 


class Header {
    
    public $props = "";
    function __construct($title = "Naia | Núcleo Assistencial Irmão Alfredo", $description = "Nós somos uma organização sem fins lucrativo de assistência socioeducativa para crianças e adolescentes") {
        
        echo '<html class="no-js">
            <head>
                <meta charset="utf-8">
                <title>'.$title.'</title>
                <meta name="description" content="'.$description.'">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                
                <!-- Fonts -->
                <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
                <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
                <link href="http://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet" type="text/css">
        
                <!-- Bootsrap -->
                <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        
                <!-- Font awesome -->
                <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        
                <!-- Owl carousel -->
                <link rel="stylesheet" href="assets/css/owl.carousel.css">
                
                <!-- PrettyPhoto -->
                <link rel="stylesheet" href="assets/css/prettyPhoto.css">
        
                <!-- Template main Css -->
                <link rel="stylesheet" href="assets/css/style.css">
                
                <!-- Modernizr -->
                <script src="assets/js/modernizr-2.6.2.min.js"></script>
        
        
            </head>
            <!-- Google Analytics: change UA-XXXXX-X to be your site"s ID. -->
            <script>
                (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                e.src="//www.google-analytics.com/analytics.js";
                r.parentNode.insertBefore(e,r)}(window,document,"script","ga"));
                ga("create","UA-XXXXX-X");ga("send","pageview");
            </script>
            <body>
        
        
            <header class="main-header">
                
            
                <nav class="navbar navbar-static-top">
        
        
                    <div class="navbar-main">
                      
                      <div class="container">
        
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
        
                          </button>
                          
                          <a class="navbar-brand" href="index.php"><img class="img-responsive" src="assets/images/Logo_site_.png" alt=""></a>
                          
                        </div>
        
                        <div id="navbar" class="navbar-collapse collapse pull-right">
        
                          <ul class="nav navbar-nav">
        
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="sobre.php">SOBRE</a></li>
                            <li><a href="doar.php">DOAR</a></li>
                            <li><a href="projetos.php">PROJETOS</a></li>
                            <li><a href="https://www.atados.com.br/ong/naia" target="_blank">VOLUNTARIOS</a></li>
                            <li><a href="bazar.php">BAZAR</a></li>
                            <li><a href="contato.php">CONTATO</a></li>
        
                          </ul>
        
                        </div> <!-- /#navbar -->
        
                      </div> <!-- /.container -->
                      
                    </div> <!-- /.navbar-main -->
        
        
                </nav> 
        
            </header> <!-- /. main-header -->';
    }
    
}
?>
