<?php
require_once '../db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Glamour Glow-Reserva</title>
        <link rel="stylesheet" href="../assets/css/syleregistro.css">
        <link rel="icon" href="../assets/imagenes/kiss-logo.png">
</head>
<body>

    <form method="post">
       <h3><p>Reserva</p><h3>

        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Nombre">
            <img class=input-icon src="../assets/imagenes/nombre.png" alt="">
        </div>  
        <div class="input-wrapper">
            <input type="int"  placeholder="Telefono">
            <img class=input-icon src="../assets/imagenes/tel.png" alt="">
        </div>
        <div class="input-wrapper">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="services" id="services" required="true" class="form-control">
		                      	<option value="">Selecciona Nuestros Servicios</option>
		                      			                       <option value="Masaje Facial">Coloracion De Cabello</option>
		                       		                       <option value="Facial de Fruta">Corte de Cabello</option>
		                       		                       <option value="Facial de Pepino">Alisado</option>
		                       		                       <option value="Manicure de Lujo">Uñas Acrilicas</option>
		                       		                       <option value="Integral de Pedicure y Coerte de Cabello">Uñas semi-permanentes</option>
		                       		                       <option value="Manicure Precio Estudiantes">Pedicure</option>
                                                              <option value="Manicure Precio Estudiantes">Maquillaje Social</option>
                                                              <option value="Manicure Precio Estudiantes">Maquillaje XVS</option>
                                                              <option value="Manicure Precio Estudiantes">maquillaje Artistico</option>
                                                        
		                       		                      
		                        
		                      </select>
		                    </div>
           </div>
        <div class="input-wrapper">
            <input type="date" name="date" placeholder="Fecha">
        </div>
        <div class="input-wrapper">
            <input type="time" name="time" placeholder="Hora">
        </div>
     
        <input class="btn" type="submit" name="register" value="Enviar">

</form>
</html>

