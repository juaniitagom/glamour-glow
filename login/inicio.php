<?php
require_once '../db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Glamour Glow-Inicia Sesion</title>
        <link rel="stylesheet" href="../assets/css/styleinicio.css">
        <link rel="icon" href="../assets/imagenes/kiss-logo.png">
</head>
                    

    <form method="post">
       <h3><p>Inicio De Sesion</p><h3>

        <div class="input-wrapper">
            <input type="text" name="usuario" placeholder="Nombre de usuario">
            <img class=input-icon src="../assets/imagenes/nombre.png" alt="">
        </div>
        <div class="input-wrapper">
            <input type="password" name="contraseña" placeholder="Contraseña">
            <img class=input-icon src="../assets/imagenes/candado.png" alt="">
        </div>
        <div>
            <ul>
        <button type="submit" onclick="verificarusuario()">Iniciar sesion</button>
        
        <button><a href="../login/registro.php">Crear cuenta</a></button>
        
        

        </div>
</form>


       
</body>
</html>



