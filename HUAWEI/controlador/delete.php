<?php

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from huawei where serial=$id ");
    if ($sql==1) {
        echo '<div>SE HA ELIMINADO EL CAMPO</div>';
    } else {
        echo '<div>ERROR AL ELIMINAR LOS CAMPOS</div>';
    }
    

}   


?>