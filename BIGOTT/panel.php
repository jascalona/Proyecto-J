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
    <link rel="stylesheet" href="http://localhost/proyecto-j///CSS/FRAMEWORK/Modal.css">
    <title>BIGOTT</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/JS/CSS/framework.css">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body style="background: #fff;">
    

        <header class="header">
            <nav>
                <ul class="nav-link">
                    <div class="logo">
                        <img src="../IMG/jquery-logo-120 (1).png" alt="">
                    </div>
                    <div style="margin-left: 18px; margin-top: -10%;" class="li-nav">
                        <li><a href="../Dashboard.html"><i style="margin-top: 5px;" class='bx bxs-widget'></i>Dashboard</a></li>
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
            <a href="../HUAWEI/panel.php" style="color: brown;"><p>Cartas de Instalación</a><b>/</b></p><a href="/Mi Banco//desisntalacion/desinstalacion.html"><p>Desisntalación</p></a>
        </div>

        <?php
        include "Conn/conexion.php";
        include "controlador/delete.php";
        ?>
        
        <?php
        include "controlador/cargaData.php";
        ?>


        <!--start btn modal-->
        <div class="modal-global">
            <form action="" method="POST">
            <div class="container-modal-folder">

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalFolder" data-bs-whatever="@data">Carga de Datos</button>
                
                <div class="modal fade" id="modalFolder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Carga de Datos</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>

                        <div class="mb-3">
                            <label for="serial" class="col-form-label">Serial</label>
                            <input type="text" class="form-control" id="serial" name="serial" placeholder="Serial del equipo" required>
                        </div>

                        <div class="mb-3">
                            <label for="model" class="col-form-label">Modelo</label>
                            <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo del equipo" required>
                        </div>

                        <div class="mt-3">
                            <label for="location" class="col-form-label">Localidad</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Localidad" required>
                        </div>

                        <div class="mt-3">
                            <label for="date" class="col-form-label">Fecha</label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="Fecha de Instalacion" required>
                        </div>

                        <div class="mt-3">
                            <label for="file" class="col-form-label">File</label>
                            <input type="file"class="form-control" id="file" name="file" placeholder="Examinar" required>
                        </div>

                            <div class="mb-3">
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" name="btnCarga" value="ok" >Cargar</button>
                        </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
        </div>
        <!--end btn modal-->
        
            <div style="margin-right: 10%; margin-top: 200px; margin-left: 15% ; " class="container-vistas">
                <table class="table table-striped" >    
            
                <thead class="bg-info">
                    <tr>
                        <th class="col">id</th>
                        <th class="col">Serial</th>
                        <th class="col">Modelo</th>
                        <th class="col">Localidad</th>
                        <th class="col">Fecha</th>
                        <th class="col">file</th>
                        <th class="col"></th>
                    </tr>
            
                </thead>
                <tbody>
                    <?php
                    include "Conn/conexion.php";
                    $sql=$conexion->query(" select *from bigott ");
                    while($datos = $sql->fetch_object()){ ?>

                        <tr>
                            <td><?= $datos->id?></td>
                            <td><?= $datos->serial?></td>
                            <td><?= $datos->modelo?></td>
                            <td><?= $datos->location?></td>
                            <td><?= $datos->date?></td>
                            <td><a class="btnPre" href="../huawei/controlador/preview.php"><?= $datos->file?></a></td>
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
            




</body>
</html>