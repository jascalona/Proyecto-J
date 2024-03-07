<?php

if (!empty($_POST["btningresar"])){
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">Debe llenar los Campos</div>';
    } else {
        $usuario=$_POST["usuario"];
        $clave=$POST["password"];
        $sql=$conexion->query("select *from usuario where usuario='$usuario' and clave='$clave'");
        if ($datos=$sql->fetch_object()) {
            header("location:inicio.php");
        } else {
            echo '<div class="alert alert-danger">El usuario o contraseña no son validas</div>';
        }
        
    }
    
}

?>