<?php
require_once '../db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Glamour Glow-Registro</title>
        <link rel="stylesheet" href="../assets/css/syleregistro.css">
        <link rel="icon" href="../assets/imagenes/kiss-logo.png">
</head>
<body>

    <form method="post">
       <h3><p>Registrate</p><h3>

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <img class=input-icon src="../assets/imagenes/nombre.png" alt="">
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Correo">
            <img class=input-icon src="../assets/imagenes/Gmail.png" alt="">
        </div>
        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono">
            <img class=input-icon src="../assets/imagenes/tel.png" alt="">
        </div>
        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
            <img class=input-icon src="../assets/imagenes/candado.png" alt="">
        </div>
        </div>
        <button type="submit" onclick="verificarusuario()">Registrate</button>
        
        <button><a href="../login/inicio.php">Iniciar sesion</a></button>
       
    
        
        </div>
</body>
</html>
