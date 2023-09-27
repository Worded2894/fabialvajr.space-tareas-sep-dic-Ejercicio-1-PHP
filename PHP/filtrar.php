<?php
/*Se pide desarrollar un programa que permita el ingreso de los datos antes mencionado para determinar los siguientes puntos:
* Total de empleados del sexo femenino
* Total de hombres casados que ganan más de 2500 Bs.
*Total de mujeres viudas que ganan más de 1000 Bs.
* Edad promedio de los hombres.
Subir el código al github y enviar el enlace del mismo al correo juan.medina@urbe.edu.ve */

session_start();

if(isset($_POST['btnf'])){
    $resultados = array();
    foreach($_SESSION['empleados']['Edad'] as $indice => $edad){
        if(($_POST['selecEdad'] === "" || in_array($edad, explode(',', $_POST['selecEdad']))) &&
           ($_POST['selecEstadoCivil'] === "4" || $_SESSION['empleados']['Estado Civil'][$indice] == $_POST['selecEstadoCivil']) &&
           ($_POST['selecSexo'] === "5" || $_SESSION['empleados']['Sexo'][$indice] == $_POST['selecSexo']) &&
           ($_POST['selecSueldo'] === "4" || $_SESSION['empleados']['Sueldo'][$indice] == $_POST['selecSueldo'])){
            $resultados[] = array(
                'Nombre' => $_SESSION['empleados']['Nombre'][$indice],
                'Apellido' => $_SESSION['empleados']['Apellido'][$indice],
                'Edad' => $edad,
                'Estado Civil' => $_SESSION['empleados']['Estado Civil'][$indice],
                'Sexo' => $_SESSION['empleados']['Sexo'][$indice],
                'Sueldo' => $_SESSION['empleados']['Sueldo'][$indice]
            );
        }
    }

    // Imprimir los resultados
    $mapeoEstadoCivil = array(
        "1" => "Soltero(a)",
        "2" => "Casado(a)",
        "3" => "Viudo(a)"
    );
    
    $mapeoSexo = array(
        "1" => "Femenino",
        "2" => "Masculino",
        "3" => "Jugador de LoL",
        "4" => "K-Poper"
    );
    
    $mapeoSueldo = array(
        "1" => "Menos de 1000 Bs",
        "2" => "Entre 1000 y 2500 Bs",
        "3" => "Más de 2500 Bs"
    );
    
    foreach($resultados as $resultado){
        echo 'Nombre: '.$resultado['Nombre'].'<br>';
        echo 'Apellido: '.$resultado['Apellido'].'<br>';
        echo 'Edad: '.$resultado['Edad'].'<br>';
        echo 'Estado Civil: '.$mapeoEstadoCivil[$resultado['Estado Civil']].'<br>';
        echo 'Sexo: '.$mapeoSexo[$resultado['Sexo']].'<br>';
        echo 'Sueldo: '.$mapeoSueldo[$resultado['Sueldo']].'<br>';
        echo '<hr>';
    }

    // Contar los resultados
    echo 'Se encontraron '.count($resultados).' resultados para esta búsqueda. <br>';

    // Calcular la media de las edades
    $sumaEdades = 0;
    foreach($resultados as $resultado){
        $sumaEdades += $resultado['Edad'];
    }
    $mediaEdades = $sumaEdades / count($resultados);

    echo 'La media de las edades es: '.$mediaEdades;
}




    /*
    if (!isset($_SESSION['empleados'])) {
        
    }
    */

    /*
    $edad = $_POST['selecEdad']; 
    $estadoCivil = $_POST['selecEstadoCivil'];
    $sexo = $_POST['selecSexo'];      
    $sueldo = $_POST['selecSueldo'];
    */

?>