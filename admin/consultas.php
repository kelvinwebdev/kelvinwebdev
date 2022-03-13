<?php

include("../config/bd.php");

// SOBRE MI
$descripcion = (isset($_POST['descripcion'])) ? $_POST['descripcion'] : "";


if (isset($_POST['descripcion'])) {
    $sql = $connection->prepare("UPDATE `sobremi` SET `descripcion` = '$descripcion' WHERE `sobremi`.`id` = 7;");

    $sql->execute();
    header("location: admin.php");
}

// Habilidades
$habilidad = (isset($_POST['habilidad'])) ? $_POST['habilidad'] : "";
$porcentaje = (isset($_POST['porcentaje'])) ? $_POST['porcentaje'] : "";



if (isset($_POST['habilidad']) && $_POST['porcentaje']) {
    $sql = $connection->prepare("INSERT INTO habilidades (habilidad, porcentaje) VALUES('$habilidad', '$porcentaje')");
    $sql->execute();
    header("location: admin.php");
}


// educacion
$fecha = (isset($_POST['fechaEduc'])) ? $_POST['fechaEduc'] : "";
$nombre = (isset($_POST['nombreEduc'])) ? $_POST['nombreEduc'] : "";
$descripcionEduc = (isset($_POST['descripcionEduc'])) ? $_POST['descripcionEduc'] : "";




if (isset($_POST['fechaEduc']) && $_POST['nombreEduc'] && $_POST['descripcionEduc']) {
    $sql = $connection->prepare("INSERT INTO educacion (fecha, nombre, descripcion) VALUES('$fecha', '$nombre', '$descripcionEduc')");
    $sql->execute();
    header("location: admin.php");
}


// portafolio
$portada = (isset($_FILES['portada']['name'])) ? $_FILES['portada']['name'] : "";

$screen = (isset($_FILES['screen']['name'])) ? $_FILES['screen']['name'] : "";

$titulo = (isset($_POST['titulo'])) ? $_POST['titulo'] : "";

$descripcionPort = (isset($_POST['descripcionPro'])) ? $_POST['descripcionPro'] : "";

$enlace = (isset($_POST['enlace'])) ? $_POST['enlace'] : "";

if (isset($_FILES['portada']['name']) && ($_FILES['screen']['name']) && $_POST['titulo'] && $_POST['descripcionPro'] && $_POST['enlace'])  {
    

$fechaport = new DateTime();

$nombreArchivoport = ($portada != "") ? $fechaport->getTimestamp() . "_" . $_FILES['portada']['name'] : "img.png";

$tmpImageport = $_FILES['portada']['tmp_name'];

if ($tmpImageport != "") {

    move_uploaded_file($tmpImageport, "../img/" . $nombreArchivoport);
}

// screen

$fechass = new DateTime();

$nombreArchivoss = ($screen != "") ? $fechass->getTimestamp() . "_" . $_FILES['screen']['name'] : "img.png";

$tmpImagess = $_FILES['screen']['tmp_name'];

if ($tmpImagess != "") {

    move_uploaded_file($tmpImagess, "../img/" . $nombreArchivoss);
}

    $sql = $connection->prepare("INSERT INTO portafolio (portada, titulo, imagen, enlace, descripcion) VALUES('$nombreArchivoport', '$titulo', '$nombreArchivoss', '$enlace', '$descripcionPort')");

    $sql->execute();
    header("location: admin.php");

}












// testimonio
$nombreTest = (isset($_POST['nombreTest'])) ? $_POST['nombreTest'] : "";
$emailTest = (isset($_POST['emailTest'])) ? $_POST['emailTest'] : "";


$fotoTestimonio = (isset($_FILES['fotoTest']['name'])) ? $_FILES['fotoTest']['name'] : "";

$message = (isset($_POST['message'])) ? $_POST['message'] : "";


if (isset($_FILES['fotoTest']['name']) && isset($_POST['emailTest']) && isset($_POST['nombreTest']) && isset($_POST['message']))  {
    

    $fechatest = new DateTime();
    
    $nombreArchivotest = ($fotoTestimonio != "") ? $fechatest->getTimestamp() . "_" . $_FILES['fotoTest']['name'] : "img.png";
    
    $tmpImagetest = $_FILES['fotoTest']['tmp_name'];
    
    if ($tmpImagetest != "") {
    
        move_uploaded_file($tmpImagetest, "../img/" . $nombreArchivotest);
    }
    
    
    
        $sql = $connection->prepare("INSERT INTO testimonios (nombre, testimonio, imagen, email) VALUES('$nombreTest', '$message', '$nombreArchivotest', '$emailTest')");
    
        $sql->execute();
        echo "<script>alert('Muchas gracias por tu testimonio...! Fue un placer trabajar contigo!')</script>";
        header("location: ../index.php");
    
    }
    