<?php
include 'data.php';
        $cnx=new mysqli($host,$uid,$key,$db);
        if(mysqli_connect_errno()){
            echo "Problemas con la bd";
            }
?>