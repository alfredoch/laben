
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
                <h2>Lista de Categorías</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">
                        <strong>Lista de Categorías</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <input type="text" placeholder="Search" class="input-sm form-control">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-sm btn-primary"> Go!</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-sm-offset-3">
                                    <div class="input-group pull-right">
                                        
                                            <button type="button" class="btn btn-sm btn-primary" data-toggle='modal' data-target='#newForm'>Agregar Categoría</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Categoría Padre</th>
                                        <th>Visible en Menú</th>
                                        <th width="5%"></th>
                                        <th width="5%"></th>
                                    </tr>
                                    </thead>
                                    <tbody id="catTable">
                                    </tbody>
                                </table>
                        
                            </div>

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

        <!-- Modals -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h3>¿Estas seguro de borrar esta categoría?</h3>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <form>
                            <input type="hidden" name="cat_id" id="delete_id" value=""/>
                            <button id="deleteCat" type="button" class="btn btn-primary">Aceptar</button>
                        </form>
                        
                    </div>

                </div>
            </div>
        </div>

        <div id="updateForm" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>

                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="">Editar Categoría</h3>
                                
                                <form id="updateCat" method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label">Nombre</label>
                                        <input type="text" id="update_nombre" name="nombre" class="form-control">
                                        <input type="hidden" id="update_id" name="cat_id" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Categoría</label>
                                        <select id="update_categoria" class="form-control" name="categoria">
                                            <option value="0">--</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label> <input id="update_visible" type="checkbox" value=""> Mostrar en Menú </label>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="btn btn-white" type="button" data-dismiss="modal">Cancelar</button>
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                    </div>                 
                                </form>
                            </div>               
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="newForm" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>

                        <div class="row">
                            <div class="col-md-12">

                                <h3 class="">Agregar Categoría</h3>
                                
                                <form id="newCat" method="post" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label">Nombre</label>
                                        <input type="text" id="new_nombre" name="nombre" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Categoría</label>
                                        <select id="new_categoria" class="form-control" name="categoria">
                                            <option value="0">--</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label> <input id="new_visible" type="checkbox" value=""> Mostrar en Menú </label>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="btn btn-white" type="button" data-dismiss="modal">Cancelar</button>
                                        <button class="btn btn-primary" type="submit">Guardar</button>
                                    </div>                 
                                </form>
                            </div>               
                        </div>
                    </div>
                </div>
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

        window.onload = function () {

            getCategorias();

            $.ajax({
                url: 'categorias.php',
                type: 'post',
                data: {'action': 'getCategoriasPadres'},
                dataType: 'json',
                success: function(data) {
                    
                    if(data != "") {

                        $.each(data, function(i, item) {
                            if(typeof item == 'object') {

                                if(item.padre == null)
                                    item.padre = "--";

                                var check = "";
                                if(item.visible == 1)
                                    check = "<i class='fa fa-check-square-o'></i>";
            
                                
                                $( '#catTable' ).append("<tr id='cat_" + item.cat_id + "'>\
                                    <td>" + item.hijo + "</td>\
                                    <td>" + item.padre + "</td>\
                                    <td>" + check + "</td>\
                                    <td><a data-id='" + item.cat_id + "' data-toggle='modal' data-target='#updateForm'><i class='fa fa-pencil'></i></a></td>\
                                    <td><a data-id='" + item.cat_id + "' data-toggle='modal' data-target='#myModal'><i class='fa fa-trash'></i></a></td></tr>");
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
                                
                                $( '#new_categoria' ).append("<option value='" + item.cat_id + "'>" + item.nombre + "</option>");
                                $( '#update_categoria' ).append("<option value='" + item.cat_id + "'>" + item.nombre + "</option>");
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

        $('#myModal').on('show.bs.modal', function(e) {
            $(e.currentTarget).find('#delete_id').val($(e.relatedTarget).data('id'));
        });

        $("#newCat").bind('submit', function (e) {
            e.preventDefault();

            var visible = 0;
            var check = "";
            if($('#new_visible').is(":checked")){
                visible = 1;
                check = "<i class='fa fa-check-square-o'></i>";
            }
            
            $.ajax({
                url: 'categorias.php',
                type: 'post',
                data: {'action': 'insertCategoria', nombre: $('#new_nombre').val(), cat_padre: $('#new_categoria').val(), visible: visible},
                dataType: 'json',
                success: function(data) {
                
                    var json = jQuery.parseJSON(data);

                    $('#newForm').modal('hide');
                    $("#alertMsj").html(json.msj);
                    $("#myAlert").modal();

                    if(json.status == "ok")
                    {
                        $( '#catTable' ).append("<tr id='cat_" + json.id + "'>\
                                    <td>" + $('#new_nombre').val() + "</td>\
                                    <td>" + $('#new_categoria option:selected').text() + "</td>\
                                    <td>" + check + "</td>\
                                    <td><a data-id='" + json.id + "' data-toggle='modal' data-target='#updateForm'><i class='fa fa-pencil'></i></a></td>\
                                    <td><a data-id='" + json.id + "' data-toggle='modal' data-target='#myModal'><i class='fa fa-trash'></i></a></td></tr>");

                        $('#new_nombre').val("");
                    }


                },
                error: function(xhr, desc, err) {
                    console.log(xhr);
                    console.log("Details: " + desc + "\nError:" + err);
                }
            }); // end ajax call
        });

        $('#newForm').on('show.bs.modal', function(e) {
            $('#new_nombre').val("");
            $('#new_categoria').val("0");
            $('#new_visible').attr('checked', false);
        });

        $('#updateForm').on('show.bs.modal', function(e) {
            //get data-id attribute of the clicked element
            var cat_id = $(e.relatedTarget).data('id');
            
            $.ajax({
                url: 'categorias.php',
                type: 'post',
                data: {'action': 'getCategoriaById', 'cat_id': cat_id},
                dataType: 'json',
                success: function(data) {
                    
                    if(data != "") {
                        $('#update_nombre').val(data[0].nombre);
                        $('#update_id').val(cat_id);
                        $('#update_categoria option[value="' + data[0].cat_padre + '"]').prop("selected", true);
                        
                        if(data[0].visible == 1)
                            $('#update_visible').attr('checked', true);
                        else $('#update_visible').attr('checked', false);
                    }
                    
                },
                error: function(xhr, desc, err) {
                    console.log(xhr);
                    console.log("Details: " + desc + "\nError:" + err);
                }
            }); // end ajax call
            
        });

        $("#updateCat").bind('submit', function (e) {
            e.preventDefault();

            var visible = 0;
            var check = "";
            if($('#update_visible').is(":checked")){
                visible = 1;
                check = "<i class='fa fa-check-square-o'></i>";
            }

            $.ajax({
                url: 'categorias.php',
                type: 'post',
                data: {'action': 'updateCategoria', 'cat_id': $('#update_id').val(), nombre: $('#update_nombre').val(), cat_padre: $('#update_categoria').val(), visible: visible},
                dataType: 'json',
                success: function(data) {
                
                    var json = jQuery.parseJSON(data);

                    $('#updateForm').modal('hide');
                    $("#alertMsj").html(json.msj);
                    $("#myAlert").modal();

                    if(json.status == "ok")
                    {
                        var id = "cat_" + $('#update_id').val();
                        $( '#' + id + ' td:first-child' ).html($('#update_nombre').val());
                        $( '#' + id + ' td:nth-child(2)' ).html($('#update_categoria option:selected').text());
                        $( '#' + id + ' td:nth-child(3)' ).html(check);
                    }


                },
                error: function(xhr, desc, err) {
                    console.log(xhr);
                    console.log("Details: " + desc + "\nError:" + err);
                }
            }); // end ajax call

        });

        $(function(){
            $('#deleteCat').on('click', function(e){
                e.preventDefault();
                
                $.ajax({
                    url: 'categorias.php',
                    type: 'post',
                    data: {'action': 'deleteCategoria', 'cat_id': $('#delete_id').val()},
                    dataType: 'json',
                    success: function(data) {
                    
                        var json = jQuery.parseJSON(data);

                        $('#myModal').modal('hide');
                        $("#alertMsj").html(json.msj);
                        $("#myAlert").modal();

                        if(json.status == "ok")
                        {
                            var id = "cat_" + $('#delete_id').val();
                            $( '#' + id ).remove();
                        }

                    },
                    error: function(xhr, desc, err) {
                        console.log(xhr);
                        console.log("Details: " + desc + "\nError:" + err);
                    }
                }); // end ajax call

            });
        });

    </script>

</body>

</html>


