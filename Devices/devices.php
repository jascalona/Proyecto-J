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

                    <!--FILTRO-->
                    
                    <div class="container is-fluid" style="margin-left: 200px;" >
                        <div class="container-fluid">
                            <h4 style="font-size: 50px; margin-top: -15%;">J-PRD</h4>
                        <!-- satrt filter php-validar-funcionamiento 
                            <form class="d-flex" style="margin-top: -40px;">
                            <form action="" method="GET">
                                    <input style="margin-top: 50px; border: solid rgb(128, 125, 125, 0.324); margin-left: 150px; color: grey;" class="form-control me-2" type="search" placeholder="Buscar Producto" name="busqueda">
                                    <button style="margin-top: 50px; padding: 16px; margin-right: 290px; background-color: brown; cursor: pointer; border: none; border-radius: 5px; " type="submit" name="enviar">Buscar</button> 
                                    <button style="margin-top: 50px; background-color: brown; cursor: pointer; border: none; border-radius: 5px; margin-left: -250px; padding-right: 10px; padding-left: 10px;" type="submit" name="limpiar">Limpiar Filtro</button> 
                                </form>
                        </div>
                        <br>
                        <br>
                              
                                
                        <!--satrt php-->
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
                    $where="WHERE serial LIKE'%".$busqueda."%' OR model  LIKE'%".$busqueda."%'
                    OR customer  LIKE'%".$busqueda."%'  OR location  LIKE'%".$busqueda."%' OR region LIKE'%".$busqueda."%' ";
                    }

                    }
                    ?>
                    <br>

 
                    </form>
                    <div class="container-fluid">
                    <form class="d-flex">
                        <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
                        placeholder="Buscar">
                        <hr>
                        </form>
                    </div>
                    
                    
                    <br>
                    <table style="margin-left: 130px; margin-top: 70px;" class="table table-bordered table_id ">

                        
                        <thead>    
                            <tr>
                                <th>Serial</th>
                                <th>Modelo</th>
                                <th>Cliente</th>
                                <th>Localidad</th>
                                <th>Region</th>
                                <th>Total</th>
                            </tr>
                        </thead>

                        <tbody>

                    <?php

                    $conexion=mysqli_connect("localhost","root","","pj");               
                    $SQL="SELECT devices.serial, devices.model, devices.customer, devices.location, devices.region,
                    devices.total FROM devices
                    $where";
                    $dato = mysqli_query($conexion, $SQL);

                    if($dato -> num_rows >1){
                    while($fila=mysqli_fetch_array($dato)){
                    
                    ?>
                        <tr>
                            <td><?php echo $fila['serial']; ?></td>
                            <td><?php echo $fila['model']; ?></td>
                            <td><?php echo $fila['customer']; ?></td>
                            <td><?php echo $fila['location']; ?></td>
                            <td><?php echo $fila['region']; ?></td>
                            <td><?php echo $fila['total']; ?></td>
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

                        <!--end php-->

                        <div class="plugins-filter">
                            <div class="btn-group" role="group">
                                <button type="button" name="btn-model" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                                Filtrar Modelo
                                </button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item"><button type="submit" name="btns" >Hello</button></li>
                                <li><a class="dropdown-item" href="#">Cargar db</a></li>
                                </ul>
                            </div>
                            
                            <div class="btn-group" role="group">
                                <button type="button" name="btn-customer" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Filtrar Cliente
                                </button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cargar db</a></li>
                                <li><a class="dropdown-item" href="#">Cargar db</a></li>
                                </ul>
                            </div>
                            
                            <div class="btn-group" role="group">
                                <button type="button" name="btn-location" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Filtrar Localidad
                                </button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cargar db</a></li>
                                <li><a class="dropdown-item" href="#">Cargar db</a></li>
                                </ul>
                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" name="btn-region" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Filtrar Region
                                </button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Cargar db</a></li>
                                <li><a class="dropdown-item" href="#">Cargar db</a></li>
                                </ul>
                            </div>
                        </div>
                        
                     
                    </div>



                    <script src="../ListPart/controlador/script.js" ></script>    
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</body>
</html>