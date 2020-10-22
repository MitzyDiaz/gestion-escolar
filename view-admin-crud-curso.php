<?php
session_start();
if (isset($_SESSION['usuario'])) {
    if($_SESSION['usuario']['tipo_usuario']!='1'){
        header('Location:view-profesor-curso.php');
    }
}else{
    header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" href="images/ico/favicon.ico" sizes="32x32" />
    <!--Fonts and icons-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="assets/css/black-dashboard.min.css" rel="stylesheet" />
    <!--Plugin Data Tables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/color.css">

    <title>Control Escolar - Administrador</title>
    <style>
    label.error {
        margin-bottom: 15px !important;
        color: bisque !important;
    }
    table.dataTable tbody tr {
    background-color: transparent;
    }
    .dataTables_length{
        display: none;
    }
    .dataTables_wrapper .dataTables_filter {
    width: 100%;
    }
    .dataTables_wrapper .dataTables_filter label {
    float: left !important;
    text-align: left !important;
    width: 100%;
    }
    .dataTables_wrapper .dataTables_filter input {
    height: 2rem;
    width: 100%;
    font-size: 10px;
    }
    .dataTables_wrapper .dataTables_info{
    color: #2aa7df;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    color: white !important;
    border: 1px solid #e2d3d3;
    background: transparent;
    }
    .dataTables_scroll .dataTables_scrollBody::-webkit-scrollbar {
    width: 10px;
    }
    .dataTables_scroll .dataTables_scrollBody::-webkit-scrollbar-thumb {
    background: #2aa7df; 
    border-radius: 10px;
    transition: 0.3s;
    }
    .dataTables_scroll .dataTables_scrollBody::-webkit-scrollbar-thumb:hover {
    opacity: 1
    }
    </style>
</head>
<body>

<div class="wrapper">
<div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <span class="simple-text logo-mini">
                        Bienvenido Admin: <b><?php echo $_SESSION['usuario']['usuario']?> </b>
                    </span>
                </div>
                <ul class="nav">
                    <li>
                        <a href="dash.php">
                            <i class="fa fa-home"></i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="view-admin-crud-curso.php">
                            <i class="fa fa-list"></i>
                            <p>Curso</p>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="fa fa-sign-out-alt"></i>
                            <p>Salir</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <span class="navbar-brand" style="margin-top:3%">Control Escolar</span>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!--CONTENEDOR -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header">
                                        <h3 class="title" style="margin-bottom: 10px !important;">CRUD Curso
                                        </h3>
                                        <hr style="border-top: 1px solid #2aa7df;">
                                </div>
                                <!--List Table-->
                                <div class='container'>
                                    <!-- INICIO MODAL BOTON AGREGAR-->
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalNew">
                                        <i class="fa fa-user-plus">  Nuevo</i>
                                    </button>
                                    <!--FIN MODAL BOTON AGREGAR-->
                                    <table id="tab_proyectos" width="100%" class='table'>
                                        <thead>
                                            <tr>
                                                <th scope='col' class='titulo'>ID Curso</th>
                                                <th scope='col' class='titulo'>Nombre Curso</th>
                                                <th scope='col' class='titulo'>ID Profesor</th>
                                                <th scope='col' class='titulo'>ID Materia</th>
                                                <th scope='col' class='titulo'>Acciones</th>
                                            </tr>
                                        </thead>
                                        
                                        <tr>
                                            <td>1</td>
                                            <td>2CV30</td>
                                            <td>2</td>
                                            <td>4</td>
                                            <td>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <a href="#" id="link" class="btn btn-primary btn-sm"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2CV30</td>
                                            <td>2</td>
                                            <td>4</td>
                                            <td>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <a href="#" id="link" class="btn btn-primary btn-sm"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2CV30</td>
                                            <td>2</td>
                                            <td>4</td>
                                            <td>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <a href="#" id="link" class="btn btn-primary btn-sm"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2CV30</td>
                                            <td>2</td>
                                            <td>4</td>
                                            <td>
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalEdit">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <a href="#" id="link" class="btn btn-primary btn-sm"><i class="fa fa-trash-alt"></i></a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!-- End List Table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>




  <!-- Modal Editar -->
  <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-m">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Editar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam diam, ultricies vel enim eu, dictum interdum tellus. Vivamus et nunc eget leo sagittis euismod. Praesent volutpat ac mi at tristique. 
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="idalumno">Id Alumno</label>
                  <input type="number" class="form-control" id="disabledInput" value="1" disabled>
                </div>
                <div class="form-group col-md-6">
                  <label for="idcurso">Id Curso</label>
                  <input type="number" class="form-control" id="disabledInput" value="1" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="nombreMateria">Nombre Materia</label>
                <input type="text" class="form-control" id="nombreMateria" style="color: black">
              </div>
              <br>
              <button type="submit" class="btn btn-primary btn-block">Guardar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
<!-- Fin Modal Editar-->
<!-- Modal Nuevo -->
  <div class="modal fade" id="modalNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Curso</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam diam, ultricies vel enim eu, dictum interdum tellus. Vivamus et nunc eget leo sagittis euismod. Praesent volutpat ac mi at tristique. 
            <form>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="idalumno">Id Alumno</label>
                  <input type="number" class="form-control" id="disabledInput" value="1" disabled>
                </div>
                <div class="form-group col-md-4">
                  <label for="idcurso">Id Curso</label>
                  <input type="number" class="form-control" id="disabledInput" value="1" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="nombreMateria">Nombre Materia</label>
                <input type="text" class="form-control" id="nombreMateria" style="color: black">
              </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
          <button type="button" class="btn btn-primary">Agregar</button>
        </div>
      </div>
    </div>
  </div>
<!-- Fin Modal Nuevo-->


<!--Javascript Files-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="js/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<!--Js Data Tables-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script> 
        $(document).on("click","#link",function(){
            alert("Ya quedo :)");
        });
        $(document).ready(function() {
            $('#tab_proyectos').DataTable({
                "lengthMenu": [[10], [10]],
                "pagingType": "numbers",
                "ordering": false,
                scrollY: '44vh',
                scrollCollapse: true,
                autoFill: true,
                responsive: true,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ proyectos por pagina",
                    "zeroRecords": "No se encontro",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros",
                    "infoFiltered": "(Se filtraron de _MAX_ registros en total)"
                }
            });
            $("input.form-control").attr("placeholder", "Realiza tu busqueda");
        });

        
    </script> 
</body>
</html>