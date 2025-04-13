<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<!-- El siguiente código es un formulario HTML para agregar un nuevo producto a una base de datos. El formulario incluye campos para el nombre y el precio del producto, y al enviarlo, se redirige a la página "guardar.php" para procesar la información. Si la inserción es exitosa, se muestra un mensaje de éxito. -->

<!-- El formulario está diseñado para ser responsivo y utiliza Bootstrap para el estilo. --> 
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4">Agregar Nuevo Producto</h2>

        <?php if (isset($_GET['exito']) && $_GET['exito'] == 1): ?>
            <div class="alert alert-success">✅ Producto guardado exitosamente.</div>
        <?php endif; 
        // Si la variable de éxito está configurada en 1, se muestra un mensaje de éxito. Si no, no se muestra nada.
        ?>

        <!-- Formulario para agregar un nuevo producto -->
         <!-- El formulario envía una solicitud POST a "guardar.php" para procesar la información del producto. -->
         <!-- Los campos de entrada son obligatorios y se validan en el lado del cliente. -->
         <!-- El botón de envío tiene la clase "btn btn-primary" para aplicar estilos de Bootstrap. -->
          
        <form action="../guardar.php" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Producto</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio (Q)</label>
                <input type="number" step="0.01" name="precio" id="precio" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>
