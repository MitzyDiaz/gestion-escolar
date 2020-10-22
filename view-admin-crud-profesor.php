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
                        <a href="view-admin-crud-profesor.php">
                            <i class="fa fa-list"></i>
                            <p>Profesor</p>
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
                                        <h3 class="title" style="margin-bottom: 10px !important;">CRUD Profesor
                                        </h3>
                                        <hr style="border-top: 1px solid #2aa7df;">
                                </div>
                                <!--List Table-->
                                <div class='container'>
                                    <!-- INICIO BOTON AGREGAR-->
                                    <a href="view-admin-profesor-agregar.php"><button type="button" class="btn btn-primary btn-sm">
                                        <i class="fa fa-user-plus">  Nuevo</i>
                                    </button></a>
                                    <!--FIN MODAL BOTON AGREGAR-->
                                    <table id="tab_proyectos" width="100%" class='table'>
                                        <thead>
                                            <tr>
                                                <th scope='col' class='titulo'>ID Profesor</th>
                                                <th scope='col' class='titulo'>ID Curso</th>
                                                <th scope='col' class='titulo'>Nombre</th>
                                                <th scope='col' class='titulo'>Apellido P</th>
                                                <th scope='col' class='titulo'>Apellido M</th>
                                                <th scope='col' class='titulo'>Telefono</th>
                                                <th scope='col' class='titulo'>Email</th>
                                                <th scope='col' class='titulo'>Matricula</th>
                                                <th scope='col' class='titulo'>Usuario</th>
                                                <th scope='col' class='titulo'>Acciones</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        include_once "conexion.php";
                                        $sentencia="SELECT id_usuario, id_curso, nombre, apaterno, amaterno,telefono,correo,boleta,usuario FROM control_escolar.usuario WHERE tipo_usuario = '2'";
                                                $res=$cnx->query($sentencia);
                                                while($registro=$res->fetch_assoc()){
                                        ?>
                                        
                                        <tr>
                                            <td><?php echo $registro['id_usuario']?></td>
                                            <td><?php echo $registro['id_curso']?></td>
                                            <td><?php echo $registro['nombre']?></td>
                                            <td><?php echo $registro['apaterno']?></td>
                                            <td><?php echo $registro['amaterno']?></td>
                                            <td><?php echo $registro['telefono']?></td>
                                            <td><?php echo $registro['correo']?></td>
                                            <td><?php echo $registro['boleta']?></td>
                                            <td><?php echo $registro['usuario']?></td>
                                            <td>
                                               <a href="view-admin-profesor-modif.php?id_usuario=<?php echo $registro['id_usuario'];?>"><button type="button" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-edit"></i>
                                                </button></a>
                                                <button onClick="confirmar(<?php echo $registro['id_usuario'];?>)" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                          <?php
                                            }
                                          ?>
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


<!-- Modal Edit -->
  <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Profesor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="idcurso">ID Curso</label> 
                    <select class="custom-select form-control" style="color: black" required>
                        <option selected disabled value="">Escoge Curso...</option>
                        <option>Coso1</option>
                        <option>Coso2</option>
                        <option>Coso3</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="boleta">Boleta</label>
                  <input type="number" class="form-control" name="boleta" style="color: black" required>
                </div>
              </div>
              <!--SEGUNDA FILA-->
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" name="nombre" style="color: black" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="ap">Apellido Paterno</label>
                  <input type="am" class="form-control" name="apaterno" style="color: black" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="boleta">Apellido Materno</label> 
                  <input type="text" class="form-control" name="amaterno" style="color: black" required>

                </div>
              </div>
              <!--TERCERA FILA-->
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="tel">Telefono</label>
                      <input type="number" class="form-control" name="tel" style="color: black" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="correo">Email</label>
                      <input type="email" class="form-control" name="correo" style="color: black" required>
                    </div>
                </div>
              <!--Cuarta FILA-->
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="usuario">Usuario</label>
                      <input type="phone" class="form-control" name="usuario" style="color: black" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="pass">Contraseña</label>
                      <input type="text" class="form-control" name="pass" style="color: black" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Guardar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
<!-- Fin Modal Edit-->


<!-- Modal Nuevo -->
  <div class="modal fade" id="modalNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Profesor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form class="was-validated">
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="idcurso">ID Curso</label> 
                    <select class="custom-select form-control" style="color: black" required>
                        <option selected disabled value="">Escoge Curso...</option>
                        <option>Coso1</option>
                        <option>Coso2</option>
                        <option>Coso3</option>
                  </select>
                </div>
                <div class="form-group col-md-4">
                  <label for="boleta">Boleta</label>
                  <input type="number" class="form-control" name="boleta" style="color: black" required>
                </div>
                <div class="form-group col-md-2">
                  <label for="tipousuario">Tipo Usuario</label>
                  <input type="number" class="form-control" name="boleta" value="2" style="background-color: #eee; color: black" disabled>
                </div>
              </div>
              <!--SEGUNDA FILA-->
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="validationCustom01">Nombre</label>
                  <input type="text" class="form-control is-invalid" id="validationCustom01" name="nombre" style="color: black" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="ap">Apellido Paterno</label>
                  <input type="am" class="form-control" name="apaterno" style="color: black" required>
                </div>
                <div class="form-group col-md-4">
                  <label for="boleta">Apellido Materno</label> 
                  <input type="text" class="form-control" name="amaterno" style="color: black" required>

                </div>
              </div>
              <!--TERCERA FILA-->
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="tel">Telefono</label>
                      <input type="number" class="form-control" name="tel" style="color: black" required>
                      <div class="invalid-feedback">
                        Escoge un numero valido
                      </div>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="correo">Email</label>
                      <input type="email" class="form-control" name="correo" style="color: black" required>
                      <div class="valid-feedback">
                        ¡Bien!
                    </div>
                    <div class="invalid-feedback">
                        Escoge un correo valido
                      </div>
                    </div>
                </div>
              <!--Cuarta FILA-->
                <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="usuario">Usuario</label>
                      <input type="phone" class="form-control" name="usuario" style="color: black" required>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="pass">Contraseña</label>
                      <input type="text" class="form-control" name="pass" style="color: black" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Guardar</button>
            </form>
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
        function confirmar(id_usuario){
            if(confirm("¿Estas seguro que deseas borrar?")){
                window.location.href ="borrar.php?id_usuario="+id_usuario;
            }
        }
        $(document).ready(function() {
            $('#tab_proyectos').DataTable({
                "lengthMenu": [[10], [10]],
                "pagingType": "numbers",
                "ordering": true,
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
        });  
    </script> 
</body>
</html>