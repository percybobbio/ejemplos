<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css"> 
    <title>Formulario Contacto</title>
</head>
<body>
    <div class="wrap">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form_control" name="nombre" id="nombre" placeholder="Nombre: " value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
            <input type="email" class="form_control" name="correo" id="correo" placeholder="Correo: " value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
            <textarea name="mensaje" id="mensaje" class="form_control" placeholder="Mensaje: "><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
            <?php if (!empty($errores)) : ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
                <?php elseif ($enviado): ?>
                <div id="oculto" class="alert success">
                    <p>Enviado Correctamente</p>
                </div>
            <?php endif ?>

            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>
    </div>
</body>
</html>