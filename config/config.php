<?php

// Incluir el archivo para la configuración de errores.
require_once __DIR__ . '/../config/errores.php';

// Incluir el archivo de configuración base para BASE_URL
require_once __DIR__ . '/base_config.php';

// Incluir el archivo con las credenciales de la base de datos.
require_once __DIR__ . '/../controladores/.env.php';

// Función para establecer la conexión a la base de datos.
function connectToDatabase()
{
    static $mysqli_conn = null;

    // Crear la conexión solo si aún no existe.
    if ($mysqli_conn === null) {
        try {
            // Intentar conectar a la base de datos usando las credenciales definidas en .env.
            $mysqli_conn = new mysqli(getenv('SERVER_HOST'), getenv('USER'), getenv('PASSWORD'), getenv('DATABASE_NAME'));

            // Verificar si la conexión se realizó correctamente.
            if ($mysqli_conn->connect_errno) {
                // Registrar el error en el log de Apache si la conexión falla.
                error_log("Fallo al conectar a la base de datos: " . $mysqli_conn->connect_error);
                return null;
            } else {
                // En lugar de echo, almacenamos el mensaje en una variable
                $conexionMensaje = "La conexión ha funcionado correctamente";
            }

            // Enviar el mensaje a la consola del navegador si la conexión fue exitosa
            if (isset($conexionMensaje)) {
                echo "<script>console.log('" . addslashes($conexionMensaje) . "');</script>";
            }
        } catch (Exception $e) {
            // Registrar cualquier excepción que ocurra durante la conexión.
            error_log("Error de conexión a la base de datos: " . $e->getMessage());
            return null;
        }
    }

    return $mysqli_conn; // Devolver la conexión establecida o null si falló.
}

$mysqli_connection = connectToDatabase(); // Intentar conectar a la base de datos ejecutando la función que nos puede devolver conexión exitosa o null si falla algo.

// Si la conexión es null, redirigimos al usuario a la página de error.
if ($mysqli_connection === null) {
    header('Location: ' . BASE_URL . 'vistas/errores/error_404.php');
    exit();
}
