

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="David Rodríguez">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" href="images/ico/favicon.ico" sizes="32x32" />
    <title> Dashboard </title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/black-dashboard.min.css" rel="stylesheet" />
    <link href="css/loaderStyle.css" rel="stylesheet">

    <style>
    label.error {
        margin-bottom: 15px !important;
        color: bisque !important;
    }
    </style>

</head>

<body>

    <!-- Loader
        =========== -->
    <div class="bcenter">
        <div class="bloader">
            <div class="loading">
                <div class="loading__ring">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;"
                        xml:space="preserve">
                        <path
                            d="M85.5,42c-0.2-0.8-0.5-1.7-0.8-2.5c-0.3-0.9-0.7-1.6-1-2.3c-0.3-0.7-0.6-1.3-1-1.9c0.3,0.5,0.5,1.1,0.8,1.7  c0.2,0.7,0.6,1.5,0.8,2.3s0.5,1.7,0.8,2.5c0.8,3.5,1.3,7.5,0.8,12c-0.4,4.3-1.8,9-4.2,13.4c-2.4,4.2-5.9,8.2-10.5,11.2  c-1.1,0.7-2.2,1.5-3.4,2c-0.5,0.2-1.2,0.6-1.8,0.8s-1.3,0.5-1.9,0.8c-2.6,1-5.3,1.7-8.1,1.8l-1.1,0.1L53.8,84c-0.7,0-1.4,0-2.1,0  c-1.4-0.1-2.9-0.1-4.2-0.5c-1.4-0.1-2.8-0.6-4.1-0.8c-1.4-0.5-2.7-0.9-3.9-1.5c-1.2-0.6-2.4-1.2-3.7-1.9c-0.6-0.3-1.2-0.7-1.7-1.1  l-0.8-0.6c-0.3-0.1-0.6-0.4-0.8-0.6l-0.8-0.6L31.3,76l-0.2-0.2L31,75.7l-0.1-0.1l0,0l-1.5-1.5c-1.2-1-1.9-2.1-2.7-3.1  c-0.4-0.4-0.7-1.1-1.1-1.7l-1.1-1.7c-0.3-0.6-0.6-1.2-0.9-1.8c-0.2-0.5-0.6-1.2-0.8-1.8c-0.4-1.2-1-2.4-1.2-3.7  c-0.2-0.6-0.4-1.2-0.5-1.9c-0.1-0.6-0.2-1.2-0.3-1.8c-0.3-1.2-0.3-2.4-0.4-3.7c-0.1-1.2,0-2.5,0.1-3.7c0.2-1.2,0.3-2.4,0.6-3.5  c0.1-0.6,0.3-1.1,0.4-1.7l0.1-0.8l0.3-0.8c1.5-4.3,3.8-8,6.5-11c0.8-0.8,1.4-1.5,2.1-2.1c0.9-0.9,1.4-1.3,2.2-1.8  c1.4-1.2,2.9-2,4.3-2.8c2.8-1.5,5.5-2.3,7.7-2.8s4-0.7,5.2-0.6c0.6-0.1,1.1,0,1.4,0s0.4,0,0.4,0h0.1c2.7,0.1,5-2.2,5-5  c0.1-2.7-2.2-5-5-5c-0.2,0-0.2,0-0.3,0c0,0-0.2,0.1-0.6,0.1c-0.4,0-1,0-1.8,0.1c-1.6,0.1-4,0.4-6.9,1.2c-2.9,0.8-6.4,2-9.9,4.1  c-1.8,1-3.6,2.3-5.4,3.8C26,21.4,25,22.2,24.4,23c-0.2,0.2-0.4,0.4-0.6,0.6c-0.2,0.2-0.5,0.4-0.6,0.7c-0.5,0.4-0.8,0.9-1.3,1.4  c-3.2,3.9-5.9,8.8-7.5,14.3l-0.3,1l-0.2,1.1c-0.1,0.7-0.3,1.4-0.4,2.1c-0.3,1.5-0.4,2.9-0.5,4.5c0,1.5-0.1,3,0.1,4.5  c0.2,1.5,0.2,3,0.6,4.6c0.1,0.7,0.3,1.5,0.4,2.3c0.2,0.8,0.5,1.5,0.7,2.3c0.4,1.6,1.1,3,1.7,4.4c0.3,0.7,0.7,1.4,1.1,2.1  c0.4,0.8,0.8,1.4,1.2,2.1c0.5,0.7,0.9,1.4,1.4,2s0.9,1.3,1.5,1.9c1.1,1.3,2.2,2.7,3.3,3.5l1.7,1.6c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0,0  c0,0,0,0,0,0l0.1,0.1l0.1,0.1h0.2l0.5,0.4l1,0.7c0.4,0.2,0.6,0.5,1,0.7l1.1,0.6c0.8,0.4,1.4,0.9,2.1,1.2c1.4,0.7,2.9,1.5,4.4,2  c1.5,0.7,3.1,1,4.6,1.5c1.5,0.3,3.1,0.7,4.7,0.8c1.6,0.2,3.1,0.2,4.7,0.2c0.8,0,1.6-0.1,2.4-0.1l1.2-0.1l1.1-0.1  c3.1-0.4,6.1-1.3,8.9-2.4c0.8-0.3,1.4-0.6,2.1-0.9s1.3-0.7,2-1.1c1.3-0.7,2.6-1.7,3.7-2.5c0.5-0.4,1-0.9,1.6-1.3l0.8-0.6l0.2-0.2  c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0,0,0,0v0.1l0.1-0.1l0.4-0.4c0.5-0.5,1-1,1.5-1.5c0.3-0.3,0.5-0.5,0.8-0.8l0.7-0.8  c0.9-1.1,1.8-2.2,2.5-3.3c0.4-0.6,0.7-1.1,1.1-1.7c0.3-0.7,0.6-1.2,0.9-1.8c2.4-4.9,3.5-9.8,3.7-14.4C87.3,49.7,86.6,45.5,85.5,42z">
                        </path>
                    </svg>
                </div>
                <div class="loading__ring">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        x="0px" y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;"
                        xml:space="preserve">
                        <path
                            d="M85.5,42c-0.2-0.8-0.5-1.7-0.8-2.5c-0.3-0.9-0.7-1.6-1-2.3c-0.3-0.7-0.6-1.3-1-1.9c0.3,0.5,0.5,1.1,0.8,1.7  c0.2,0.7,0.6,1.5,0.8,2.3s0.5,1.7,0.8,2.5c0.8,3.5,1.3,7.5,0.8,12c-0.4,4.3-1.8,9-4.2,13.4c-2.4,4.2-5.9,8.2-10.5,11.2  c-1.1,0.7-2.2,1.5-3.4,2c-0.5,0.2-1.2,0.6-1.8,0.8s-1.3,0.5-1.9,0.8c-2.6,1-5.3,1.7-8.1,1.8l-1.1,0.1L53.8,84c-0.7,0-1.4,0-2.1,0  c-1.4-0.1-2.9-0.1-4.2-0.5c-1.4-0.1-2.8-0.6-4.1-0.8c-1.4-0.5-2.7-0.9-3.9-1.5c-1.2-0.6-2.4-1.2-3.7-1.9c-0.6-0.3-1.2-0.7-1.7-1.1  l-0.8-0.6c-0.3-0.1-0.6-0.4-0.8-0.6l-0.8-0.6L31.3,76l-0.2-0.2L31,75.7l-0.1-0.1l0,0l-1.5-1.5c-1.2-1-1.9-2.1-2.7-3.1  c-0.4-0.4-0.7-1.1-1.1-1.7l-1.1-1.7c-0.3-0.6-0.6-1.2-0.9-1.8c-0.2-0.5-0.6-1.2-0.8-1.8c-0.4-1.2-1-2.4-1.2-3.7  c-0.2-0.6-0.4-1.2-0.5-1.9c-0.1-0.6-0.2-1.2-0.3-1.8c-0.3-1.2-0.3-2.4-0.4-3.7c-0.1-1.2,0-2.5,0.1-3.7c0.2-1.2,0.3-2.4,0.6-3.5  c0.1-0.6,0.3-1.1,0.4-1.7l0.1-0.8l0.3-0.8c1.5-4.3,3.8-8,6.5-11c0.8-0.8,1.4-1.5,2.1-2.1c0.9-0.9,1.4-1.3,2.2-1.8  c1.4-1.2,2.9-2,4.3-2.8c2.8-1.5,5.5-2.3,7.7-2.8s4-0.7,5.2-0.6c0.6-0.1,1.1,0,1.4,0s0.4,0,0.4,0h0.1c2.7,0.1,5-2.2,5-5  c0.1-2.7-2.2-5-5-5c-0.2,0-0.2,0-0.3,0c0,0-0.2,0.1-0.6,0.1c-0.4,0-1,0-1.8,0.1c-1.6,0.1-4,0.4-6.9,1.2c-2.9,0.8-6.4,2-9.9,4.1  c-1.8,1-3.6,2.3-5.4,3.8C26,21.4,25,22.2,24.4,23c-0.2,0.2-0.4,0.4-0.6,0.6c-0.2,0.2-0.5,0.4-0.6,0.7c-0.5,0.4-0.8,0.9-1.3,1.4  c-3.2,3.9-5.9,8.8-7.5,14.3l-0.3,1l-0.2,1.1c-0.1,0.7-0.3,1.4-0.4,2.1c-0.3,1.5-0.4,2.9-0.5,4.5c0,1.5-0.1,3,0.1,4.5  c0.2,1.5,0.2,3,0.6,4.6c0.1,0.7,0.3,1.5,0.4,2.3c0.2,0.8,0.5,1.5,0.7,2.3c0.4,1.6,1.1,3,1.7,4.4c0.3,0.7,0.7,1.4,1.1,2.1  c0.4,0.8,0.8,1.4,1.2,2.1c0.5,0.7,0.9,1.4,1.4,2s0.9,1.3,1.5,1.9c1.1,1.3,2.2,2.7,3.3,3.5l1.7,1.6c0,0,0.1,0.1,0.1,0.1c0,0,0,0,0,0  c0,0,0,0,0,0l0.1,0.1l0.1,0.1h0.2l0.5,0.4l1,0.7c0.4,0.2,0.6,0.5,1,0.7l1.1,0.6c0.8,0.4,1.4,0.9,2.1,1.2c1.4,0.7,2.9,1.5,4.4,2  c1.5,0.7,3.1,1,4.6,1.5c1.5,0.3,3.1,0.7,4.7,0.8c1.6,0.2,3.1,0.2,4.7,0.2c0.8,0,1.6-0.1,2.4-0.1l1.2-0.1l1.1-0.1  c3.1-0.4,6.1-1.3,8.9-2.4c0.8-0.3,1.4-0.6,2.1-0.9s1.3-0.7,2-1.1c1.3-0.7,2.6-1.7,3.7-2.5c0.5-0.4,1-0.9,1.6-1.3l0.8-0.6l0.2-0.2  c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0,0,0,0v0.1l0.1-0.1l0.4-0.4c0.5-0.5,1-1,1.5-1.5c0.3-0.3,0.5-0.5,0.8-0.8l0.7-0.8  c0.9-1.1,1.8-2.2,2.5-3.3c0.4-0.6,0.7-1.1,1.1-1.7c0.3-0.7,0.6-1.2,0.9-1.8c2.4-4.9,3.5-9.8,3.7-14.4C87.3,49.7,86.6,45.5,85.5,42z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- End Loader
        =========== -->

    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <span class="simple-text logo-mini">
                        Bienvenido: <b><?php echo($nombreUsuario);?> </b>
                    </span>
                </div>
                <ul class="nav">
                    <li>
                        <a href="dashboard.php">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="usuarios.php">
                            <i class="tim-icons icon-single-02"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>
                    <li>
                        <a href="alta-proyectos">
                            <i class="tim-icons icon-atom"></i>
                            <p>Alta Proyectos</p>
                        </a>
                    </li>
                    <li>
                        <a href="./tables.html">
                            <i class="tim-icons icon-puzzle-10"></i>
                            <p>Ver Proyectos</p>
                        </a>
                    </li>
                    <li>
                        <a href="./notifications.html">
                            <i class="tim-icons icon-bell-55"></i>
                            <p>Notificaciones</p>
                        </a>
                    </li>
                    <li>
                        <a href="./map.html">
                            <i class="tim-icons icon-pin"></i>
                            <p>OPC2</p>
                        </a>
                    </li>
                    <li>
                        <a href="./typography.html">
                            <i class="tim-icons icon-align-center"></i>
                            <p>OPC3</p>
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
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <span class="navbar-brand" href="javascript:void(0)">Usuarios</span>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">

                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="assets/img/anime3.png" alt="Profile Photo">
                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href="logout.php" class="nav-item dropdown-item">Log
                                            out</a></li>
                                </ul>
                            </li>
                            <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- Form Alta -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">

                                <form method="POST" id="formUsuario" name="formUsuario">
                                    <!--    <form method="POST" id="formUsuario" name="formUsuario"> -->
                                    <div class="card-header">
                                        <h3 class="title" style="margin-bottom: 10px !important;">Datos Empleado</h3>
                                        <hr style="border-top: 1px solid #e14eca;">
                                    </div>

                                    <div class="row" style="margin-bottom: 15px">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>Nombre(s) *</label>
                                                <input type="text" autocomplete="off" id="nombreUsuario"
                                                    name="nombreUsuario" class="form-control" placeholder="Nombre(s)">
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-md-1">
                                            <div class="form-group">
                                                <label>Apellido Paterno *</label>
                                                <input type="text" autocomplete="off" id="paternoUsuario"
                                                    name="paternoUsuario" class="form-control"
                                                    placeholder="Apellido Paterno">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-1">
                                            <div class="form-group">
                                                <label>Apellido Materno *</label>
                                                <input type="text" autocomplete="off" id="maternoUsuario"
                                                    name="maternoUsuario" class="form-control"
                                                    placeholder="Apellido Paterno">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 15px">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>RFC *</label>
                                                <input type="text" autocomplete="off" id="rfcUsuario" name="rfcUsuario"
                                                    class="form-control" placeholder="RFC">
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-md-1">
                                            <div class="form-group">
                                                <label>Correo Electrónico *</label>
                                                <input type="text" autocomplete="off" id="correoUsuario"
                                                    name="correoUsuario" class="form-control"
                                                    placeholder="Correo Electrónico">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-md-1">
                                            <div class="form-group">
                                                <label>Teléfono *</label>
                                                <input type="text" autocomplete="off" id="telefonoUsuario"
                                                    name="telefonoUsuario" class="form-control" placeholder="Teléfono">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-bottom: 15px">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>Rol</label>
                                                <select name="rolUsuario" id="rolUsuario" class="form-control">
                                                    <option value="" selected disabled hidden>Elige un rol</option>
                                                    <option value="ROOT" style="background-color: #27293d !important;">
                                                        Administrador</option>
                                                    <option value="Project Manager"
                                                        style="background-color: #27293d !important;">Project Manager
                                                    </option>
                                                    <option value="Developer"
                                                        style="background-color: #27293d !important;">Desarrollador
                                                    </option>
                                                    <option value="Analista"
                                                        style="background-color: #27293d !important;">Analista</option>
                                                    <option value="Diseñador"
                                                        style="background-color: #27293d !important;">Diseñado</option>
                                                    <option value="Scrum Master"
                                                        style="background-color: #27293d !important;">Scrum Master
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-md-1">
                                        </div>
                                        <div class="col-md-4 pl-md-1">
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h3 class="title" style="margin-bottom: 10px !important;">Datos Usuario</h3>
                                        <hr style="border-top: 1px solid #e14eca;">
                                    </div>


                                    <div class="row" style="margin-bottom: 15px">
                                        <div class="col-md-5 pr-md-1">
                                            <div class="form-group">
                                                <label>Usuario</label>
                                                <input type="text" autocomplete="off" id="userUsuario"
                                                    name="userUsuario" class="form-control" disabled
                                                    placeholder="Correo Electrónico">
                                            </div>
                                        </div>
                                        <div class="col-md-5 px-md-1">
                                            <div class="form-group">
                                                <label>Contrasena *</label>
                                                <input type="text" autocomplete="off" id="pwdUsuario" name="pwdUsuario"
                                                    class="form-control" placeholder="Contrasena">
                                            </div>
                                        </div>
                                        <div class="col-md-2 pl-md-1">
                                            <div class="form-group">
                                                <label>Generar Contraseña</label>
                                                <a id="btnGenerate" class="btn btn-fill btn-primary"
                                                    style="margin-top: -2px !important; color: #FFF"
                                                    onclick="makeid()">Generar</a>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="Flag" id="Flag" value="2">

                                    <div id="msgAltaU" class="text-center">
                                        <span id="msgAlta" style="font-size: 18px;color: bisque;"></span>
                                    </div>

                                    <div class="card-footer text-center">
                                        <button id="altaBtn" type="submit"
                                            class="btn btn-fill btn-primary">Guardar</button>
                                        <a onclick="reset()" class="btn btn-fill btn-secondary">Limpiar</a>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Alta -->

        </div>

    </div>

    <!-- JavaScript Files -->
    <script src="js/jquery-3.5.1.js"></script>
    <script src="assets\js\core\bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/6731221e93.js" crossorigin="anonymous"></script>

    <!-- Custom Scripts -->
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/js/black-dashboard.min.js?v=1.0.0"></script>
    <script src="js/random.js"></script>
    <script src="components/jqueryValidation/jquery.validate.js"></script>
    <script src="js/validateRules.js"></script>
    <script src="js/altaUsuarios-Validate.js"></script>

    <!-- Script para Loader -->
    <script>
    $(window).ready(function() {
        $('.loading').fadeOut();
        //$(".loading").show().delay(4000).fadeOut();
    })
    </script>

</body>

</html>
