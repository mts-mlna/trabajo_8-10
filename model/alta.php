<?php
    if(!empty($_POST["insertar"])){
        $nombre = $_POST["nombre"];
        $precio = $_POST["precio"];
        $cantidad = $_POST["cantidad"];

        //--->  >> INSERTAR IMAGEN <<

        $imgDireccion = "../view/pages/uploads/";
        $imgDestino = $imgDireccion . basename($_FILES["imagen"]["name"]);
        $img = $_FILES["imagen"]["name"];
        $imageFileType = strtolower(pathinfo($imgDestino, PATHINFO_EXTENSION));

    
    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $imgDestino)) {

        $conn = new mysqli("localhost", "root", "", "seiya");

        $query = "INSERT INTO productos ( nombre, precio, cantidad, imagen) VALUES ('$nombre','$precio', '$cantidad', '$img')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo 'Registrado';
        }else {
            echo 'No Registrado';
        }
    }
}