<?php

// Datos de conexión
$servidor = "localhost";  // o 127.0.0.1
$usuario = "root";
$clave = "";  // por defecto está vacío en XAMPP
$base_datos = "bd_jorge"; //nombre de tu base de datos

// Establecemos la conexión con el servidor MySQL
$conexion = mysqli_connect($servidor, $usuario, $clave, $base_datos);

// Verificamos si hubo algún error al conectar
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// 2. Definimos la consulta SQL
$consulta = "SELECT DNI, nombre, clave, edad FROM usuario";

// 3. Ejecutamos la consulta
$resultado = mysqli_query($conexion, $consulta);

// 4. Mostramos los resultados en una tabla HTML
echo "<h2>Listado de usuarios</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>DNI</th><th>Nombre</th><th>Clave</th><th>edad</th></tr>";

// Recorremos cada fila de resultados y mostramos los datos
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . $fila['DNI'] . "</td>";
    echo "<td>" . $fila['nombre'] . "</td>";
    echo "<td>" . $fila['clave'] . "</td>";
    echo "<td>" . $fila['edad'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// 5. Liberamos el resultado y cerramos la conexión
mysqli_free_result($resultado);
mysqli_close($conexion);

?>