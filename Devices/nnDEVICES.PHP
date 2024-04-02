<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBA</title>
</head>
<body>
    

        <?php
        include "Conn/conexion.php";
        ?>

        <form style="display: flex; justify-content: center; margin-top: 6%;" action="search.php" method="GET">
            <input type="text" name="search" placeholder="Search...">


            <select name="model" id="model">
                <option value="">Modelos</option>
                <option value="C405">C405</option>
                <option value="wc3655">wc3655</option>
                <option value="wc3315">wc3315</option>
                <option value="wc3655">wc3655</option>
                <option value="b405">b405</option>
            </select>

            <select name="customer" id="customer">
                <option value="">Filter Customer</option>
                <option value="mi banco">mi banco</option>
                <option value="farmatodo">farmatodo</option>
                <option value="loky">loky</option>
                <option value="caf">caf</option>
                <option value="polar">polar</option>
            </select>

            <select name="location" id="location">
                <option value="">Filtrar Localidad</option>
                <option value="mirandino">mirandino</option>
                <option value="miranda">miranda</option>
                <option value="bolivar">bolivar</option>
                <option value="distrito capital">distrito capital</option>
            </select>

    <!--
            <select name="region" id="region">
                <option value="">Filtrar Region</option>
                <option value="puerto la cruz">puerto la cruz</option>
                <option value="guatire">guatire</option>
                <option value="los teques">los teques</option>
                <option value="alicante">alicante</option>
                <option value="caracas">caracas</option>
            </select>
    -->

            <input type="submit" value="search">
        </form>


</body>
</html>