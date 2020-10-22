<?php
include("conexion.php");
   
    $id_curso= $_POST['id_curso'];
    $nombre_materia= $_POST['nombre_materia'];
   

   echo $query="INSERT INTO control_escolar.materias(id_curso, nombre_materia) VALUES('$id_curso','$nombre_materia')";
    $res=$cnx->query($query);
    if($res){
        echo "<script>
                alert('Materia registrada con Éxito');
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
