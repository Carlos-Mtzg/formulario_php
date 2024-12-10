<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Ejemplo por Carlos Mtz</title>
</head>

<body>
    <section>
        <h1>Registro de datos</h1>
        <form action="" method="post">
            <label for="">Nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
            <label for="">Correo Electrónico</label>
            <input type="text" name="correo" id="correo" placeholder="Correo Electrónico" required>
            <label for="">Teléfono</label>
            <input type="text" name="telefono" id="telefono" placeholder="Telefeono" required>
            <?php
            include('registrar.php')
            ?>
            <div class="btnContainer">
                <input type="submit" id="btnSend" name="register" value="Enviar">
            </div>
        </form>
    </section>
</body>

</html>
