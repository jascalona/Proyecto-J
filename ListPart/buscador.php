<?php

session_start();
error_reporting(0);

$validar = $_SESSION['nombre'];

if( $validar == null || $validar = ''){

  header("Location: ../includes/login.php");
  die();
  
}


?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <title>Usuarios</title>
</head>
<br>
<div class="container is-fluid">





    <div class="container-fluid">
  <form class="d-flex">
			<form action="" method="GET">
			<input class="form-control me-2" type="search" placeholder="Buscar Prodcuto" 
			name="busqueda"> <br>
			<button class="btn btn-outline-info" type="submit" name="enviar"> <b>Buscar </b> </button> 
			</form>
  </div>
  <?php
            include "../ListPart/modelo/conexion.php";
            $where="";


                    if(isset($_GET['enviar'])){
                    $busqueda = $_GET['busqueda'];


                        if (isset($_GET['busqueda']))
                        {
                            $where="WHERE listpart.PartN LIKE'%".$busqueda."%' OR Model  LIKE'%".$busqueda."%'
                        OR SeG  LIKE'%".$busqueda."%'";
                        }
                    
                    }


                    ?>
                            <br>

                    <!--
                                </form>
                        <div class="container-fluid">
                    <form class="d-flex">
                        <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
                        placeholder="Buscar con JS">
                        <hr>
                        </form>
                    </div>
                    -->
                    <br>

                    
                        <table class="table table-striped table-dark table_id ">

                                    
                                            <thead>    
                                            <tr>
                                            <th>PartN</th>
                                            <th>EAS</th>
                                            <th>Model</th>
                                            <th>SeG</th>
                                            <th>Mo_Co</th>
                                            <th>DesC</th>
                                            <th>PerF</th>
                            
                                            </tr>
                                            </thead>
                                            <tbody>

                                    <?php

                    
                        $sql=$conexion->query( "select *from listpart" );
                        while($datos = $sql->fetch_object())

                    if($dato -> num_rows >0){
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



                    <td>


                 

                    </td>
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


	</body>
  </table>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
>
<script src="../ListPart/controlador/script.js"></script>




</html>