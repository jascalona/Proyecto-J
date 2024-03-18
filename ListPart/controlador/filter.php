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
    $html .= '<th>';
    $html .= '</tr>';
}

// Filtrado
$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $conexion = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

// Limites
$limit = isset($_POST['registros']) ? $conexion->real_escape_string($_POST['registros']) : 10;
$pagina = isset($_POST['pagina']) ? $conexion->real_escape_string($_POST['pagina']) : 0;

if (!$pagina) {
    $inicio = 0;
    $pagina = 1;
} else {
    $inicio = ($pagina - 1) * $limit;
}

$sLimit = "LIMIT $inicio , $limit";

// Ordenamiento

$sOrder = "";
if (isset($_POST['orderCol'])) {
    $orderCol = $_POST['orderCol'];
    $oderType = isset($_POST['orderType']) ? $_POST['orderType'] : 'asc';

    $sOrder = "ORDER BY " . $columns[intval($orderCol)] . ' ' . $oderType;
}

// Consulta
$sql = "SELECT SQL_CALC_FOUND_ROWS " . implode(", ", $columns) . "
FROM $table
$where
$sOrder
$sLimit";
$resultado = $conexion->query($sql);
$num_rows = $resultado->num_rows;

// Consulta para total de registro filtrados
$sqlFiltro = "SELECT FOUND_ROWS()";
$resFiltro = $conexion->query($sqlFiltro);
$row_filtro = $resFiltro->fetch_array();
$totalFiltro = $row_filtro[0];

// Consulta para total de registro
$sqlTotal = "SELECT count($id) FROM $table ";
$resTotal = $conexion->query($sqlTotal);
$row_total = $resTotal->fetch_array();
$totalRegistros = $row_total[0];

// Mostrado resultados
$output = [];
$output['totalRegistros'] = $totalRegistros;
$output['totalFiltro'] = $totalFiltro;
$output['data'] = '';
$output['paginacion'] = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $output['data'] .= '<tr>';
        $output['data'] .= '<td>' . $row['PartN'] . '</td>';
        $output['data'] .= '<td>' . $row['EAS'] . '</td>';
        $output['data'] .= '<td>' . $row['Model'] . '</td>';
        $output['data'] .= '<td>' . $row['SeG'] . '</td>';
        $output['data'] .= '<td>' . $row['Mo_Co'] . '</td>';
        $output['data'] .= '<td>' . $row['DesC'] . '</td>';
        $output['data'] .= '<td>' . $row['PerF'] . '</td>';
        $output['data'] .= '<td>' . $row['Region'] . '</td>';
        $output['data'] .= '</tr>';
    }
} else {
    $output['data'] .= '<tr>';
    $output['data'] .= '<td colspan="7">Sin resultados</td>';
    $output['data'] .= '</tr>';
}

// Paginación
if ($totalRegistros > 0) {
    $totalPaginas = ceil($totalFiltro / $limit);

    $output['paginacion'] .= '<nav>';
    $output['paginacion'] .= '<ul class="pagination">';

    $numeroInicio = max(1, $pagina - 4);
    $numeroFin = min($totalPaginas, $numeroInicio + 9);

    for ($i = $numeroInicio; $i <= $numeroFin; $i++) {
        $output['paginacion'] .= '<li class="page-item' . ($pagina == $i ? ' active' : '') . '">';
        $output['paginacion'] .= '<a class="page-link" href="#" onclick="nextPage(' . $i . ')">' . $i . '</a>';
        $output['paginacion'] .= '</li>';
    }

    $output['paginacion'] .= '</ul>';
    $output['paginacion'] .= '</nav>';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);