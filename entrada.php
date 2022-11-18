<?php
require 'includes/app.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h1>Guía para la decoración de tu hogar</h1>
  <picture>
    <source srcset="build/img/destacada2.webp" type="image/webp">
    <img loading="lazy" width="300" height="200" src="build/img/destacada2.jpg" alt="Imagen Destacada">
  </picture>
  <p class="informacion-meta">Escrito el: <span>20/04/2022</span> por: <span>Jean Marco</span></p>

  <div class="resumen-entrada">
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
</main>

<?php
incluirTemplate('footer');
?>