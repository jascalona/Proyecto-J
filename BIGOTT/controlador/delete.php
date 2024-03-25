<?php

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from miBanco where id=$id ");
    if ($sql==1) {
        echo '<div style="position: absolute; margin-left: 550px; margin-top: 15px; " class="alert alert-success">SE HA ELIMINADO EL CAMPO</div>';
    } else {
        echo '<div style="position: absolute; margin-left: 550px; margin-top: 15px; class="alert alert-danger">ERROR AL ELIMINAR LOS CAMPOS</div>';
    }
    
}



?>