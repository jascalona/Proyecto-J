<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="jescalona">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost/proyecto-j/CSS/style.css">
    <link rel="stylesheet" href="http://localhost/proyecto-j/CSS/panel.css">
    <link rel="icon" href="http://localhost/proyecto-j/IMG/logo.png">
    <link rel="stylesheet" href="..//ListPart/css/busqueda.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="../ListPart/css/framework.css">

</head>
<body>
    
             
        <!--start tables clientes-->

        <table style="margin-top: 70px;" class="table table-bordered table_id ">
                    <tr>
                        <th>Serial</th>
                        <th>Modelo</th>
                        <th>Localidad</th>
                        <th>DP</th>
                        <th>Cliente</th>
                        <th>Total</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                    
                    include "Conn/conexion.php";
                    $sql=$conexion->query(" select *from devices");
                    while($datos = $sql->fetch_object()) { ?>

                        <tr>
                            <td><?= $datos->serial?></td>
                            <td><?= $datos->model?></td>
                            <td><?= $datos->customer?></td>
                            <td><?= $datos->location?></td>
                            <td><?= $datos->dp?></td>
                            <td><?= $datos->total?></td>
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>


</body>
</html>