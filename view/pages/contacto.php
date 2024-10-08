<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <script src="../javascript/javascript.js"></script>
    <link rel="stylesheet" href="../stylesheet/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Contacto</title>
</head>
<body class="inicio">
    <div class="cabeza">
        <header class="encabezado">
            <img src="../images/logo.png" alt="" class="logo">
            <h1>Portal para "Los Caballeros del Zodíaco" de Toei Animation</h1>
            <nav class="menu">
                <a href="login.php">Iniciar Sesión</a>
            </nav>
        </header>
        <nav class="menu-inferior">
            <a href="../../index.php">Nosotros</a>
            <a href="productos.php">Productos</a>
            <a href="galeria.php">Galería</a>
            <a href="contacto.php">Contacto</a>
        </nav>
    </div>
    <main class="contact">
        <h1 class="pq">¿Quieres dejarnos un mensaje? ¡Contáctanos!</h1>

        <form action="" method="post">
            <section class="form-contact">
                <label for="">Correo Electrónico:</label>
                <input type="email" name="email" id="">
                <label for="">Asunto:</label>
                <input type="text" name="asunto" id="">
                <label for="">Mensaje:</label>
                <input type="text" name="mensaje" id="" class="mensaje"><br>

                <input type="submit" value="Enviar" name="enviar" id="botonenv">
            </section>
        </form>
    </main>
    <footer>
        <hr>
        <a href="https://x.com/universosaintse?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="../images/x.png" alt=""></a>
        <p>©Masami Kurumada, Chimaki Kuori(AKITASHOTEN) / Toei Animation</p>
        <p>©Masami Kurumada／Toei Animation</p>
    </footer>
    
    <?php
        include("../../controller/conexion.php"); 
        include("../../model/mensaje.php");
    ?>

</body>
</html>