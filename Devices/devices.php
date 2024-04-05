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
                            <h4 style="font-size: 50px; margin-top: -10%;"><a style="color: #000; text-decoration: none;" 
                            href="../Dashboard.html">J-PRD</a></h4>
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
                                -->
                                
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

                    <!--satrt search JS-->
                    </form>
                    <div class="container-fluid">
                    <form class="d-flex">
                        <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
                        placeholder="Buscar">
                        <hr>
                        </form>
                    </div>
                    
                    <br>
                    <!--END search JS-->


                    <!--SATRT PLUGINS (FILTROS)-->

                        <div class="plugins-filter">
                        <form action="devices.php" method="GET">

                            <div class="btn-group" role="group">
                                <select class="btn btn-primary dropdown-toggle" name="model" id="model">
                                    <option value="">Filtrar Modelo</option>
                                    <option value="C405">C405</option>
                                    <option value="wc3655">wc3655</option>
                                    <option value="wc3315">wc3315</option>
                                    <option value="wc3655">wc3655</option>
                                    <option value="b405">b405</option>
                                </select>
                            </div>

                            <div class="btn-group" role="group">
                                <select class="btn btn-primary dropdown-toggle" name="customer" id="customer">
                                    <option value="">Filtrar Cliente</option>
                                    <option value="MI BANCO, BANCO MICROFINACIERO, C.A.">MI BANCO</option>
                                    <option value="BANCO PROVINCIAL,S.A BANCO UNIVERSAL">BANCO PROVINCIAL,S.A BANCO UNIVERSAL</option>
                                    <option value="SIEMENS ENERGY, S.A.">SIEMENS</option>
                                    <option value="CORPORACION XDV">CORPORACION XDV</option>
                                    <option value="A.C. CENTRO MEDICO DOCENTE LA TRINIDAD">CENTRO MEDICO DOCENTE</option>
                                    <option value="SEGUROS VENEZUELA, C.A.">SEGUROS VENEZUELA</option>
                                    <option value="MMS COMUNICACIONES">MMS COMUNICACIONES</option>
                                    <option value="C.A. CIGARRERA BIGOTT SUCS">C.A. CIGARRERA BIGOTT SUCS</option>
                                    <option value="AGROBIGOTT, C.A.">AGROBIGOTT, C.A.</option>
                                    <option value="FUNDACION BIGOTT">FUNDACION BIGOTT</option>
                                    <option value="DISTRIBUIDORA BIGOTT, C.A.">DISTRIBUIDORA BIGOTT, C.A.</option>
                                    <option value="Farmatodo C.A.">Farmatodo C.A.</option>
                                    <option value="CERVECERIA POLAR, C.A">CERVECERIA POLAR, C.A</option>
                                    <option value="PEPSI-COLA VENEZUELA,C.A.">PEPSI-COLA VENEZUELA,C.A.</option>
                                    <option value="FUNDACION DANAC">FUNDACION DANAC</option>
                                    <option value="ALIMENTOS POLAR COMERCIAL C.A.">ALIMENTOS POLAR COMERCIAL C.A.</option>
                                    <option value="DHL FLETES AEREOS C.A">DHL FLETES AEREOS C.A</option>
                                    <option value="DHL EXPRESS ADUANA VENEZUELA, C.A">DHL EXPRESS ADUANA VENEZUELA, C.A</option>
                                    <option value="INVERSORA LOCKEY C.A.">INVERSORA LOCKEY C.A.</option>
                                    <option value="MERCADOLIBRE VENEZUELA, S.R.L.">MERCADOLIBRE VENEZUELA, S.R.L.</option>
                                    <option value="VENSECAR INTERNACIONAL, C.A.">VENSECAR INTERNACIONAL, C.A.</option>
                                    <option value="Corporacion Andina de">Corporacion Andina de</option>
                                    <option value="MEDICOS UNIDOS LOS JABILLOS, C.A">MEDICOS UNIDOS LOS JABILLOS, C.A</option>
                                    <option value="CIRION TECHNOLOGIES, S.A. (Centurilink)">CIRION TECHNOLOGIES, S.A. (Centurilink)</option>
                                    <option value="MANUFACTURAS DE PAPEL CA (MANPA) SACA">MANUFACTURAS DE PAPEL CA (MANPA) SACA</option>
                                    <option value="VENSECAR INTERNACIONAL, C.A.">VENSECAR INTERNACIONAL, C.A.</option>
                                    <option value="AVICOLA LA GUASIMA, C.A">AVICOLA LA GUASIMA, C.A</option>
                                    <option value="HUAWEI TECHNOLOGIES DE VENEZUELA, S.A.">HUAWEI</option>
                                    <option value="CONSORCIO GRANO ALTO">CONSORCIO GRANO ALTO</option>
                                    <option value="PASTAS CAPRI">PASTAS CAPRI</option>
                                    <option value="TODOTICKET 2004,C.A.">TODOTICKET 2004,C.A.</option>
                                    <option value="BBVA SEGUROS C.A">BBVA SEGUROS C.A</option>
                                    <option value="PERFUMES FACTORY, C.A">PERFUMES FACTORY, C.A</option>
                                    <option value="CONS. DE VALORES E INVERS COVAIN C.A.">CONS. DE VALORES E INVERS COVAIN C.A.</option>
                                    <option value="JOHN CRANE VENEZUELA, C.A.">JOHN CRANE VENEZUELA, C.A.</option>
                                    <option value="Empresas Tecnoconsult Grupo Tecno, S.A">Empresas Tecnoconsult Grupo Tecno, S.A</option>
                                    <option value="CIRION TECHNOLOGIES, S.A. (Centurilink)">CIRION TECHNOLOGIES, S.A. (Centurilink)</option>
                                    <option value="AMWAY DE VENEZUELA LLC">AMWAY DE VENEZUELA LLC</option>
                                    <option value="DEFENSA PUBLICA">DEFENSA PUBLICA</option>
                                    <option value="OSTOS VELÁZQUEZ & ASOCIADOS">OSTOS VELÁZQUEZ & ASOCIADOS</option>
                                    <option value="TRANSPORTE POLAR">TRANSPORTE POLAR</option>
                                    <option value="PROVENCESA, S.A">PROVENCESA, S.A</option>
                                    <option value="DIVISION 365 SEGURIDAD A.C.">DIVISION 365 SEGURIDAD A.C.</option>
                                    <option value="ASO CIV CTRO NUT INFAN ANT">ASO CIV CTRO NUT INFAN ANT</option>
                                    <option value="XEROFFICE MONAGAS, C.A">XEROFFICE MONAGAS, C.A</option>
                                    <option value="GOLCOPY 2010, C.A.">GOLCOPY 2010, C.A.</option>
                                    <option value="LABORATORIOS LETI S.A.V">LABORATORIOS LETI S.A.V</option>
                                    <option value="EMBAJADA DE PANAMA">EMBAJADA DE PANAMA</option>
                                    <option value="SABORES DEL MAR 2022, C.A">SABORES DEL MAR 2022, C.A</option>
                                    <option value="EMBAJADA DE BRASIL">EMBAJADA DE BRASIL</option>
                                    <option value="OMNITEC INTEGRADORES C.A.">OMNITEC INTEGRADORES C.A.</option>
                                    <option value="MPP DE ECON.FINANZAS Y COMERCIO EXTERIOR (ONT)">ONT</option>
                                    <option value="PROYECTOS SURADEM">PROYECTOS SURADEM</option>
                                    <option value="ITOCHU VENEZUELA S.A.">ITOCHU VENEZUELA S.A.</option>
                                    <option value="">  </option>
                                </select>
                            </div>

                            <div class="btn-group" role="group">
                                <select class="btn btn-primary dropdown-toggle" name="location" id="location">
                                    <option value="">Filtrar Localidad</option>
                                    <option value="mirandino">mirandino</option>
                                    <option value="miranda">miranda</option>
                                    <option value="bolivar">bolivar</option>
                                    <option value="distrito capital">distrito capital</option>
                                </select>
                            </div>
                        </div>
    

                        <div class="btn-filter">
                        <div class="btn-group" role="group">
                                <button type="submit" name="search" id="search" class="btn btn-primary" value="search">Aplicar Filtros</button>
                            </div>
                            

                            <div class="btn-group" role="group">
                                <button type="submit" name="reset" id="reset" class="btn btn-primary" value="reset">Limpiar Filtros</button>
                            </div>
                        
                        </form>
                    </div>
                                   
                    
                    <br>
                    <table style="margin-left: 130px; margin-top: 70px;" class="table table-bordered table_id ">

                        
                        <thead>    
                            <tr>
                                <th>RIF</th>
                                <th>Serial</th>
                                <th>Modelo</th>
                                <th>Cliente</th>
                                <th>DP</th>
                                <th>Localidad</th>
                                <th>Region</th>
                                <th>Total</th>
                            </tr>
                        </thead>

                        <tbody>

                    <?php

                    $conexion=mysqli_connect("localhost","root","","pj");               
                    $SQL="SELECT devices.rif, devices.serial, devices.model, devices.customer, devices.dp, devices.location, devices.region,
                    devices.total FROM devices
                    $where";
                    $dato = mysqli_query($conexion, $SQL);

                    include "search.php";
                    
                    if($dato -> num_rows >1){
                    while($fila=mysqli_fetch_array($dato)){
                    
                    ?>
                        <tr>
                            <td><?php echo $fila['rif']; ?></td>
                            <td><?php echo $fila['serial']; ?></td>
                            <td><?php echo $fila['model']; ?></td>
                            <td><?php echo $fila['customer']; ?></td>
                            <td><?php echo $fila['dp']; ?></td>
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

                        
                    <script src="../ListPart/controlador/script.js" ></script>    
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</body>
</html>