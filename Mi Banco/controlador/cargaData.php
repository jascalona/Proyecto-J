<?php

if (!empty($_POST['btnCarga'])) {
    if (!empty($_POST['serial']) and !empty($_POST['modelo']) and !empty(['location']) and !empty(['date']) and !empty(['file'])){

        $serial = $_POST['serial'];
        $modelo = $_POST['modelo'];
        $location = $_POST['location'];
        $date = $_POST['date'];
        $file = $_POST['file'];

        $sql = $conexion->query(" insert into miBanco(serial,modelo,location,date,file)values('$serial','$modelo','$location','$date','$file')");
        if ($sql==1) {
            echo '<div style="margin-left: 470px; position: absolute;" class="alert alert-success">LA CARGA SE REALIZO CORRECTAMENTE</div>';
        } else {
            echo '<div style="margin-left: 470px; position: absolute;" class="alert alert-danger">ERROR DE CONEXION COD: 10231514</div>';
        }
        
    } else{
        echo '<div style="margin-left: 207px; position: absolute;" class="alert alert-warning">DEBE LLENAR LOS CAMPOS VACIOS</div>';
    }

}

?>