<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/proyecto-j/CSS/list.css">
    <link rel="stylesheet" href="http://localhost/proyecto-j/CSS/panel.css">
    <link rel="icon" href="../IMG/logo.png">
    <title>ListParts</title>
</head>
<body style="background: #f3f3f3;">
    
<!--
        <header class="header">
            <nav>
                <ul class="nav-link">
                    <div class="logo">
                        <img src="../IMG/jquery-logo-120 (1).png" alt="">
                    </div>
                  
                    <div style="margin-left: 18px; margin-top: -10%;" class="li-nav">
                        <li><a href="../index.html"><i style="margin-top: 5px;" class='bx bxs-widget'></i>Dashboard</a></li>
                        <li><a href="../clientes.html"><i style="margin-top: 5px;" class='bx bxs-user'></i>Clientes</a></li>
                        <li><a href="../report.html"><i style="margin-top: 5px;" class='bx bxs-report' ></i>Report</a></li>
                        <li><a href="../devices.html"><i style="margin-top: 5px;" class='bx bxs-printer'></i>Devices</a></li>
                        <li><a href="../counter.html"><i style="margin-top: 5px;" class='bx bx-slider-alt'></i>Counter</a></li>
                        <li><a href="../DP.html"><i style="margin-top: 5px;" class='bx bxs-cog'></i>ListParts</a></li>
                    </div>
                </ul>
            </nav>
        </header>
        -->


           <div class="title">
                <a href=""><p>ListPart</p></a>
           </div>


            <div class="public">
                <img src="../IMG/XeroxLogo.png" alt="">
            </div>


            <div class="col-lg-3 col-6 text-left">
                <form action="" method="GET">
                    <div class="input-group">
                        <input type="text" name="busqueda" class="form-control" placeholder="Filtrar Producto...">
                        <input type="submit" name="filter" value="Filtrar">
                        <div class="input-group-append">
                        </div>
                    </div>
                </form>
            </div>
          
            <?php
            if(isset($_GET['filter'])) {
                $busqueda = $_GET['busqueda'];

                $consulta = $con->query(" select * from listpart where PartN like '%$busqueda%' ");
                
                while ($row = $consulta->fetch_array()) {
                    echo $row['listpart'].'<br>';
                }
            }
            
            ?>



            <?php
            include '../ListPart/modelo/conexion.php';
            include '../ListPart/controlador/vistaData.php';
            
            ?>


           <div style="margin-left: 180px; margin-top: 80px; font-size: 17px;" class="container">
                <form class="col-3" method="POST">
           <div class="container-vistas">
               <!-- <div class="col-25"> -->
                    <table class="table table-bordered">

                    <thead class="bg-info">
                        <tr>
                            <th class="col">PartNumber</th>
                            <th class="col">E/A/S</th> 
                            <th class="col">Model</th>
                            <th class="col">Segment</th>
                            <th class="col">Mo/Co</th>
                            <th class="col">Description</th>
                            <th class="col">Yield</th>
                            <th class="col">Region</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "modelo/conexion.php";
                        $sql=$conexion->query( "select *from listpart" );
                        while($datos = $sql->fetch_object()){ ?>
                    
                        <tr>
                            <td><?= $datos->PartN?></td>
                            <td><?= $datos->EAS?></td>
                            <td><?= $datos->Model?></td>
                            <td><?= $datos->SeG?></td>                       
                            <td><?= $datos->Mo_Co?></td>
                            <td><?= $datos->DesC?></td>
                            <td><?= $datos->PerF?></td>
                            <td><?= $datos->Region?></td>
                        </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            </div>












<br>
<br>
<br>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>