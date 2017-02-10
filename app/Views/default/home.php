<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cook and mix</title>
    <!-- Bootstrap Core CSS -->
    <link href=<?= $this->assetUrl('css/bootstrap/bootstrap.min.css')?> rel="stylesheet" type="text/css">
    <!-- Retina.js - Load first for faster HQ mobile images. -->
    <script src=<?= $this->assetUrl('js/plugins/retina/retina.min.js')?>></script>
    <!-- Font Awesome -->
    <link href=<?= $this->assetUrl('font-awesome/css/font-awesome.min.css')?> rel="stylesheet" type="text/css">
    <!-- Default Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>
    <!-- Modern Style Fonts (Include these is you are using body.modern!) -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
    <!-- Vintage Style Fonts (Include these if you are using body.vintage!) -->
    <link href='http://fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href=<?= $this->assetUrl('css/plugins/owl-carousel/owl.carousel.css')?> rel="stylesheet" type="text/css">
    <link href=<?= $this->assetUrl('css/plugins/owl-carousel/owl.theme.css')?> rel="stylesheet" type="text/css">
    <link href=<?= $this->assetUrl('css/plugins/owl-carousel/owl.transitions.css')?> rel="stylesheet" type="text/css">
    <link href=<?= $this->assetUrl('css/plugins/magnific-popup.css')?> rel="stylesheet" type="text/css">
    <link href=<?= $this->assetUrl('css/plugins/background.css')?> rel="stylesheet" type="text/css">
    <link href=<?= $this->assetUrl('css/plugins/animate.css')?> rel="stylesheet" type="text/css">
    
    <link href=<?= $this->assetUrl('css/vitality-turquoise.css')?> rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href=<?= $this->assetUrl('js/plugins/jquery-modal-master/jquery.modal.css')?> type="text/css" media="screen" />
    

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<!-- Alternate Body Classes: .modern and .vintage -->

<body id="page-top">
    <!-- Navigation -->
    <!-- Note: navbar-default and navbar-inverse are both supported with this theme. -->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-expanded">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src=<?= $this->assetUrl('img/creative/logo.png')?> class="img-responsive" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Profil</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Favoris</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#process">Deconnection</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <header style="background-image: url('assets/img/creative/bg-header.jpg');">
        <div class="intro-content">
            <div class="brand-name">COOK&MIX</div>
            <hr class="colored">
            <div class="brand-name-subtext">Des recettes & des endroits pour les déguster.</div>
    
        </div>
       
        
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Subscribe our Newsletter</h4>
                    </div>
                    <div class="modal-body">
                        <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address">
                            </div>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        </div>   

       
    </header>
    
    
    <section>
        <div class="container text-center wow fadeIn">
            <div class="row content-row">
                <div class="col-lg-12">
                    <div class="portfolio-filter">
                        <ul id="filters" class="clearfix">
                            <li>
                                <span class="filter active" data-filter="identity graphic logo web">Recette</span>
                            </li>
                            <li>
                                <span class="filter" data-filter="identity">Restaurants</span>
                            </li>
                            <li>
                                <span class="filter" data-filter="graphic">Testez</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="portfoliolist">
                        <div class="portfolio web" data-cat="web" href="#portfolioModal2" data-toggle="modal">
                            <div class="portfolio-wrapper">
                               <!--Ici j'insere mes requetes et je pointe vers le dossier miniatures pour afficher les qui correspondent au résultat de cafés qui s'affiche. -->
                                <img src=<?= $this->assetUrl('img/miniatures/fragment_min.jpg')?> alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                       <!-- Ici j'insere mes requetes pour afficher le nom et l'adresse du café. -->
                                        <a class="text-title">FRAGMENT CAFE</a>
                                        <span class="text-category">2 rue Perrée</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal3" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src=<?= $this->assetUrl('img/portfolio/grid/graphic/11.jpg')?> alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Excellence</a>
                                        <span class="text-category">Poster Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal4" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src=<?= $this->assetUrl('img/portfolio/grid/web/2.jpg')?> alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">YouTV</a>
                                        <span class="text-category">Web Development</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal2" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src=<?= $this->assetUrl('img/portfolio/grid/web/3.jpg')?> alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Fooder</a>
                                        <span class="text-category">Mobile App</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio graphic" data-cat="graphic" href="#portfolioModal3" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src=<?= $this->assetUrl('img/portfolio/grid/graphic/3.jpg')?> alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">Mountain Tea</a>
                                        <span class="text-category">Graphic Design</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio web" data-cat="web" href="#portfolioModal2" data-toggle="modal">
                            <div class="portfolio-wrapper">
                                <img src=<?= $this->assetUrl('img/portfolio/grid/web/4.jpg')?> alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <a class="text-title">OneRepublic</a>
                                        <span class="text-category">Web Development</span>
                                    </div>
                                    <div class="caption-bg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer" style="background-image: url('assets/img/bg-footer.jpg')">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-phone"></i> Téléphone</h4>
                    <p>+33 1 42 01 25 54</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-map-marker"></i> Adresse</h4>
                    <p>8 rue Saint Vincent de Paul
                        <br>Paris, 75014.</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-envelope"></i> Email</h4>
                    <p><a href="mailto:mail@example.com">mail@cookandmix.com</a>
                    </p>
                </div>
            </div>
            <div class="row social">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter fa-fw fa-2x"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row copyright">
                <div class="col-lg-12">
                    <p class="small">&copy; 2017 COOKANDMIX TEAM</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Example Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/creative/portfolio/bg-2.jpg')">
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
                        <div class="col-lg-8 col-lg-offset-2">
                           <!--Ici j'insere ma requete pour afficher le nom du café ainsi que la description du cafe. -->
                            <h2>Le Jules</h2>
                            <hr class="colored">
                            <p>Situé en plein cœur du 3ème arrondissement parisien, au 2 rue Perrée, Le Jules est le bar restaurant du Carreau du Temple. Avec sa décoration signée Laura Gonzales, le restaurant Le Jules est un lieu contemporain avec une ambiance chaleureuse et idéale pour grignoter une tartine ou siroter un cocktail.

Le restaurant Le Jules est ouvert tous les jours du lundi au dimanche, de 8h30 à minuit, en service continu.</p>
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li><i class="fa fa-phone"></i>
                                    <strong><a href="+33157408440">0157408440</a>
                                    </strong>
                                </li>
                                <li><i class="fa fa-map-marker"></i>
                                    <strong><a href=" ">2 rue Perrée, 75002, Paris</a>
                                    </strong>
                                </li>
                                <li>Site:
                                    <strong><a href="">Visiter</a>
                                    </strong>
                                </li>
                                
                                <li>Instagram:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Example Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/creative/portfolio/bg-3.jpg')">
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
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src=<?= $this->assetUrl('img/client-logos/logo-1.png')?> class="img-responsive img-centered" alt="">
                            <h2>Project Title</h2>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
                        </div>
                        <div class="col-lg-12">
                            <img src="assets/img/portfolio/mobile-screens.png" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2015</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Example Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('assets/img/creative/portfolio/bg-4.jpg')">
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
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src="assets/img/client-logos/logo-2.png" class="img-responsive img-centered" alt="">
                            <h2>Project Title</h2>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
                        </div>
                        <div class="col-lg-12">
                            <img src="assets/img/portfolio/tablet-screens.png" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2015</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Core Scripts -->
    <script src=<?= $this->assetUrl('js/jquery.js')?>></script>
    <script src=<?= $this->assetUrl('js/bootstrap/bootstrap.min.js')?>></script>
    <!-- Plugin Scripts -->
    <script src=<?= $this->assetUrl('js/plugins/jquery.easing.min.js')?>></script>
    <script src=<?= $this->assetUrl('js/plugins/classie.js')?>></script>
    <script src=<?= $this->assetUrl('js/plugins/cbpAnimatedHeader.js')?>></script>
    <script src=<?= $this->assetUrl('js/plugins/owl-carousel/owl.carousel.js')?>></script>
    <script src=<?= $this->assetUrl('js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js')?>></script>
    <script src=<?= $this->assetUrl('js/plugins/background/core.js')?>></script>
    <script src=<?= $this->assetUrl('js/plugins/background/transition.js')?>></script>
    <script src=<?= $this->assetUrl('js/plugins/background/background.js')?>></script>
    <script src=<?= $this->assetUrl('js/plugins/jquery.mixitup.js')?>></script>
    <script src=<?= $this->assetUrl('js/plugins/wow/wow.min.js')?>></script>
    <script src=<?= $this->assetUrl('js/contact_me.js')?>></script>
    <script src=<?= $this->assetUrl('js/plugins/jqBootstrapValidation.js')?>></script>
    <!-- Vitality Theme Scripts -->
    <script src=<?= $this->assetUrl('js/vitality.js')?>></script>
    <!--Pop up newsletter-->
    <script language="javascript" src=<?= $this->assetUrl('http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js')?> type="text/javascript"></script>
        
    

   
    <script type="text/javascript">
    $(document).ready(function(){
            var theCookie = document.cookie.split(';');
            if (theCookie.indexOf("visited=true") == -1) {
                    var fifteenDays = 1000*60*60*24*15;
                    var expires = new Date((new Date()).valueOf() + fifteenDays);
                    document.cookie = "visited=true;expires=" + expires.toUTCString();
                    $("#myModal").modal('show');
                }
    });
    </script>
 

   

        
</body>

</html>
