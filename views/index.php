<?php 

$basename = substr(strtolower(basename($_SERVER['PHP_SELF'])),0,strlen(basename($_SERVER['PHP_SELF']))-4);

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../img/favicon.png">
    <title>Laben -Food Service</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/shop-homepage.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">

    <!-- Icons CSS -->
    <link rel="stylesheet" href="../css/font-awesome/font-awesome.min.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

</head>

<body>

<?
    include 'nav.php';
?>

    <!-- Page Content -->

    <!-- Carousel -->
    <header id="labenCarousel">
        <div class="container">
            <div class="carousel-holder">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="slide-image" style="background-image: url('../img/Artboard1.png');">
                                <div class="slide-banner text-center">Insumos para Restaurantes</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image" style="background-image: url('../img/Artboard2.png');"></div>
                            <div class="slide-banner text-center">Contamos con el sistema de distribución más moderno</div>
                        </div>
                        <div class="item">
                            <div class="slide-image" style="background-image: url('../img/Artboard3.png');"></div>
                            <div class="slide-banner text-center">Quesos locales artesanales, quesos importados</div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- Fin Carousel -->

    <section class="laben-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2>¿Qué nos distingue?</h2>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 no-padding">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
                        <img class="col-img" src="../img/1-icon.png">
                        <h3 class="lead">Calidad</h3>
                        <div class="col-p">
                            <p>Sabemos la importancia que existe en nuestros clientes de entregar a tiempo y en perfecto estado</p>
                        </div> 
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
                        <img class="col-img" src="../img/2-icon.png">
                        <h3 class="lead">Servicio</h3>
                        <div class="col-p">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div> 
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
                        <img class="col-img" src="../img/3-icon.png">
                        <h3 class="lead">Mejor Precio</h3>
                        <div class="col-p">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div> 
                    </div>

                </div>

                

            </div>

        </div>
    </section>

    <hr class="hr-orange">
    <hr class="hr-red">

    <section class="laben-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2>Nuestras marcas</h2>
                    </div>
                </div>

                 <div class="hidden-xs col-sm-3 col-md-4 col-lg-4 no-padding">
                    <img class="full-width" src="../img/chef.png">
                 </div>

                <div class="col-xs-12 col-sm-9 col-md-8 col-lg-8 no-padding">
                    <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-3 col-lg-offset-0 text-center">
                        <img class="grid-img" src="../img/marca1.png">
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 text-center">
                        <img class="grid-img" src="../img/marca2.png">
                    </div>
                    <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-3 col-lg-offset-0 text-center">
                        <img class="grid-img" src="../img/marca3.png">
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 text-center">
                        <img class="grid-img" src="../img/marca4.png">
                    </div>
                    <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-3 col-lg-offset-0 text-center">
                        <img class="grid-img" src="../img/marca5.png">
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 text-center">
                        <img class="grid-img" src="../img/marca6.png">
                    </div>
                    <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-3 col-lg-offset-0 text-center">
                        <img class="grid-img" src="../img/marca7.png">
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 text-center">
                        <img class="grid-img" src="../img/marca8.png">
                    </div>
                    <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-3 col-lg-offset-0 text-center">
                        <img class="grid-img" src="../img/marca1.png">
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 text-center">
                        <img class="grid-img" src="../img/marca2.png">
                    </div>
                    <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-md-offset-0 col-lg-3 col-lg-offset-0 text-center">
                        <img class="grid-img" src="../img/marca3.png">
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 text-center">
                        <img class="grid-img" src="../img/marca4.png">
                    </div>
                </div>

                

            </div>

        </div>
    </section>

    <hr class="hr-orange">
    <hr class="hr-red">

    <section class="laben-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2>Lo más pedido</h2>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 no-padding">
                    <div class="col-md-12 margin-b-md ">
                        <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                                        <a class="item-a" href="#">
                                            <img src="../img/marca1.png" class="item-img img-responsive">
                                            <h4>Papa ondulada (Sun Crop)</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                                        <a class="item-a" href="#">
                                            <img src="../img/marca2.png" class="item-img img-responsive">
                                            <h4 class="item-name">Papa Recta (payette)</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                                        <a class="item-a" href="#">
                                            <img src="../img/marca3.png" class="item-img img-responsive">
                                            <h4 class="item-name">Queso Don Domenico</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                                        <a class="item-a" href="#">
                                            <img src="../img/marca4.png" class="item-img img-responsive">
                                            <h4 class="item-name">Queso Oaxaca Artesanal</h4>
                                        </a>
                                    </div>
                                </div>


                            </div>

                          <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                          <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <a class="goto-link" href="#">Ver Catálogo</a>
                    </div>

                </div>

                

            </div>

        </div>
    </section>

    <hr class="hr-orange">
    <hr class="hr-red">

    <section class="laben-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2>Contactanos</h2>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1 no-padding">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Siguenos</div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">@labenfoods</div>
                        <script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/00f9652e31da5e22996365063698cad0.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <form>
                            
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Correo Electrónico</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Mensaje</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Enviar Mensaje</button>
                        </form>
                    </div>
                </div>

                

            </div>

        </div>
    </section>

    <!-- Fin Page Content -->

    <!-- Footer -->
    

    <!-- Footer -->
    <footer class="footer-image">
        <div class="container">
            
        </div>
    </footer>
    <!-- Fin Footer -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Multiple Items Carousel -->
    <script src="../js/carousel.js"></script>

</body>

</html>
