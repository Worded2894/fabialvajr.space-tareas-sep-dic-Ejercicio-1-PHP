<?php
/*Dado el siguiente conjunto de datos relativos a 5 empleados de una empresa:

*Nombre y Apellido
* Edad de la persona
* Estado civil
    - Soltero(a)
    - Casado(a)
    - Viudo(a)
* Sexo
    - Femenino
    - Masculino
* Sueldo
    - Menos de 1000 Bs.
    - Entre 1000 y 2500 Bs.
    - Más de 2500 Bs.

Se pide desarrollar un programa que permita el ingreso de los datos antes mencionado para determinar los siguientes puntos:
* Total de empleados del sexo femenino
* Total de hombres casados que ganan más de 2500 Bs.
*Total de mujeres viudas que ganan más de 1000 Bs.
* Edad promedio de los hombres.
Subir el código al github y enviar el enlace del mismo al correo juan.medina@urbe.edu.ve */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>

     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <div class="container">
        <h2>Ingrese los datos del empleado</h2>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label for=" ">Nombre</label>
            <input type="text" name="txtNombre" id="" required>
            <label for=" ">Apellido</label>
            <input type="text" name="txtApellido" id="" required>
            <label for=" ">Edad</label>
            <input type="text" name="txtEdad" id="" placeholder="18,50,99" pattern="^[0-9]+([,]?[0-9]+)*$" required><br>
            
            <label for=" ">Estado Civil</label>
                <select  class="browser-default" name="txtEstadoCivil" id="">
                    <option value="1">Soltero(a)</option>
                    <option value="2">Casado(a)</option>
                    <option value="3">Viudo(a)</option>  
                </select>

            <label for=" ">Sexo</label>
            <div class="input-field col s12">
                <select class="browser-default" name="txtSexo" id="">
                    <option value="1">Femenino</option>
                    <option value="2">Masculino</option>
                    <option value="3">Jugador de LoL</option>
                    <option value="4">K-Poper</option>  
                </select>
            </div>

            <label for=" ">Sueldo</label>
            <div class="input-field col s12">
                <select class="browser-default" name="txtSueldo" id="">
                    <option value="1">Menos de 1000 Bs</option>
                    <option value="2">Entre 1000 y 2500 Bs</option>
                    <option value="3">Más de 2500 Bs</option>  
                </select>
            </div>

            <br><input type="submit" value="Registrar" name="btn">
        </form> 
        <form action="filtrar.php">
            <input type="submit" value="Filtrar">
        </form>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
	
	<br>
        <?php
        include_once('PHP/ingresar.php')
        ?>
    </div> 
</body>
</html>