<?php 

define('SERVER', 'localhost');
define('PASSWORD', '');
define('BD', 'kelvinwebdev');
define('USER', 'root');

$server = ("mysql:dbname=" . BD . ";host=" . SERVER);

try {
    
    $connection = new PDO($server, USER, PASSWORD);

} catch (PDOException $e) {
    echo "error de conexion" . $e;
}


?>