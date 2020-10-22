<?php
include("conexion.php");
    $id_usuario = $_REQUEST['id_usuario'];  
    $id_curso= $_POST['id_curso'];
    $nombre= $_POST['nombre'];
    $apaterno= $_POST['apaterno'];
    $amaterno= $_POST['amaterno'];
    $boleta= $_POST['boleta'];
    $telefono= $_POST['tel'];
    $correo= $_POST['correo'];
    $usuario= $_POST['usuario'];
    $password= $_POST['pass'];
    

    $query="UPDATE control_escolar.usuario SET id_curso='$id_curso',id_usuario='$id_usuario', nombre='$nombre', apaterno='$apaterno', amaterno='$amaterno', boleta='$boleta', telefono='$telefono', correo='$correo', usuario='$usuario', password='$password' WHERE id_usuario='$id_usuario'";

    $res=$cnx->query($query);
    if($res){
        echo "<script>
                alert('Actualización Exitosa');
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
