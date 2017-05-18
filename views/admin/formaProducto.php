<?php

    //Checamos si tenemos el prod_id en el url para saber si estamos actualizando un producto nuevo o si crearemos uno uno
    if(isset($_GET['prod_id'])){

        $new_prod = false;
        $prod_id = $_GET['prod_id'];
        $page_title = "Editar Producto";

    } else {
        $new_prod = true;
        $prod_id = 0;
        $page_title = "Agregar Producto";
    }

?>


<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../../img/favicon.png">
    <title>Laben -Food Service</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/shop-homepage.css" rel="stylesheet">
    <link href="../../css/styles.css" rel="stylesheet">
    <link href="../../css/dashboard.css" rel="stylesheet">

    <!-- Icons CSS -->
    <link rel="stylesheet" href="../../css/font-awesome/font-awesome.min.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

<?
    include 'admin_nav.php';
?>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out"></i> Salir
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Basic Form</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="listaProductos.php">Lista de Productos</a>
                        </li>
                        <li class="active">
                            <strong><? echo $page_title; ?></strong>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="wrapper wrapper-content animated fadeInRight">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5><? echo $page_title; ?></h5>
                            </div>

                            <div class="ibox-content">
<?
    if($new_prod) {
        echo '<form id="newProduct" method="post" class="form-horizontal">';
    } else {
        echo '<form id="updateProduct" method="post" class="form-horizontal">';
    }
?>

                                <!-- <div class="col-md-6"> -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Nombre</label>
                                        <input type="text" id="nombre" name="nombre" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="control-label">Descripción</label>
                                        <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="control-label">Marca</label>
                                        <select id="marcas" class="form-control" name="marca">
                                            
                                        </select>
                                    </div>
                                <!-- </div> -->

                                <!-- <div class="col-md-6"> -->
                                    <div class="form-group col-md-6">
                                        <label class="control-label">Categoría</label>
                                        <select id="categoria" name="categoria" class="form-control">
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="control-label">Origen</label>
                                        <select id="lugar" class="form-control" name="lugar">
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="control-label">Precio por pieza</label>
                                        <input type="text" id="precio_pz" name="precio_pz" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="control-label">Precio por kilo</label>
                                        <input type="text" id="precio_kg" name="precio_kg" class="form-control">
                                    </div>
                                <!-- </div> -->
                                    
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <button class="btn btn-white" type="button" onclick="gotoProducts()">Cancelar</button>
                                            <button class="btn btn-primary" type="submit">Guardar</button>
                                        </div>
                                    </div>
                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>

        <div class="modal fade" id="myAlert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h3 id="alertMsj"></h3>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>


    <!-- Mainly scripts -->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function() {
            
            console.log(1);
        });
        
        window.onload = function () {

            getMarcas();
            getLugares();
            getCategorias();

<?
    if(!$new_prod) {
?>
        getProductById(<? echo $prod_id; ?>);
<?
    }
?>

        }


        function getMarcas() {
            $.ajax({
                url: 'marcas.php',
                type: 'post',
                data: {'action': 'getMarcas'},
                dataType: 'json',
                success: function(data) {
                    
                    if(data != "") {

                        $.each(data, function(i, item) {
                            if(typeof item == 'object') {
                                
                                $( '#marcas' ).append("<option value='" + item.marca_id + "'>" + item.nombre + "</option>");
                            } 
                        });
                    }
                    
                },
                error: function(xhr, desc, err) {
                    console.log(xhr);
                    console.log("Details: " + desc + "\nError:" + err);
                }
            }); // end ajax call
        }

        function getLugares() {
            $.ajax({
                url: 'lugares.php',
                type: 'post',
                data: {'action': 'getLugares'},
                dataType: 'json',
                success: function(data) {
                    
                    if(data != "") {

                        $.each(data, function(i, item) {
                            if(typeof item == 'object') {
                                
                                $( '#lugar' ).append("<option value='" + item.lugar_id + "'>" + item.nombre + "</option>");
                            } 
                        });
                    }
                    
                },
                error: function(xhr, desc, err) {
                    console.log(xhr);
                    console.log("Details: " + desc + "\nError:" + err);
                }
            }); // end ajax call
        }

        function getCategorias() {
            $.ajax({
                url: 'categorias.php',
                type: 'post',
                data: {'action': 'getCategorias'},
                dataType: 'json',
                success: function(data) {
                    
                    if(data != "") {

                        $.each(data, function(i, item) {
                            if(typeof item == 'object') {
                                
                                $( '#categoria' ).append("<option value='" + item.cat_id + "'>" + item.nombre + "</option>");
                            } 
                        });
                    }
                    
                },
                error: function(xhr, desc, err) {
                    console.log(xhr);
                    console.log("Details: " + desc + "\nError:" + err);
                }
            }); // end ajax call
        }

        function getProductById(id) {
            $.ajax({
                url: 'products.php',
                type: 'post',
                data: {'action': 'getProductById', 'prod_id': id},
                dataType: 'json',
                success: function(data) {
                    
                    if(data != "") {
                        $('#nombre').val(data[0].nombre);
                        $('#precio_pz').val(data[0].precio_pz);
                        $('#precio_kg').val(data[0].precio_kg);

                        $('#descripcion').html(data[0].descripcion);
                        
                        $('#marcas option[value="' + data[0].marca_id + '"]').prop("selected", true);
                        $('#categoria option[value="' + data[0].cat_id + '"]').prop("selected", true);
                        $('#lugar option[value="' + data[0].lugar_id + '"]').prop("selected", true);
                    }
                    
                },
                error: function(xhr, desc, err) {
                    console.log(xhr);
                    console.log("Details: " + desc + "\nError:" + err);
                }
            }); // end ajax call
        }

        $("#newProduct").bind('submit', function (e) {
            e.preventDefault();
            
            $.ajax({
                url: 'products.php',
                type: 'post',
                data: {'action': 'insertProduct', nombre: $('#nombre').val(), descripcion: $('#descripcion').val(), cat_id: $('#categoria').val(), lugar_id: $('#lugar').val(), marca_id: $('#marcas').val(), precio_pz: $('#precio_pz').val(), precio_kg: $('#precio_kg').val()},
                dataType: 'json',
                success: function(data) {
                
                    var json = jQuery.parseJSON(data);

                    $("#alertMsj").html(json.msj);
                    $("#myAlert").modal();


                },
                error: function(xhr, desc, err) {
                    console.log(xhr);
                    console.log("Details: " + desc + "\nError:" + err);
                }
            }); // end ajax call
        });

        $("#updateProduct").bind('submit', function (e) {
            e.preventDefault();

            var prod_id = <? echo $prod_id; ?>;

            $.ajax({
                url: 'products.php',
                type: 'post',
                data: {'action': 'updateProduct', 'prod_id': prod_id, nombre: $('#nombre').val(), descripcion: $('#descripcion').val(), cat_id: $('#categoria').val(), lugar_id: $('#lugar').val(), marca_id: $('#marcas').val(), precio_pz: $('#precio_pz').val(), precio_kg: $('#precio_kg').val()},
                dataType: 'json',
                success: function(data) {
                
                    var json = jQuery.parseJSON(data);

                    $("#alertMsj").html(json.msj);
                    $("#myAlert").modal();


                },
                error: function(xhr, desc, err) {
                    console.log(xhr);
                    console.log("Details: " + desc + "\nError:" + err);
                }
            }); // end ajax call

        });


        $('#myAlert').on('hidden.bs.modal', function (e) {
            gotoProducts();
        });

        function gotoProducts() {
            window.location.href='listaProductos.php';
        }


    </script>



</body>

</html>
