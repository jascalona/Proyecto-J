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
                            


   