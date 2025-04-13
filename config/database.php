<?php
abstract class Database {
    protected static $conexion;

    public static function conectar(): PDO {
        try {
            self::$conexion = new PDO(
                "informix:host=host.docker.internal; service=9088; database=crud; server=informix; protocol=onsoctcp; EnableScrollableCursors=1", //este es el DSN para Informix
                //si ustedes se dan cuenta dice el puerto
                //OJO en donde dice base datos tiene que decir la que crearon en este caso yo cree una que se llama CRUD

                "informix", //usuario

                "in4mix" //contraseña
            );
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // esto es para que si hay un error en la consulta nos lo muestre

            return self::$conexion;
            //si no se conecta nos muestra el error

        } catch (PDOException $e) {
            echo "❌ Error de conexión: " . $e->getMessage();
            //esto es para que si hay un error en la consulta nos lo muestre
            exit;
        }
    }
}
