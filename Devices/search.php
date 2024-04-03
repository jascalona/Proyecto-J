<?php

include "Conn/conexion.php";


//$search = $_GET['search'];
$model = $_GET['model'];
$customer = $_GET['customer'];
$location = $_GET['location'];
// $region = $_GET['region'];


$sql = " SELECT *FROM devices WHERE 1=1";

//DEVOLUCION DE SENTENCIAS

    if (!empty($model)) {
        $sql .= " AND model LIKE '%$model' AND customer LIKE '%$customer' AND location LIKE '%$location' ";
    }

    if (!empty($customer)) {
        $sql .= " AND model LIKE '%$model' AND customer LIKE '%$customer' AND location LIKE '%$location' ";
    }

    if (!empty($location)) {
        $sql .= " AND model LIKE '%$model' AND customer LIKE '%$customer' AND location LIKE '%$location' ";
    }

$dato = mysqli_query($conexion, $sql);

while ($fila = mysqli_fetch_assoc($dato)) {
    

    ?>
    <tr>
        <td><?php echo $fila['rif']; ?></td>
        <td><?php echo $fila['serial']; ?></td>
        <td><?php echo $fila['model']; ?></td>
        <td><?php echo $fila['customer']; ?></td>
        <td><?php echo $fila['dp']; ?></td>
        <td><?php echo $fila['location']; ?></td>
        <td><?php echo $fila['region']; ?></td>
        <td><?php echo $fila['total']; ?></td>
    </tr>
    
    <?php
   
}

mysqli_close($conexion);

?>