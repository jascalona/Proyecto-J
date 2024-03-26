<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost/proyecto-j//LOGIN/login.css">
    <link rel="icon" href="http://localhost/proyecto-j//IMG/logo.png">
    <title>Login</title>
</head>
<body>
    


        <?php
        include "LOGIN/Conn/conexion.php";
        ?>



            <div class="container-log">
                <form action="" method="POST" >
                
                    <p>Socios-Iniciar sesión con su usuario de red</p>

                    <div class="col-3">
                            <label for="user">Usuario</label><br><br>
                            <input type="text" name="usuario" id="usuario" placeholder="Ingrese su Usuario" required>
                        </div>
                    
                    <div class="col-3">
                        <label for="password">Contraseña</label><br><br>
                        <input type="password" name="password" id="password" placeholder="Ingrese su Contraseña" required>
                    </div>

                    <button type="submit" name="btn-ingrese" id="btn-ingrese">Ingresar</button>
                </form>
            </div>

