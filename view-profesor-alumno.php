<?php
session_start();
if (isset($_SESSION['usuario'])) {
    if($_SESSION['usuario']['tipo_usuario']!='2'){
        header('Location:view-alumno.php');
    }
}else{
    header('Location:index.php');
}
$id_curso = $_REQUEST['id_curso'];
  require 'conexion.php';
  
  $id_curso = $_GET['id_curso'];
  
$sentencia = "SELECT * FROM usuario WHERE id_curso = '$id_curso' AND tipo_usuario='3'";
$res = $cnx->query($sentencia);
$row = $res->fetch_array(MYSQLI_ASSOC);
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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="assets/css/black-dashboard.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/color.css">

    <title>Control Escolar - Profesor</title>
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
                        Bienvenido Profesor: <b><?php echo $_SESSION['usuario']['usuario']?> </b>
                    </span>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="view-profesor-alumno.php">
                            <i class="fa fa-list"></i>
                            <p>Alumnos</p>
                        </a>
                    </li>
                    <li >
                        <a href="javascript:history.back()"> 
                            <i class="fa fa-arrow-left"></i>
                            <p>Volver Atrás</p>
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
                                        <h3 class="title" style="margin-bottom: 10px !important;">Lista de Alumnos del <?php echo $row['id_curso']?>
                                        </h3>
                                        <hr style="border-top: 1px solid #2aa7df;">
                                </div>
                                <!--List Table-->
                                <div class='container'>
                                    <table id="tab_proyectos" width="70%" class='table'>
                                        <thead>
                                            <tr>
                                                <th scope='col' class='titulo'>#</th>
                                                <th scope='col' class='titulo'>Alumno</th>
                                                <th scope='col' class='titulo'>Apellido</th>
                                                <th scope='col' class='titulo'>Ver Materias</th>
                                            </tr>
                                        </thead>
                                              <?php
                                        include_once "conexion.php";
                                        $sentencia="SELECT id_usuario, nombre, apaterno FROM control_escolar.usuario WHERE id_curso = '$id_curso' AND tipo_usuario = '3'";
                                                $res=$cnx->query($sentencia);
                                                while($registro=$res->fetch_assoc()){
                                        ?>
                                        
                                        <tr>
                                            <td>1</td>
                                             <td><?php echo $registro['nombre']?></td>
                                             <td><?php echo $registro['apaterno']?></td>
                                            <td> <a href="view-profesor-materia.php?id_usuario=<?php echo $registro['id_usuario'];?>"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye" style="color: white"></i></a></td>
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
<script src="js/jquery-3.5.1.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
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