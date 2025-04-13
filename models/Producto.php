<?php
require_once __DIR__ . '/../config/database.php';
//esdtamos usando la clase Database para conectarnos a la base de datos

class Producto {
    private $nombre;
    private $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function guardar() {
        // Conectar a la base de datos
        // Asegúrate de que la clase Database esté correctamente definida y configurada
        $conexion = Database::conectar();


        // Preparar la consulta SQL para insertar el producto
        // Asegúrate de que la tabla 'productos' y los campos 'producto_nombre' y 'producto_precio' existan en tu base de datos

        // Puedemos ajustar el nombre de la tabla y los campos según tu esquema de base de datos
        $sql = "INSERT INTO productos (producto_nombre, producto_precio) VALUES (?, ?)";
        // Preparar la consulta
        $stmt = $conexion->prepare($sql);
        // Ejecutar la consulta con los valores del producto

        $stmt->execute([$this->nombre, $this->precio]);
        // Verificar si la inserción fue exitosa

        return $stmt->rowCount() > 0;
    }
}
