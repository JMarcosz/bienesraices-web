<?php
require 'includes/app.php';
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

$db = conectarDB();
$query = " SELECT * FROM propiedades where id = ${id}";
$resultado = mysqli_query($db, $query);
$propiedad = mysqli_fetch_assoc($resultado);


if (!$id || !$resultado->num_rows) {
  header('Location: /');
}
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h1><?php echo $propiedad["titulo"] ?></h1>
  <picture>
    <img loading="lazy" width="300" height="200" src="/imagenes/<?php echo $propiedad["imagen"] ?>" alt="Imagen Destacada">
  </picture>

  <div class="resumen-propiedad">
    <p class="precio"><?php echo $propiedad["precio"] ?></p>
    <ul class="iconos-caracteristicas">
      <li>
        <img class="icono" loading="lazy" width="300" height="200" src="/build/img/icono_wc.svg" alt="icono wc" />
        <p><?php echo $propiedad["wc"] ?></p>
      </li>
      <li>
        <img class="icono" loading="lazy" width="300" height="200" src="/build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
        <p><?php echo $propiedad["estacionamiento"] ?></p>
      </li>

      <li>
        <img class="icono" loading="lazy" width="300" height="200" src="/build/img/icono_dormitorio.svg" alt="icono dormitorio" />
        <p><?php echo $propiedad["habitaciones"] ?></p>
      </li>
    </ul>
    <p><?php echo $propiedad["descripcion"] ?></p>
  </div>
</main>
<?php
incluirTemplate('footer');
?>