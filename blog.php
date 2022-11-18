<?php
require 'includes/app.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h1>Blog</h1>

  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpeg" type="image/jpeg" />
          <img loading="lazy" width="300" height="200" src="build/img/blog1.jpg" alt="Texto Entrada Blog" />
        </picture>
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.php">
        <h4>Terraza en el techo de tu casa.</h4>
        <p class="informacion-meta">
          Escrito el: <span>18/08/2022</span> por: <span>Jose Perez</span>
        </p>
        <p>
          Consejos para construir una terraza en el techo de tu casa con
          los mejores materiales y ahorrando dinero.
        </p>
      </a>
    </div>
  </article>

  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <picture>
          <source srcset="build/img/blog2.webp" type="image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpeg" />
          <img loading="lazy" width="300" height="200" src="build/img/blog2.jpg" alt="Texto Entrada Blog" />
        </picture>
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.php">
        <h4>Guía para la decoración de tu hogar.</h4>
        <p class="informacion-meta">
          Escrito el: <span>19/08/2022</span> por:
          <span>Juana Gonzales</span>
        </p>
        <p>
          Maximiza el espacio en tu hogar con esta guía, aprende a
          combinar muebles y colores para darle vida a tu espacio.
        </p>
      </a>
    </div>
  </article>

  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <picture>
          <source srcset="build/img/blog3.webp" type="image/webp" />
          <source srcset="build/img/blog3.jpeg" type="image/jpeg" />
          <img loading="lazy" width="300" height="200" src="build/img/blog3.jpg" alt="Texto Entrada Blog" />
        </picture>
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.php">
        <h4>Terraza en el techo de tu casa.</h4>
        <p class="informacion-meta">
          Escrito el: <span>18/08/2022</span> por: <span>Jose Perez</span>
        </p>
        <p>
          Consejos para construir una terraza en el techo de tu casa con
          los mejores materiales y ahorrando dinero.
        </p>
      </a>
    </div>
  </article>

  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <picture>
          <source srcset="build/img/blog4.webp" type="image/webp" />
          <source srcset="build/img/blog4.jpg" type="image/jpeg" />
          <img loading="lazy" width="300" height="200" src="build/img/blog4.jpg" alt="Texto Entrada Blog" />
        </picture>
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.php">
        <h4>Guía para la decoración de tu hogar.</h4>
        <p class="informacion-meta">
          Escrito el: <span>19/08/2022</span> por:
          <span>Juana Gonzales</span>
        </p>
        <p>
          Maximiza el espacio en tu hogar con esta guía, aprende a
          combinar muebles y colores para darle vida a tu espacio.
        </p>
      </a>
    </div>
  </article>
</main>

<?php
incluirTemplate('footer');
?>