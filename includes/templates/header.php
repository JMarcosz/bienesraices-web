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
            <div class="barra">
                <div class="barra-mobile">
                    <a href="/">
                        <img loading="lazy" width="300" height="200" src="/build/img/logo.svg"
                            alt="Logo tipo de vienes raíces" />
                    </a>

                    <div class="mobile-menu">
                        <img loading="lazy" width="300" height="200" src="/build/img/barras.svg" alt="menu">
                    </div>
                </div>
                <div class="dark-option">
                    <img loading="lazy" width="300" height="200" class="dark-mode-boton" src="/build/img/dark-mode.svg"
                        alt="Cambiar Tema">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div> <!-- Cierre de la barra -->
            <?php echo $inicio ? '<h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>' : ''; ?>
        </div>
        
    </header>