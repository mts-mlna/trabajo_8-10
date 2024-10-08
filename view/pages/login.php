<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
        <script src="../javascript/javascript.js"></script>
        <link rel="stylesheet" href="../stylesheet/style.css">
        <title>Iniciar Sesión</title>
    </head>
<body class="inicio">
        <div class="cabeza">
            <header class="encabezado">
                <img src="../images/logo.png" alt="" class="logo">
                <h1>Portal para "Los Caballeros del Zodíaco" de Toei Animation</h1>
                <nav class="menu">
                </nav>
            </header>
            <nav class="menu-inferior">
                <a href="../../index.php">Nosotros</a>
                <a href="productos.php">Productos</a>
                <a href="galeria.php">Galería</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>
        <main>
            <form action="" method="post" class="iniciar">
                <section class="form-login">
                    <h1 class="login">Iniciar Sesión</h1>
                    <label for="">Correo Electrónico o Nombre de Usuario:</label>
                    <input type="email" name="email" id="">
                    <label for="">Contraseña:</label>
                    <input type="password" name="contraseña" id="contra">
                    <div id="check-contenedor">
                        <label class="checkbox">    
                            <input type="checkbox" onclick="mostrarCont()">Mostrar contraseña
                        </label>
                    </div>
            
                    <input type="submit" value="Iniciar Sesión" name="iniciar" id="botonenv">
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
            include("../../model/iniciar.php");
        ?>

</body>
</html>