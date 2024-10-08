<?php 

    if (!empty($_POST["iniciar"])) {
            $email = $_POST["email"];
            $contraseña = $_POST["contraseña"];

            $query = $conn -> query("SELECT * FROM usuarios WHERE email = '$email' AND contraseña = '$contraseña' ");         
            $columna = $query -> fetch_assoc();
            
            if ($query) {
                if ($columna["email"] == "gareis@gmail.com" && $columna["contraseña"] == "1234"){
                header("Location: abm.php");  
                }
                else {
                header("Location: ../../index.php");
                    } 
            } else {
                    echo 'Error en usuario y/o contraseña';
            }
    }
    else{
        echo "Error";
    }

?>