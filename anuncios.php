<?php
require 'includes/app.php';
incluirTemplate('header');
//Validar si hay propiedades
?>

<main class="contenedor seccion">

    <section class="seccion contenedor">
        <?php
        $limite = 100;
        include "includes/templates/anuncios.php";
        ?>
    </section>

</main>

<?php
incluirTemplate('footer');
?>