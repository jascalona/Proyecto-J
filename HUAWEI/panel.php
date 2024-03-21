<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/proyecto-j/CSS/panel.css">
    <link rel="icon" href="../IMG/logo.png">
    <title>HUAWEI</title>
</head>
<body style="background: #fff;">
    

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
                        <li><a href="../ListPart/listparts.php"><i style="margin-top: 5px;" class='bx bxs-cog'></i>ListParts</a></li>
                    </div>
                </ul>
            </nav>
        </header>


           <div class="title">
                <a href=""><p>Cartas de Instalación/Desinstalacion</p></a>
           </div>

        <?php
        include "modelo/conexion.php";
        include "controlador/delete.php";
        ?>

        <?php
        include "controlador/cargaData.php";
        ?>
           <div style="margin-left: 210px; margin-top: 50px; font-size: 18px;" class="container">
                <form class="col-3" method="POST">

                <div class="home-logo">
                    <h4>Instalaciones</h4>
                    <br>
                </div>
                
                <div class="inputs">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="serial" id="serial" required placeholder="Serial">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="modelo" id="modelo" required placeholder="Modelo">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" name="location" id="location" required placeholder="Localidad">
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label">Fecha</label><br>
                        <input style="border-radius: 5px;" type="date" class="form-control" name="date" id="date" required placeholder="Fecha de Carga">
                    </div>

                    <div class="mb-3">
                        <label for="file" class="form-label">Archivo</label>
                        <input type="file" class="form-control" name="file" id="name" required playaccept="file">
                    </div>
                    <br>
                    <button style="margin-bottom: 25%;" type="submit" class="btn btn-primary" name="btnCarga" value="ok">Cargar Datos</button>
                </form>
                
            

            <div class="container-vistas">
               <!-- <div class="col-25"> -->
                    <table style="border: solid 1px; width: 140%; height: auto;" class="table table-striped">

                    <thead class="bg-info">
                        <tr>
                            <th class="col">id</th> 
                            <th class="col">Serial</th>
                            <th class="col">Modelo</th>
                            <th class="col">Localidad</th>
                            <th class="col">Date</th>
                            <th class="col">File</th>
                            <th class="col"></th>
                            <th class="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "modelo/conexion.php";
                        $sql=$conexion->query( "select *from huawei" );
                        while($datos = $sql->fetch_object()){ ?>
                    
                        <tr>
                            <td><?= $datos->id?></td>
                            <td><?= $datos->serial?></td>
                            <td><?= $datos->modelo?></td>
                            <td><?= $datos->location?></td>
                            <td><?= $datos->date?></td>
                            <td><?= $datos->file?></td>
                            <td>
                                <a href="#"><i class='bx bx-envelope-open'></i></a>
                            </td>

                            <td>
                                <a href="panel.php?id=<?= $datos->id?>"><i class='bx bx-trash-alt'></i></a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
                </div>
                </div>
            </div>
        </div>


           
        <div style="height: 180px; margin-left: 56%;" class="xeroxWork">
                <img src="..//IMG/xer.jpeg" alt="">
        </div>













<br>
<br>
<br>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>