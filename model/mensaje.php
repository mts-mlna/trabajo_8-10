<?php
    if(!empty($_POST["enviar"])){
        $email = $_POST["email"];
        $asunto = $_POST["asunto"];
        $mensaje = $_POST["mensaje"];

        $query = "INSERT INTO contactos (email, asunto, mensaje) VALUES ('$email', '$asunto', '$mensaje')";
        $result = mysqli_query($conn, $query);
        
        if ($result) {
            echo 'Registrado';
        }else {
            echo 'No Registrado';
        }
    }