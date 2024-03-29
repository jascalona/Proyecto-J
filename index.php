<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="http://localhost/proyecto-j/LOGIN/login.css">
    <link rel="icon" href="http://localhost/proyecto-j//IMG/logo.png">
    <title>Login</title>
</head>
<body>
    


        <?php
        include "LOGIN/Conn/conexion.php";
        ?>



            <div style="background: #f3f3f3f3;" class="container-log">
                <form action="" method="POST" >
                    <div class="container-inter">
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
                    </div>

                        <div style="margin-top: 80px; margin-left: 30%;" class="registrar">
                            <a href="#">Registrarse</a>
                            <br>
                            <a href="#">¿Ha olvidado la clave?</a>
                            <br>
                            <a href="#">¿Necesita ayuda?</a>

                        </div>    
                </form>
            </div>

