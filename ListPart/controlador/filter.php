<?php

require '../modelo/conexion.php';

$columns = ['PartN', 'EAS', 'Model', 'SeG', 'Mo_Co', 'DesC', 'PerF', 'Region'];
$table = "listpart";

$campo = isset($_POST['campo']) ? $conexion->real_escape_string($_POST['campo']) : null;

$sql = " SELECT  " . implode(",", $columns)."
FROM $table";

$resultado = $conexion->query($sql);
$num_rows = $resultado->num_rows;

$html = '';

if($num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>'.$rows['PartN'].'</td>';
        $html .= '<td>'.$rows['EAS'].'</td>';
        $html .= '<td>'.$rows['Model'].'</td>';
        $html .= '<td>'.$rows['SeG'].'</td>';
        $html .= '<td>'.$rows['Mo_Co'].'</td>';
        $html .= '<td>'.$rows['DesC'].'</td>';
        $html .= '<td>'.$rows['PerF'].'</td>';
        $html .= '<td>'.$rows['Region'].'</td>';
        $html .= '</tr>';

    }
}   else{
    $html .= '<tr>';
    $html .= '<td colspan="7">Sin Resultados</td>';
    $html .= '</tr>';
}

echo json_decode($html, JSON_UNESCAPED_UNICODE);