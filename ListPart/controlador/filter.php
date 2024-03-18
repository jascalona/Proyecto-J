<?php

require 'modelo/conexion.php';

$columns = ['PartN', 'EAS', 'Model', 'SeG', 'Mo_Co', 'DesC', 'PerF', 'Region'];
$table = ["listpart"];

$campo = $conexion->real_escape_string( $_POST['campo']);


?>