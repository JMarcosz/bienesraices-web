<?php
if (!isset($_SESSION)) {
    session_start();
}
$auth = $_SESSION['login'] ?? false;

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="icon" href="/build/img/logo-pagina.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Las Mejores ofertas de inmuebles cerca de ti, contáctenos.">
    <title>Bienes Raíces</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : '' ?>">
        <div class="contenedor contenido-header">
            <div class="bar-header">
                <div class="tools">
                    <img class="dark-boton" src="/build/img/dark-mode.svg" alt="Boton-Tema">
                    <img class="menu-hamburguesa" src="/build/img/barras.svg" alt="Boton-menu">

                </div>
                <div class="bar-nav">
                    <a href="/">
                        <img src="/build/img/logo.svg" alt="Imagen-Logo">
                    </a>
                    <div class="nav">
                        <a href="anuncios.php">Anuncios</a>
                        <a href="nosotros.php">Nosotros</a>
                        <a href="contacto.php">Contacto</a>
                        <?php if ($auth) : ?>
                            <a href="cerrar-sesion.php">Cerrar Sesión</a>
                        <?php else : ?>
                            <a href="login.php">Iniciar Sesión</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <?php echo $inicio ? '<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>' : ''; ?>
        </div>

    </header>