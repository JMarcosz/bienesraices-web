<?php
//Importo la conexión de la bases de datos
require '../../includes/config/database.php';
$db = conectarDB();


//Consulta a la bases de datos
$consulta = " SELECT * FROM vendedores; ";
$resultado = mysqli_query($db, $consulta);

//Arreglo que almacenara los errores cometidos por el usuario

$errores = [];

//Variables que guardaran la información del formulario
$titulo = "";
$precio = "";
$descripcion = "";
$habitaciones = "";
$wc = "";
$estacionamiento = "";
$vendedorId = "";
$creado = date("Y/m/d");
$imagen = "";


// ----Ejecuto el código después que se envíe el formulario----

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //Los archivos no se guardan en la super global post, sino en la super global files
    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";

    //almaceno la información que están en las variables globales del post
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    // exit;

    $titulo =  mysqli_real_escape_string( $db,$_POST["titulo"] ) ; //mysqli_real_escape_string sanitiza la información, y necesita dos parámetros, db y la información
    $precio = mysqli_real_escape_string( $db,$_POST["precio"] ) ;
    $descripcion = mysqli_real_escape_string( $db,$_POST["descripcion"] ) ;
    $habitaciones = mysqli_real_escape_string( $db,$_POST["habitaciones"] ) ;
    $wc = mysqli_real_escape_string( $db,$_POST["wc"] ) ;
    $estacionamiento = mysqli_real_escape_string( $db,$_POST["estacionamiento"] ) ;
    $vendedorId = mysqli_real_escape_string( $db,$_POST["vendedor"] ) ;
    $imagen = $_FILES["imagen"];

    //Validación del formulario
    if (!$titulo) {
        $errores[] = "Debes añadir un titulo";
    }

    if (!$precio) {
        $errores[] = "El precio es obligatorio";
    }

    if (strlen($descripcion) < 50) {
        $errores[] = "La descripción es obligatoria  y debe tener mínimo 50 caracteres.";
    }

    if (!$habitaciones) {
        $errores[] = "La cantidad de habitaciones es obligatoria";
    }

    if (!$wc) {
        $errores[] = "La cantidad de baños es obligatoria";
    }

    if (!$estacionamiento) {
        $errores[] = "La cantidad de estacionamientos es obligatoria";
    }

    if (!$vendedorId) {
        $errores[] = "Elige un vendedor";
    }

    if (!$imagen || $imagen["error"]){
        $errores[] = "La imagen es obligatoria";
    }

    //Validad por tamaño
    $medida = 1000 * 1000;
    if ($imagen["size"] > $medida){
        $errores[] = "La imagen es muy pesada, debe ser menor a 1MB";
    }

    //Revisar que el arreglo de errores este vació
    if (empty($errores)) {
        //Subida de archivos

        //Crear carpeta
        $carpetaImagenes = '../../imagenes/';
        if (!is_dir($carpetaImagenes)) {
            mkdir($carpetaImagenes);
        }
        //Guardamos el tipo
        $imagenType = $imagen["type"];
        //Dividimos type en un array para concatenar la extension
        $extension = explode("/", $imagenType);
        //Generar un nombre único con su extension
        $nombreImagen = md5(uniqid(rand(), true)) . "." . $extension[1];    

        //Queries para insertar en la base de datos
        $query = " INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento, creado, vendedorId) 
        values('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId'); ";

        //Capturar errores en caso de que no se inserten los datos
        try {
            $resultado = mysqli_query($db, $query);
            //Subir la imagen
            move_uploaded_file($imagen["tmp_name"], $carpetaImagenes . $nombreImagen);

            //Redireccionar a la pagina principal;
            header('Location: /admin?resultado=1');
        } catch (Throwable $ex) {
            echo 'Ha ocurrido un problema con la bases de datos, no se pudo insertar los datos. Error : ' . $ex->getMessage() . '<br>' . ' Código de error: ' . $ex->getCode();
            exit;
        }
    }
}

require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>

    <!--Mostrar errores -->
    <?php foreach($errores as $error): ?>
        <div class="alerta error">
        <?php echo $error; ?>
        </div>
    <?php endforeach?>
    
    <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Información General</legend>
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo ?>"> <!-- //El value mostrara los datos almacenados en las variables -->

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Información Propiedad</legend>
            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Eje: 3" min="1" max="9" value="<?php echo $habitaciones ?>">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" name="wc" placeholder="Eje: 3" min="1" max="9" value="<?php echo $wc ?>">

            <label for="estacionamiento">Estacionamiento:</label>
            <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Eje: 3" min="1" max="9" value="<?php echo $estacionamiento ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>
            <select name="vendedor">
                <option value="">--Seleccione un vendedor</option>
                <?php while($vendedor = mysqli_fetch_assoc($resultado)): ?> //Devuelve información en array
                    <option <?php echo $vendedorId === $vendedor['id'] ? 'selected' : '' ?> value="<?php echo $vendedor['id'] ?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido'] ?> </option>
                <?php endwhile ?>
            </select>
        </fieldset>
        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>