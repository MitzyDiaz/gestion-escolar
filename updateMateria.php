<?php
include("conexion.php");
    $id_materia = $_REQUEST['id_materia'];  
    $id_curso= $_POST['id_curso'];
    $nombre_materia= $_POST['nombre_materia'];


echo $query="UPDATE control_escolar.materias SET id_curso='$id_curso', nombre_materia='$nombre_materia' WHERE id_materia='$id_materia'";

    $res=$cnx->query($query);
    if($res){
        echo "<script>
                alert('Actualización Exitosa');
                window.location.href='view-admin-crud-materia.php';
              </script>";
    }
    else{
        echo "<script>
                alert('Ocurrio un error');
                window.location.href='view-admin-crud-materia.php';
              </script>";
    }

?>
