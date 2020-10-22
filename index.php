<?php
session_start();
if (isset($_SESSION['usuario'])) {
    if($_SESSION['usuario']['tipo_usuario']=='1'){
        header('Location: dash.php');

    }else if($_SESSION['usuario']['tipo_usuario']=='2'){
        header('Location: view-profesor-curso.php');
    }else if($_SESSION['usuario']['tipo_usuario']=='3'){
        header('Location: view-alumno.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/ico/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" href="images/ico/favicon.ico" sizes="32x32" />
    <title>Login Sistema</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="components/bootstrap/css/bootstrap-theme.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="css/index.css" rel="stylesheet"> 

</head>

<body class="text-center">
<div class="error">Datos de Ingreso no Validos</div>
<div id="content-titulo">
    <h2 id="titulo">Sistema de Control Escolar</h2>
</div>
    <div class="login-box">
       <div id="avatar">
           <img src="assets/img/avat.png" alt="">
       </div>


        <form method="POST" name="form-signin" id="form-signin" action="dash.php">
            <div class="user-box">
                <input type="text" name="loginUser" id="loginUser" maxlength="20" autocomplete="off" placeholder="Escribe tu usuario" pattern="[A-Za-z0-9_-]{1,15}" required>
                <span class="icon-form"><i class="fa fa-user"> Usuario</i></span>
            </div>

            <div id="espacio"></div>

            <div class="user-box">
                <input type="password" name="loginPwd" id="loginPwd" maxlength="10" autocomplete="off" placeholder="Escribe tu contraseña" pattern="[A-Za-z0-9_-]{1,15}"  required>
                <span class="icon-form"><i class="fa fa-key"> Contraseña</i></span>
                <span class="btn-show-pwd">
                    <i class="fa fa-eye" id="show" aria-hidden="true" onclick="show()"></i>
                    <i class="fa fa-eye-slash" id="hide" aria-hidden="true" onclick="show()" style="display:none"></i>
                </span>
            </div>

            <div id="msgSection">
                <span id="msgLogin"></span>
            </div>
            <button id="loginBtn" type="submit">Entrar</button>
        </form>
    </div>

    <!-- JavaScript Files -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Custom JavaScript -->
    <script>
        //funcion mostrar-ocultar contraseña
        function show() {
            let pwdContent = document.getElementById("loginPwd");
            let icon = document.getElementById("show");
            let iconSlash = document.getElementById("hide");

            if(pwdContent.type === "password"){
                pwdContent.type = "text";
                icon.style.display = 'none';
                iconSlash.style.display = 'inline'
            }else{
                pwdContent.type = "password";
                icon.style.display = 'inline';
                iconSlash.style.display = 'none'
            }
        }
        //Validar ingreso
        jQuery(document).on('submit','#form-signin',function(event){
            event.preventDefault();
            jQuery.ajax({
                url: 'login.php',
                type: 'POST',
                dataType: 'json',
                data: $(this).serialize(),
                beforeSend: function(){
                    $('#loginBtn').val('Validando...');

                }
            })
            .done(function(respuesta){
                console.log(respuesta);
                if (!respuesta.error) {
                    if (respuesta.tipo == '1') {
                        location.href ='dash.php';
                    }else if (respuesta.tipo == '2') {
                        location.href ='view-profesor-curso.php';
                    }else if (respuesta.tipo == '3') {
                        location.href ='view-alumno.php';
                    }
                }else{
                    $('.error').slideDown('slow');
                    setTimeout(function(){
                        $('.error').slideUp('slow');
                    },3000);
                    $('#loginBtn').val('Iniciar Sesion');
                }
            })
            .fail(function(resp){
                console.log(resp.responseText);
            })
            .always(function(){
                console.log("complete");
            });
        });
        
    </script>

</body>

</html>