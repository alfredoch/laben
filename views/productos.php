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

<link href="../css/demo.css" rel="stylesheet">
<link rel="stylesheet" href="../css/component1.css">
<script src="../js/modernizr-custom.js"></script>

    <!-- Icons CSS -->
    <link rel="stylesheet" href="../css/font-awesome/font-awesome.min.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">

</head>

<body>

<?
    include 'nav.php';
?>

    <!-- Header -->
    <header id="labenProducts">
        <div class="container">
        </div>
    </header>
    <!-- Fin Header -->


    <!-- Page Content -->
    <section class="product-list lightgray">
        <div class="container">
            
            <div class="col-sm-5 col-md-3">
                <nav id="ml-menu" class="menu">
                    <button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
                    <div class="menu__wrap">
                        <ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="All">
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-1" aria-owns="submenu-1" href="#">Lacteos</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-2" aria-owns="submenu-2" href="#">Delicatessen</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-3" aria-owns="submenu-3" href="#">Jamón Serrano</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-4" aria-owns="submenu-4" href="#">Papas</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-1" aria-owns="submenu-5" href="#">Apetizers</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-2" aria-owns="submenu-6" href="#">Verduras Congeladas</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-3" aria-owns="submenu-7" href="#">Abarrotes</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-4" aria-owns="submenu-8" href="#">Aderezos</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-1" aria-owns="submenu-9" href="#">Huevo</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-2" aria-owns="submenu-10" href="#">Harinas</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-3" aria-owns="submenu-11" href="#">Pastas</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-4" aria-owns="submenu-12" href="#">Pizza Toppings</a></li>
                        </ul>
                        <!-- Submenu 1 -->
                        <ul data-menu="submenu-1" id="submenu-1" class="menu__level" tabindex="-1" role="menu" aria-label="Vegetables">
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Stalk Vegetables</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Roots &amp; Seeds</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Cabbages</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Salad Greens</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Mushrooms</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-1-1" aria-owns="submenu-1-1" href="#">Sale %</a></li>
                        </ul>
                        <!-- Submenu 1-1 -->
                        <ul data-menu="submenu-1-1" id="submenu-1-1" class="menu__level" tabindex="-1" role="menu" aria-label="Sale %">
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Fair Trade Roots</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Dried Veggies</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Our Brand</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Homemade</a></li>
                        </ul>
                        <!-- Submenu 2 -->
                        <ul data-menu="submenu-2" id="submenu-2" class="menu__level" tabindex="-1" role="menu" aria-label="Fruits">
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Citrus Fruits</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Berries</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-2-1" aria-owns="submenu-2-1" href="#">Special Selection</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Tropical Fruits</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Melons</a></li>
                        </ul>
                        <!-- Submenu 2-1 -->
                        <ul data-menu="submenu-2-1" id="submenu-2-1" class="menu__level" tabindex="-1" role="menu" aria-label="Special Selection">
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Exotic Mixes</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Wild Pick</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Vitamin Boosters</a></li>
                        </ul>
                        <!-- Submenu 3 -->
                        <ul data-menu="submenu-3" id="submenu-3" class="menu__level" tabindex="-1" role="menu" aria-label="Grains">
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Buckwheat</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Millet</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Quinoa</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Wild Rice</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Durum Wheat</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-3-1" aria-owns="submenu-3-1" href="#">Promo Packs</a></li>
                        </ul>
                        <!-- Submenu 3-1 -->
                        <ul data-menu="submenu-3-1" id="submenu-3-1" class="menu__level" tabindex="-1" role="menu" aria-label="Promo Packs">
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Starter Kit</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">The Essential 8</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Bolivian Secrets</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Flour Packs</a></li>
                        </ul>
                        <!-- Submenu 4 -->
                        <ul data-menu="submenu-4" id="submenu-4" class="menu__level" tabindex="-1" role="menu" aria-label="Mylk &amp; Drinks">
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Grain Mylks</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Seed Mylks</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Nut Mylks</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Nutri Drinks</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" data-submenu="submenu-4-1" aria-owns="submenu-4-1" href="#">Selection</a></li>
                        </ul>
                        <!-- Submenu 4-1 -->
                        <ul data-menu="submenu-4-1" id="submenu-4-1" class="menu__level" tabindex="-1" role="menu" aria-label="Selection">
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Nut Mylk Packs</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Amino Acid Heaven</a></li>
                            <li class="menu-item" role="menuitem"><a class="menu-link" href="#">Allergy Free</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-sm-7 col-md-9">
                <div class="row">
                    <div  class="hidden-xs col-md-12 ">
                        <!-- <img class="products-banner" src="../img/Artboard5.png"> -->
                        <img class="products-banner" src="../img/banner-productos.jpg">


                    </div>
                    <div class="col-md-12">
                        <div class="filter col-md-12">
                            <h4>Filtrar Producto</h4>
                            <form>
                                <div class="form-group col-md-4 no-padding-left">
                                    <label>Marca</label>
                                    <select class="form-control" id="exampleSelect1">
                                        <option></option>
                                        <option>2</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group col-md-4 no-padding-left">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-4 no-padding-left">
                                    <button type="submit" class="btn btn-primary full-width">Filtrar</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                    <div class="col-md-12 no-padding">    
                        <div class="content col-md-12 no-padding">
                            <ul class="products no-padding">
                                <li class="col-sm-6 col-md-4">
                                    <div class="product">
                                        <img src="../img/marca1.png">
                                        <h4 class="product-title">Papa ondulada</h4>
                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                        <h5 class="product-origin">Idaho</h5>
                                    </div>
                                </li>
                                <li class="col-sm-6 col-md-4">
                                    <div class="product">
                                        <img src="../img/marca1.png">
                                        <h4 class="product-title">Papa ondulada</h4>
                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                        <h5 class="product-origin">Idaho</h5>
                                    </div>
                                </li>
                                <li class="col-sm-6 col-md-4">
                                    <div class="product">
                                        <img src="../img/marca1.png">
                                        <h4 class="product-title">Papa ondulada</h4>
                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                        <h5 class="product-origin">Idaho</h5>
                                    </div>
                                </li>
                                <li class="col-sm-6 col-md-4">
                                    <div class="product">
                                        <img src="../img/marca1.png">
                                        <h4 class="product-title">Papa ondulada</h4>
                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                                        <h5 class="product-origin">Idaho</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Ajax loaded content here -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p><i class="fa fa-registered" aria-hidden="true"></i> Derechos reservados</p>
                </div>
                <div class="col-md-4">
                    <p class="">Arturo Martínez Calzado 219, Col. Martel C.P. 66367
                    <br>Parque Industrial Marfer,
                    <br>Santa Catarina, Nuevo León.</p>
                    <p>Tel. 83781259</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Fin Footer -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <script src="../js/classie.js"></script>
    <script src="../js/dummydata.js"></script>
    <script src="../js/main.js"></script>
    <script>
    (function() {
        var menuEl = document.getElementById('ml-menu'),
            mlmenu = new MLMenu(menuEl, {
                // breadcrumbsCtrl : true, // show breadcrumbs
                // initialBreadcrumb : 'all', // initial breadcrumb text
                backCtrl : false, // show back button
                // itemsDelayInterval : 60, // delay between each menu item sliding animation
                onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
            });

        // simulate grid content loading
        var gridWrapper = document.querySelector('.content');

        function loadDummyData(ev, itemName) {
            ev.preventDefault();

            gridWrapper.innerHTML = '';
            classie.add(gridWrapper, 'content--loading');
            setTimeout(function() {
                classie.remove(gridWrapper, 'content--loading');
                gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
            }, 700);
        }
    })();
    </script>

</body>

</html>
