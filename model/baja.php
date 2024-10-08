<?php
    if (!empty($_POST["eliminar"])) {
        $id = $_POST["id"];
        
        $query = "DELETE FROM productos WHERE id = '$id' ";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "Eliminado correctamente";
        } else {
            echo "No eliminado";
        }
    }