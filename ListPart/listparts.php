<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Marco Robles">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/proyecto-j/CSS/style.css">
    <link rel="stylesheet" href="http://localhost/proyecto-j/CSS/panel.css">
    <link rel="icon" href="http://localhost/proyecto-j/IMG/logo.png">
    <title>ListPart</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>


<body>
            <header class="header">
                    <nav>
                        <ul class="nav-link">
                            <div class="logo">
                                <img src="http://localhost/proyecto-j//IMG/jquery-logo-120 (1).png" alt="">
                            </div>
                            <li><a href="http://localhost/proyecto-j/index.html"><i class='bx bxs-widget'></i>Dashboard</a></li>
                            <li><a href="http://localhost/proyecto-j/clientes.html"><i class='bx bxs-user'></i>Clientes</a></li>
                            <li><a href="http://localhost/proyecto-j/report.html"><i class='bx bxs-report' ></i>Report</a></li>
                            <li><a href="http://localhost/proyecto-j/devices.html"><i class='bx bxs-printer'></i>Devices</a></li>
                            <li><a href="http://localhost/proyecto-j/counter.html"><i class='bx bx-slider-alt'></i>Counter</a></li>
                            <li><a href="http://localhost/proyecto-j//ListPart/listparts.php"><i class='bx bxs-cog'></i>ListParts</a></li>
                        </ul>
                    </nav>
                </header>



    <main>
        <div class="container py-4 text-center">
            <h2>ListPart</h2>

            <div class="row g-4">

                <div class="col-md-4 col-xl-5"></div>

                <div class="col-6 col-md-1 text-end">
                    <label for="campo" class="col-form-label">Buscar: </label>
                </div>
                <div class="col-6 col-md-3 text-end">
                    <input type="text" name="campo" id="campo" class="form-control">
                    <button type="submit" name-"enviar">Filtrar</button>
                </div>
            </div>
            <br>
            <br>
            <br>

            <div class="row py-4">
                <div class="col">
                    <table class="table table-sm table-bordered table-striped">
                        <thead>
                            <th class="sort asc">PartN</th>
                            <th class="sort asc">EAS</th>
                            <th class="sort asc">Model</th>
                            <th class="sort asc">SeG</th>
                            <th class="sort asc">Mo_Co</th>
                            <th class="sort asc">DesC</th>
                            <th class="sort asc">PerF</th>
                            <th class="sort asc">Region</th>
                        </thead>

                        <tbody >
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

           


   
</body>

</html>