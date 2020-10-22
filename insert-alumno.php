<?php
include("conexion.php");
    $curso = $_POST['id_curso'];
    $nombre= $_POST['nombre'];
    $apaterno= $_POST['apaterno'];
    $amaterno= $_POST['amaterno'];
    $boleta= $_POST['boleta'];
    $telefono= $_POST['tel'];
    $correo= $_POST['correo'];
    $usuario= $_POST['usuario'];
    $password= $_POST['pass'];

    $query="INSERT INTO control_escolar.usuario(id_curso, nombre, apaterno, amaterno, boleta, telefono, correo, usuario, password, tipo_usuario) VALUES('$curso','$nombre','$apaterno','$amaterno','$boleta','$telefono','$correo','$usuario','$password','3')";
    $res=$cnx->query($query);
    if($res){
        echo "<script>
                alert('Insercion Exitosa');
                window.location.href='view-admin-crud-alumno.php';
              </script>";
    }
    else{
        echo "<script>
                alert('Ocurrio un error');
                window.location.href='view-admin-crud-alumno.php';
              </script>";
    }
?>
