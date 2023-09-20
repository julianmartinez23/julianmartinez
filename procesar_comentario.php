<?php
// Conecta a la base de datos nuevamente
$conexion = new mysqli("servidor", "usuario", "contraseña", "basededatos");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta los comentarios
$sql = "SELECT nombre, comentario, fecha FROM comentarios ORDER BY fecha DESC";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "<p><strong>" . $fila["nombre"] . "</strong> - " . $fila["fecha"] . "<br>";
        echo $fila["comentario"] . "</p>";
    }
} else {
    echo "No hay comentarios aún.";
}

// Cierra la conexión
$conexion->close();
?>
<?php
// Conecta a la base de datos nuevamente
$conexion = new mysqli("servidor", "usuario", "contraseña", "basededatos");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta los comentarios
$sql = "SELECT nombre, comentario, fecha FROM comentarios ORDER BY fecha DESC";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "<p><strong>" . $fila["nombre"] . "</strong> - " . $fila["fecha"] . "<br>";
        echo $fila["comentario"] . "</p>";
    }
} else {
    echo "No hay comentarios aún.";
}

// Cierra la conexión
$conexion->close();
?>
