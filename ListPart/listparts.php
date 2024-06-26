<!DOCTYPE html>
<html lang="es">

<head>
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
    <link rel="stylesheet" href="..//ListPart/css/busqueda.css">
    <title>ListPart</title>


    </head>
    <body>
            <header class="header">
                    <nav>
                        <ul class="nav-link">
                            <div style="margin-top:20px;" class="logo">
                                <img src="http://localhost/proyecto-j//IMG/jquery-logo-120 (1).png" alt="">
                            </div>
                            <li><a href="http://localhost/proyecto-j/Dashboard.html"><i class='bx bxs-widget'></i>Dashboard</a></li>
                            <li><a href="http://localhost/proyecto-j/clientes.html"><i class='bx bxs-user'></i>Clientes</a></li>
                            <li><a href="http://localhost/proyecto-j/report.html"><i class='bx bxs-report' ></i>Report</a></li>
                            <li><a href="http://localhost/proyecto-j/Devices/devices.php"><i class='bx bxs-printer'></i>Devices</a></li>
                            <li><a href="http://localhost/proyecto-j/counter.html"><i class='bx bx-slider-alt'></i>Counter</a></li>
                            <li><a href="http://localhost/proyecto-j//ListPart/listparts.php"><i class='bx bxs-cog'></i>ListParts</a></li>
                        </ul>
                    </nav>
                </header>


            <!--FILTER-PHP-->
                <div class="container is-fluid" style="margin-left: 215px;" >
                    <div class="container-fluid">
                        <h4 style="font-size: 50px; padding-top: 30px;">ListPart</h4>
                    <form class="d-flex" style="margin-top: -20px;">
                        <form action="" method="GET">
                                <input style="margin-top: 50px; border: solid rgb(128, 125, 125, 0.324); margin-left: 150px; color: grey;" class="form-control me-2" type="search" placeholder="Buscar Producto" name="busqueda">
                                <button style="margin-top: 50px; padding: 16px; margin-right: 290px; background-color: brown; cursor: pointer; border: none; " type="submit" name="enviar">Buscar</button> 
                                <button style="margin-top: 50px; background-color: brown; cursor: pointer; border: none; margin-left: -250px; " type="submit" name="limpiar">Limpiar Filtro</button> 
                            </form>
                    </div>

                    <?php
                    $conexion=mysqli_connect("localhost","root","","pj"); 
                    $where="";

                    if(isset($_GET['enviar'])){
                    $busqueda = $_GET['busqueda'];

                    if(isset($_GET['limpiar'])){
                        $limpiar = $_GET['busqueda'];
                    }

                    if (isset($_GET['busqueda']))
                    {
                    $where="WHERE PartN LIKE'%".$busqueda."%' OR Model  LIKE'%".$busqueda."%'
                    OR SeG  LIKE'%".$busqueda."%'  OR Region  LIKE'%".$busqueda."%' OR PerF LIKE'%".$busqueda."%' ";
                    }

                    }
                    ?>
                    <br>

                <!--FILTER 
                    </form>
                    <div class="container-fluid">
                    <form class="d-flex">
                        <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
                        placeholder="Buscar">
                        <hr>
                        </form>
                    </div>
                    JS-->
                    
                    <br>
                    <table style="margin-left: 130px; margin-top: 70px;" class="table table-bordered table_id ">

                        
                        <thead>    
                            <tr>
                                <th>PartN</th>
                                <th>EAS</th>
                                <th>Model</th>
                                <th>SeG</th>
                                <th>Mo/Co</th>
                                <th>Description</th>
                                <th>PerF</th>
                                <th>Region</th>
                            </tr>
                        </thead>

                        <tbody>

                    <?php

                    $conexion=mysqli_connect("localhost","root","","pj");               
                    $SQL="SELECT listpart.PartN, listpart.EAS, listpart.Model, listpart.SeG, listpart.Mo_Co,
                    listpart.DesC, listpart.PerF, listpart.Region FROM listpart
                    $where";
                    $dato = mysqli_query($conexion, $SQL);

                    if($dato -> num_rows >1){
                    while($fila=mysqli_fetch_array($dato)){
                    
                    ?>
                        <tr>
                        <td><?php echo $fila['PartN']; ?></td>
                        <td><?php echo $fila['EAS']; ?></td>
                        <td><?php echo $fila['Model']; ?></td>
                        <td><?php echo $fila['SeG']; ?></td>
                        <td><?php echo $fila['Mo_Co']; ?></td>
                        <td><?php echo $fila['DesC']; ?></td>
                        <td><?php echo $fila['PerF']; ?></td>
                        <td><?php echo $fila['Region']; ?></td>

                        </tr>


                    <?php
                    }
                    }else{

                    ?>
                    <tr class="text-center">
                    <td colspan="16">No existen registros</td>
                    </tr>

                    <?php
    
                    }

                    ?>
                            


   

            <script src="../ListPart/controlador/script.js" ></script>    
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</body>
</html>