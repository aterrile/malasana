<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Malasaña</title>
    
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    
    <!-- Owl Carousel -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    
    <!-- Theme CSS -->
    <link href="css/main.css?ver=1.<?php echo uniqid() ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- FancyBox -->
    <link rel="stylesheet" href="fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />    
    
</head>

<body id="page-top">


    <header>
        <video id="myVideo" preload="auto" width="100%" style="width: 100%;"  controls="false" autoplay="true" loop="true" muted="true">
            <source src="video/intro.mp4" type="video/mp4" />
            <p>Your browser does not support the video tag.</p>
        </video>              
        <div class="bgcover cover"></div>
        <div class="logo"></div>
        <ul class="social">
            <li>
                <a href="http://www.facebook.com/malasanacl" target="_blank"><i class="fa fa-facebook-f"></i></a>
            </li>                        
            <li>
                <a href="https://www.instagram.com/malasanacl/" target="_blank"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
                <a href="http://twitter.com/malasanacl" target="_blank"><i class="fa fa-twitter"></i></a>
            </li>
        </ul>
    </header>
    
    <nav id="mainNav" class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Malasaña</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a class="page-scroll" href="#somos">somos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#descarga">Revista</a>
                    </li>                    
                    <li>
                        <a class="page-scroll" href="#contacto">contacto</a>
                    </li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right social">
                    <li>
                        <a href="http://www.facebook.com/malasanacl" target="_blank"><i class="fa fa-facebook-f"></i></a>
                    </li>                                        
                    <li>
                        <a href="https://www.instagram.com/malasanacl/" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="http://twitter.com/malasanacl" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
                        
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>        

    <section id="revista">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-lg-8 col-md-10 col-sm-12">
                    <div id="owl-demo" class="owl-carousel">                                            
                        <?php for( $i=1; $i<=51; $i++ ){ ?>                        
                        <div class="item">
                            <img src="img/catalogo/<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.jpg" />
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="somos">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6 col-sm-offset-1 col-sm-10 col-xs-offset-0 col-xs-12"> 
                    <img src="img/m.png" width="50" height="52" class="m" />                       
                    <p>
                    <strong>Malasaña</strong> es sinónimo del nuevo hombre, heterofriendly, uno libre que no le tiene miedo a nada y
                    que es capaz de enfrentarse a todo y todos por ser quien realmente es. El Malasañero disfruta con
                    investigación, moda, contingencia, editorial, tendencias, arte, además de lo que sucede en el
                    mundo. También está convencido que en la diversidad radica la riqueza del ser humano. Malasaña
                    es una experiencia inolvidable, Malasaña existe... vívela.
                    </p>           
                </div>                
            </div>
        </div>
    </section>
    
    <section id="descarga">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-6 col-sm-offset-0 col-md-offset-1 col-lg-offset-2">
                     <div class="img_descarga">                        
                        <a href="img/portada.jpg" class="fancybox">
                            <img src="img/portada.jpg" width="291" height="475" />
                        </a>                        
                     </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="texto_descarga">
                        <h3> Edición 01 </h3>
                        <p>
                        Francisco Pérez-Bannen acaba de ser padre y tiene opinión para todo, es el Malasañero esta oportunidad. Reportajes sobre Matrimonio Igualitario y Ley Identidad de Género. Margarita Hantke sobre Trump y Alberto Mayol con la crisis del Ministerio de Justicia 2016. Viajes de Anita Córdova y comentario de "Chascas" Valenzuela. Editoriales de Pavel Denisenko en NY, y Ernesto Avilés, Chile. Además moda, personajes, tendencias y más en esta edición de Malasaña.
                        </p> 
                        
                        <p>
                            <a href="pdf/MALASANA_Nro1.pdf" target="_blank" class="btn">                                
                                Descargala
                            </a>
                        </p>
                        <p>
                        <strong>O DISFRUTA LA EDICIÓN 01 EN LÍNEA <a href="https://issuu.com/malasanacl/docs/malasan__a_01._issuu?e=27813142/43294745" target="_blank">AQUÍ</a> </strong>
                        </p>                    
                    </div>
                </div>                
            </div>
        </div>
    </section>
    
    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title">contacto</h2>     
                    <p class="intro">
                        Tú eres lo más importante para Malasaña, y es por eso queremos saber de ti y tu parecer. Escríbenos y seamos compañeros de viaje en esta travesía, una que sin duda nos llevará muy lejos juntos.
                    </p>
                    <form id="frmContacto">
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" name="nombre" id="nombre" class="txt" />
                        </div>
                        <div class="form-group">
                            <label>E-mail:</label>
                            <input type="text" name="email" id="email" class="txt" />
                        </div>
                        <div class="form-group">
                            <label>Asunto:</label>
                            <input type="text" name="asunto" id="asunto" class="txt" />
                        </div>
                        <div class="form-group">
                            <label>Mensaje:</label>
                            <textarea name="mensaje" id="mensaje" class="txt"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="button" class="btn" value="enviar" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>                        

    <section id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">      
                <h2> Suscríbete a Nuestro Boletín de Noticias </h2>
                <form id="frmNewsletter">
                    <div class="form-group">                        
                        <input type="text" name="email_news" id="email_news" class="txt" placeholder="Ingresa tu correo electrónico" />
                    </div>
                    <div class="form-group">
                        <input type="button" class="btn" value="enviar" />
                    </div>
                </form>          
                </div>
            </div>
        </div>
    </section>
        

    <footer>
        <div class="container">
            <img src="img/logo_malasana_footer.png" width="61" height="61" />
            <p> Copyright © 2017 Malasaña  </p>
            <p> <a href="http://www.conoceremo.cl" target="_blank">remo / diseño y dirección creativa</a> </p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    
    <!-- OWL Carousel -->
    <script src="js/owl.carousel.js"></script>
    
    <!-- Fancybox -->
    <script type="text/javascript" src="fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>
    
    <!-- Theme JavaScript -->
    <script src="js/main.js"></script>
    
    <script>
    $(document).ready(function(){
        $(".fancybox").fancybox();
    })
    </script>
    
</body>

</html>
