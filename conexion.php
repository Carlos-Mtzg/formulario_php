<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'ejemplo');

$conexion = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// if ($conexion) {
//     echo "Conexion exitosa";
// } else {
//     echo "Ocurrio un error";
// }
