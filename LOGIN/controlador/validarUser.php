<?php

if(!empty($_POST['btnIngrese'])) {
    if (!empty($_POST['user']) and !empty($_POST['password'])) {
        echo "RELLENE LOS CAMPOS";
    } else {
        $usuario = $_POST['user'];
        $password = $_POST['password'];

        $sql=$conexion->query(" select *from user where user=$usuario and password=$password ");
        if ($datos=$sql->fetch_object()) {
            header("location:Dashboard.html");
        } else {
            echo "ACCESO DENEGADO";
        }
        
    }
    
}




?>