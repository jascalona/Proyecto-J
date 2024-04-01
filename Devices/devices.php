<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="jescalona">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    
    <link rel="stylesheet" href="devices.css">
    <link rel="icon" href="http://localhost/proyecto-j/IMG/logo.png">
    <title>Devices</title>
</head>
<body>
    
                
                    <div class="container-tables">
                    
                    <?php
                    include "Conn/conexion.php";
                    include "controlador/cargaData.php"
                    ?>

                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Filtrar Serial
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cargar db</a></li>
                            <li><a class="dropdown-item" href="#">Cargar db</a></li>
                            </ul>
                        </div>
                        
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Filtrar Modelo
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cargar db</a></li>
                            <li><a class="dropdown-item" href="#">Cargar db</a></li>
                            </ul>
                        </div>
                        
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Filtrar Cliente
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cargar db</a></li>
                            <li><a class="dropdown-item" href="#">Cargar db</a></li>
                            </ul>
                        </div>
                        
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Filtrar Localidad
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Cargar db</a></li>
                            <li><a class="dropdown-item" href="#">Cargar db</a></li>
                            </ul>
                        </div>

                        <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Serial</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Localidad</th>
                                <th scope="col">Region</th>  
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "Conn/conexion.php";
                            $sql=$conexion->query(" select *from devices ");
                            while($datos = $sql ->fetch_object()) { ?>
                            
                                <tr>
                                    <td><?=$datos->serial?></td>
                                    <td><?=$datos->model?></td>
                                    <td><?=$datos->customer?></td>
                                    <td><?=$datos->location?></td>
                                    <td><?=$datos->region?></td>
                                    <td><?=$datos->total?></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                        </table>
                    </div>




</body>
</html>