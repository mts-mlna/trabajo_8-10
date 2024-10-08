<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <script src="../javascript/javascript.js"></script>
    <link rel="stylesheet" href="../stylesheet/style.css">
    <title>Productos</title>
</head>

<body class="inicio">
    <div class="cabeza">
        <header class="encabezado">
            <img src="../images/logo.png" alt="" class="logo">
            <h1>Portal para "Los Caballeros del Zodíaco" de Toei Animation</h1>
            <nav class="menu">
                <a href="../pages/login.php">Iniciar Sesión</a>
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
        <article class="formularios">
    <form action="../../model/alta.php" method="post" enctype="multipart/form-data" class="form-abm">
        <h3>Insertar Productos</h3>
            <input type="text" name="nombre" placeholder="Ingresar Nombre">
            <input type="number" name="precio" placeholder="Ingresar Precio">
            <input type="number" name="cantidad" placeholder="Ingresar Cantidad">
            <input type="file" name="imagen" placeholder="Ingresar Imagen">

            <input type="submit" value="Insertar" name="insertar" class="btn-edit">
    </form>
    
    <form action="" method="post" class="form-abm">
        <h3>Modificar/Eliminar Productos</h3>
        <input type="number" name="id" placeholder="Ingresar ID">
            <input type="text" name="nombre" placeholder="Ingresar Nombre">
            <input type="number" name="precio" placeholder="Ingresar Precio">
            <input type="number" name="cantidad" placeholder="Ingresar Cantidad">

            <input type="submit" value="Modificar" name="modificar" class="btn-edit">
            <input type="submit" value="Eliminar" name="eliminar" class="btn-elim">
    </form>
    </article>

        <?php
            include("../../model/cards.php");
        ?>

    </main>
    <footer>
        <hr>
        <a href="https://x.com/universosaintse?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img
                src="../images/x.png" alt=""></a>
        <p>©Masami Kurumada, Chimaki Kuori(AKITASHOTEN) / Toei Animation</p>
        <p>©Masami Kurumada／Toei Animation</p>
    </footer>

    <?php
        include("../../controller/conexion.php"); 
        include("../../model/alta.php");
        include("../../model/modificar.php");
        include("../../model/baja.php");
    ?>

</body>

</html>