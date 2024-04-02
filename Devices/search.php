<?php

include "Conn/conexion.php";


$search = $_GET['search'];
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

$resultado = mysqli_query($conexion, $sql);

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo $fila ['serial'] . '<br>';
    echo $fila  ['model'] . '<br>';
    echo $fila  ['customer'] . '<br>';
    echo $fila  ['location'] . '<br>';
    echo $fila  ['region'] . '<br>';
 
}

mysqli_close($conexion);

?>