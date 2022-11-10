<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Conoce sobre nosotros</h1>
  <div class="contenido-nosotros">
    <div class="imagen">
      <picture>
        <source srcset="build/img/nosotros.webp" type="image/webp" />
        <img loading="lazy" width="300" height="200" src="build/img/nosotros.jpg" alt="Sobre nosotros" />
      </picture>
    </div>

    <div class="texto-nosotros">
      <blockquote>25 Años de experiencia</blockquote>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
        voluptatibus atque iusto! Soluta velit quae, facere dignissimos neque
        quidem impedit unde sint, consectetur iste inventore possimus
        obcaecati? Recusandae, corporis provident! Lorem ipsum dolor sit amet
        consectetur adipisicing elit. Unde, illum maxime ex nobis eveniet
        rerum mollitia deleniti! Necessitatibus expedita illum natus debitis,
        beatae temporibus vel voluptate nostrum cupiditate. Officia, ut.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore cumque
        incidunt, quasi, ipsam molestias modi recusandae deleniti dolorem nemo
        amet ab dolores facere quis labore possimus fuga inventore illo
        placeat.
      </p>
    </div>
  </div>


</main>

<section class="contenedor seccion">
  <h1>Más Sobre Nosotros</h1>

  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy" width="300" height="200" />
      <h3>Seguridad</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore
        labore, nesciunt numquam magni, excepturi reprehenderit repellendus
        non repudiandae fugit ullam quisquam, sunt id debitis voluptates ea
        eaque quod. Minus, officiis.
      </p>
    </div>

    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono Seguridad" loading="lazy" width="300" height="200" />
      <h3>Precio</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore
        labore, nesciunt numquam magni, excepturi reprehenderit repellendus
        non repudiandae fugit ullam quisquam, sunt id debitis voluptates ea
        eaque quod. Minus, officiis.
      </p>
    </div>

    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono Seguridad" loading="lazy" width="300" height="200" />
      <h3>Tiempo</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore
        labore, nesciunt numquam magni, excepturi reprehenderit repellendus
        non repudiandae fugit ullam quisquam, sunt id debitis voluptates ea
        eaque quod. Minus, officiis.
      </p>
    </div>
  </div>
</section>
<?php
incluirTemplate('footer');
?>