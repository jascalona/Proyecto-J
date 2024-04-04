<?php

include "Conn/conexion.php";

$modelo = $_GET['modelo'];
$location = $_GET['location'];
$date = $_GET['date'];


$sql = " SELECT *FROM mibanco WHERE 1=1";

//DEVOLUCIONES DE SENTENCIAS 

    if (!empty($modelo)) {
        $sql .= " AND modelo LIKE '%$modelo' AND location LIKE '%$location' AND date LIKE '%$date' ";
    }

    if (!empty($location)) {
        $sql .= " AND  modelo LIKE '%$modelo' AND location LIKE '%$location' AND date LIKE '%$date' ";
    }

    if (!empty($date)) {
     $sql .= " AND modelo LIKE '%$modelo'  AND location LIKE '%$location' AND date LIKE '%$date' ";
    }

    $dato = mysqli_query($conexion, $sql);

    while ($fila = mysqli_fetch_assoc($dato)) {

        ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['serial']; ?></td>
                <td><?php echo $fila['modelo']; ?></td>
                <td><?php echo $fila['location']; ?></td>
                <td><?php echo $fila['date']; ?></td>
                <td><a class="btnPre" href="../huawei/controlador/preview.php"><?php echo $fila['file']; ?></a></td>
                <td><a href="#"><i class='bx bx-envelope-open'><?php echo ""?></i></a></td>
    
            </tr>         

        <?php
    }
    


?>