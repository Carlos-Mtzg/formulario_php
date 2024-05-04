<?php

include('conexion.php');


if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['telefono']) >= 1) {
        $name = trim($_POST['nombre']);
        $email = trim($_POST['correo']);
        $phone = trim($_POST['telefono']);

        $consulta = "INSERT INTO usuario (nombre, correo, telefono) VALUES ('$name','$email','$phone')";

        $resultado = mysqli_query($conexion, $consulta);

        if ($resultado) {
            echo "<p>Los datos se registaron correctamente</p>";
        } else {
            echo "<p>Ocurrio un error al mandar los datos!</p>";
        }
    }
}
