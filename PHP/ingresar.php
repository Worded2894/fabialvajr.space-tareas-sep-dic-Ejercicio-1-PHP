<?php

session_start();

if (!isset($_SESSION['empleados'])) {
    $_SESSION['empleados'] = Array('Nombre' => Array(), 'Apellido' => Array(), 'Edad' => Array(), 'Estado Civil' => Array(), 'Sexo' => Array(), 'Sueldo' => Array());
}

if(isset($_POST['btn']))
{   
    $nombre = $_POST['txtNombre'];
    $apellido = $_POST['txtApellido'];
    $edad = $_POST['txtEdad'];
    $estadoCivil = $_POST['txtEstadoCivil'];
    $sexo = $_POST['txtSexo'];
    $sueldo = $_POST['txtSueldo'];
    array_push($_SESSION['empleados']['Nombre'], $nombre);
    array_push($_SESSION['empleados']['Apellido'], $apellido);
    array_push($_SESSION['empleados']['Edad'], $edad);
    array_push($_SESSION['empleados']['Estado Civil'], $estadoCivil);
    array_push($_SESSION['empleados']['Sexo'], $sexo);
    array_push($_SESSION['empleados']['Sueldo'], $sueldo);

    // Incrementar el número de registros
    if (!isset($_SESSION['numRegistros'])) {
        $_SESSION['numRegistros'] = 0;
    }
    $_SESSION['numRegistros']++;

    // Almacenar el mensaje en una variable de sesión
    $_SESSION['mensaje'] = "El registro número ".$_SESSION['numRegistros']." se ha guardado de forma temporal en la sesión actual.";

    // Redirige a la misma página para evitar duplicados al recargar
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}

// Mostrar el mensaje después de la redirección
if(isset($_SESSION['mensaje'])){
    echo $_SESSION['mensaje'];
    unset($_SESSION['mensaje']);  // Eliminar el mensaje después de mostrarlo
}


/*print 'Nombre <br>';
foreach($_SESSION['empleados']['Nombre'] as $nombre){
    echo $nombre.'<br>';
}

print 'Apellido <br>';
foreach($_SESSION['empleados']['Apellido'] as $apellido){
    echo $apellido.'<br>';
}*/

?>