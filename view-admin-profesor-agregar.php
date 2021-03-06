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
    <link rel="stylesheet" href="css/color.css">

    <title>Control Escolar - Administrador</title>
    <style>
      form .form-control{
        background-color: #1d253b8c;
      }
      option{
        color: black;
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
                    <li>
                        <a href="view-admin-crud-profesor.php">
                            <i class="fa fa-list"></i>
                            <p>CRUD</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="view-admin-profesor-agregar.php">
                            <i class="fa fa-user"></i>
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
                                        <h3 class="title" style="margin-bottom: 10px !important;">Agregar Profesor
                                        </h3>
                                        <hr style="border-top: 1px solid #2aa7df;">
                                </div>
                                <!--List Table-->
                                <div class='container'>
                                    <form action="insert-profesor.php" method="post">
                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="idcurso">ID Curso</label> 
                                          <select class="custom-select form-control" name="id_curso" required>
                                            <option selected disabled value="">Escoge Curso...</option>
                                                <option value="2020A">2020A</option>
                                                <option value="2020B">2020B</option>
                                                <option value="2020C">2020C</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="boleta">Boleta</label>
                                          <input type="number" class="form-control" name="boleta" minlength="9" maxlength="10" required>
                                        </div>
                                      </div>
                                      <!--SEGUNDA FILA-->
                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="nombre">Nombre</label>
                                          <input type="text" class="form-control" name="nombre" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="ap">Apellido Paterno</label>
                                          <input type="am" class="form-control" name="apaterno" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                          <label for="boleta">Apellido Materno</label> 
                                          <input type="text" class="form-control" name="amaterno" required>

                                        </div>
                                      </div>
                                      <!--TERCERA FILA-->
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                              <label for="tel">Telefono</label>
                                              <input type="number" class="form-control" name="tel" maxlength="10" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                              <label for="correo">Email</label>
                                              <input type="email" class="form-control" name="correo" required>
                                            </div>
                                        </div>
                                      <!--Cuarta FILA-->
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                              <label for="usuario">Usuario</label>
                                              <input type="phone" class="form-control" name="usuario" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                              <label for="pass">Contraseña</label>
                                              <input type="text" class="form-control" name="pass" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Agregar</button>
                                    </form>
                                  </div>
                                <!-- End List Table-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


<!--Javascript Files-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="js/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>