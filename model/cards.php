<?php

$conn = new mysqli("localhost", "root", "", "seiya");

$query = "SELECT * FROM productos";
$result = mysqli_query($conn, $query);

if ($result->num_rows > 0) {
    echo '<div class="back-productos">'; // Contenedor que contiene todos los cards 
    while($row = $result->fetch_assoc()) {

        echo "<div class='tarjeta'>"; // El card como tal con su estilado del css
        echo "<img src='uploads/" . $row["imagen"] . "' alt='" . $row["nombre"] . "'>"; //Imagen que hay en el card
        echo "<div class='cont-card'>"; //Contenido del card, descripcion, nombre, precio, etc.
        echo "<h2>ID:" . $row["id"] . "</h2>";
        echo "<br><br>"; //espacio
        echo "<p class='descripcion'>" . $row["nombre"] . "</p>";
        echo "<br>"; //espacio
        echo "<p>Precio: $" . $row["precio"] . "</p>";
        echo "<br>"; //espacio
        echo "<p>Cantidad: " . $row["cantidad"] . "</p>";
        echo "</div>";
        echo "</div>";

    }
    echo '</div>'; 
}else {
    echo "No se encontraron productos.";
}
?>
