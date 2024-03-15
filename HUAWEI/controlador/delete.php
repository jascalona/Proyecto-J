<?php

if (!empty($_GET["serial"])) {
    $serial=$_GET["serial"];
    $sql=$conexion->query(" delete from huawei serial=$serial ");
    if ($sql==1) {
        echo '<div>SE HA ELIMINADO EL CAMPO</div>';
    } else {
        echo '<div>ERROR AL ELIMINAR LOS CAMPOS</div>';
    }
    

}   


?>