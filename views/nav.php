<!-- Navigation -->
<nav class="navbar navbar-red navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <a class="navbar-brand-image" href="#"><img src="../img/logo.png"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <div class="nav-doc">
                <button class="btn btn-doc pull-right"><i class="fa fa-download" aria-hidden="true"></i> Documentación</button>
            </div>

            <ul class="nav navbar-nav">
                <li class="nav-effect">
                    <a <?php if ($basename == 'index') echo ' class="active"'; ?> href="index.php">Inicio</a>
                </li>
                <li class="nav-effect">
                    <a <?php if ($basename == 'nosotros') echo ' class="active"'; ?> href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-effect">
                    <a <?php if ($basename == 'productos') echo ' class="active"'; ?> href="productos.php">Productos</a>
                </li>
                <li class="nav-effect">
                    <a <?php if ($basename == 'distribucion') echo ' class="active"'; ?> href="distribucion.php">Distribución</a>
                </li>
                <li class="nav-effect">
                    <a <?php if ($basename == 'contacto') echo ' class="active"'; ?> href="contacto.php">Contacto</a>
                </li>
                <li class="nav-effect hidden">
                    <a href="#">Documentación</a>
                </li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="nav-icon" href="https://www.facebook.com/LabenFoodService/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a class="nav-icon" href="https://www.instagram.com/labenfoods/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Fin Navigation -->