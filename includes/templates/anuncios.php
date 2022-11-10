<?php

require "includes/config/database.php";
$db = conectarDB();
$query = " SELECT * FROM propiedades LIMIT ${limite}; ";
$resultado = mysqli_query($db, $query);

?>


<div class="contenedor-anuncios">
  <?php while ($propiedad = mysqli_fetch_assoc($resultado)) : ?>
    <div class="anuncio">
      <img loading="lazy" width="300" height="200" src="/imagenes/<?php echo $propiedad["imagen"] ?>" alt="Anuncio 3" />
      <div class="contenido-anuncio">
        <h3><?php echo $propiedad["titulo"] ?></h3>
        <p>
          <?php echo $propiedad["descripcion"] ?>
        </p>
        <p class="precio">$<?php echo number_format($propiedad["precio"], 2); ?></p>
        <ul class="iconos-caracteristicas">
          <li>
            <img loading="lazy" width="300" height="200" class="icono" src="build/img/icono_wc.svg" alt="icono wc" />
            <p><?php echo $propiedad["wc"] ?></p>
          </li>
          <li>
            <img loading="lazy" width="300" height="200" class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
            <p><?php echo $propiedad["estacionamiento"] ?></p>
          </li>
          <li>
            <img loading="lazy" width="300" height="200" class="icono" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
            <p><?php echo $propiedad["habitaciones"] ?></p>
          </li>
        </ul>

        <a href="anuncio.php?id=<?php echo $propiedad["id"] ?>" class="boton-amarillo-block">
          Ver Propiedad
        </a>
      </div>
      <!-- Contenido anuncio -->
    </div>
    <!-- Anuncio -->
  <?php endwhile; ?>
</div>
<!-- contenedor de anuncios -->