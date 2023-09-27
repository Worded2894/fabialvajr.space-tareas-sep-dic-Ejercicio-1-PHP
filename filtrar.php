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
        <h2>Filtrar Datos de Empleados</h2>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <label for=" ">Edad</label>
            <input type="text" name="selecEdad" id="" placeholder="18,50,99" pattern="^([0-9]+([,]?[0-9]+)*)?$">
            
            <label for=" ">Estado Civil</label>
                <select class="browser-default" name="selecEstadoCivil" id="">
                    <option value="4">No contar</option>
                    <option value="1">Soltero(a)</option>
                    <option value="2">Casado(a)</option>
                    <option value="3">Viudo(a)</option>
                </select>
            
            <label for=" ">Sexo</label>
                <select class="browser-default" name="selecSexo" id="">
                    <option value="5">No contar</option>
                    <option value="1">Femenino</option>
                    <option value="2">Masculino</option>
                    <option value="3">Jugador de LoL</option>
                    <option value="4">K-Poper</option>
                </select>

            <label for=" ">Sueldo</label>
                <select class="browser-default" name="selecSueldo" id="">
                    <option value="4">No contar</option>
                    <option value="1">Menos de 1000 Bs</option>
                    <option value="2">Entre 1000 y 2500 Bs</option>
                    <option value="3">Más de 2500 Bs</option>
                </select>

            <br><input type="submit" value="Filtrar" name="btnf">
        </form> 
        <form action="index.php">
            <input type="submit" value="Registrar">
        </form>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
	
	<?php
        include_once('PHP/filtrar.php')
        ?>
    </div>
</body>
</html>