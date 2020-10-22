<?php
include("conexion.php");
    $id_usuario=$_REQUEST['id_usuario'];
    $query="DELETE FROM usuario WHERE id_usuario='$id_usuario'";
    $res=$cnx->query($query);
    if($res){
        header("location:view-admin-crud-alumno.php");
    }
    else{
        echo "<script>
                alert('Ocurrio un error');
                window.location.href='view-admin-crud-alumno.php';
              </script>";
    }
?>
