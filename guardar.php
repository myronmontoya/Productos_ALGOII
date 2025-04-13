<?php
require_once __DIR__ . '/models/Producto.php';


//Este archivo se encarga de recibir los datos del formulario y guardarlos en la base de datos. 
//Se espera que el formulario envíe una solicitud POST con los campos 'nombre' y 'precio'.
//Si la inserción es exitosa, redirige a la página del formulario con un mensaje de éxito.


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $precio = trim($_POST['precio']);

    // Validaciones básicas
    // Asegúrate de que los campos no estén vacíos y que el precio sea un número
    if (!empty($nombre) && is_numeric($precio)) {
        $producto = new Producto($nombre, $precio);
        $guardado = $producto->guardar();

        // Si la inserción fue exitosa, redirige a la página del formulario con un mensaje de éxito
        // Si no, muestra un mensaje de error
        // Asegúrate de que la clase Producto y el método guardar() estén correctamente definidos
        // y que la conexión a la base de datos esté funcionando correctamente
        
        if ($guardado) {
            header("Location: views/formulario.php?exito=1");
            exit;
        } else {
            echo "❌ Error al guardar el producto.";
        }
    } else {
        echo "⚠️ Datos inválidos. Asegúrate de llenar todos los campos correctamente.";
    }
} else {
    echo "❌ Método no permitido.";
}
