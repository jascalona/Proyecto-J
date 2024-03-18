<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <title>Document</title>
</head>
<body>
    
            <style>
                table, th td{
                    border:  1px solid;
                }
            
                table {
                    width: 80%;
                    border-collapse: collapse;
                }  

            </style>

            <?php
            include '../ListPart/modelo/conexion.php';
            include '../ListPart/controlador/filter.php';
            ?>

            <form action="" method-"POST">
                <label for="campo">Buscar:</label>
                <input type="text" name="campo" id="campo">
            </form>



            <table>
                <thead>
                        <th class="col">PartNumber</th>
                        <th class="col">E/A/S</th> 
                        <th class="col">Model</th>
                        <th class="col">Segment</th>
                        <th class="col">Mo/Co</th>
                        <th class="col">Description</th>
                        <th class="col">Yield</th>                            <th class="col">Region</th>
                </thead>
            </table>

            <tbody id="content">

            </tbody>


</body>
</html>