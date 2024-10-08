<?php
if (!empty($_POST["modificar"])) {
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $cantidad = $_POST["cantidad"];

        $query = "UPDATE productos SET nombre = '$nombre', precio = '$precio', cantidad = '$cantidad' WHERE id = '$id' ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "Modificado correctamente";
        } else {
            echo "No modificado";
        }
    }