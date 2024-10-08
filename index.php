<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Los Caballeros del Zodíaco!</title>
    <script src="view/javascript/javascript.js"></script>
    <link rel="shortcut icon" href="view/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="view/stylesheet/style.css">
</head>


<body class="inicio">
    <div class="cabeza">
        <header class="encabezado">
            <img src="view/images/logo.png" alt="" class="logo">
            <h1>Portal para "Los Caballeros del Zodíaco" de Toei Animation</h1>
            <nav class="menu">
                <a href="view/pages/login.php">Iniciar Sesión</a>
            </nav>
        </header>
        <nav class="menu-inferior">
            <a href="view/pages/login.php">Nosotros</a>
            <a href="view/pages/productos.php">Productos</a>
            <a href="view/pages/galeria.php">Galería</a>
            <a href="view/pages/contacto.php">Contacto</a>
        </nav>
    </div>
<main class="cont-main">
    <div class="imagen">
        <img src="view/images/logo-esp.png">
    </div>
    <div class="quiensos">
        <h1>¿Quiénes son los Caballeros del Zodíaco?</h1>
        <p>Los Caballeros de Oro son los guerreros más poderosos del Santuario, dedicados a proteger a la diosa Atenea y a mantener el equilibrio del cosmos. Representando las doce constelaciones del zodíaco, cada uno de estos caballeros posee una armadura dorada que les otorga habilidades extraordinarias y un poder sobrehumano.</p>
    </div>

    <div class="fondito">
    
        <h1 class="personajes">Personajes</h1>

        <div class="pjs">
            <div class="img-cont">
                <img src="view/images/mu.jpg" alt="">
                <div class="texto-sup">
                    <h1>Mu de Aries</h1>
                    <p>Lorem jaja</p>
                </div>
            </div>
            <div class="img-cont">
                <img src="view/images/aldebaran.jpg" alt="">
                <div class="texto-sup">
                    <h1>Aldebarán de Tauro</h1>
                    <p>Lorem jaja</p>
                </div>
            </div>
            <div class="img-cont">
                <img src="view/images/saga.jpg" alt="">
                <div class="texto-sup">
                    <h1>Saga de Géminis</h1>
                    <p>Lorem jaja</p>
                </div>
            </div>
                <div class="img-cont">
                <img src="view/images/deathmask.jpg" alt="">
                <div class="texto-sup">
                    <h1>Deathmask de Cáncer</h1>
                    <p>Lorem jaja</p>
                </div>
            </div>
                <div class="img-cont">
                <img src="view/images/aioria.png" alt="">
                <div class="texto-sup">
                    <h1>Aioria de Leo</h1>
                    <p>Lorem jaja</p>
                </div>
            </div>
                <div class="img-cont">
                <img src="view/images/shaka.jpg" alt="">
                <div class="texto-sup">
                    <h1>Shaka de Virgo</h1>
                    <p>Lorem jaja</p>
                </div>
            </div>
                <div class="img-cont">
                <img src="view/images/dohko.png" alt="">
                <div class="texto-sup">
                    <h1>Dohko de Libra</h1>
                    <p>Lorem jaja</p>
                </div>
            </div>
                <div class="img-cont">
                <img src="view/images/milo.png" alt="">
                <div class="texto-sup">
                    <h1>Milo de Escorpio</h1>
                    <p>Lorem jaja</p>
                </div>
            </div>
                <div class="img-cont">
                <img src="view/images/aioros.png" alt="">
                <div class="texto-sup">
                    <h1>Aioros de Sagitario</h1>
                    <p>Lorem jaja</p>
                </div>
            </div>
                <div class="img-cont">
                <img src="view/images/shura.jpg" alt="">
                <div class="texto-sup">
                    <h1>Shura de Capricornio</h1>
                    <p>Lorem jaja</p>
                </div>
            </div>
                <div class="img-cont">
                <img src="view/images/camus.png" alt="">
                <div class="texto-sup">
                    <h1>Camus de Acuario</h1>
                    <p>Lorem jaja</p>
                </div>
            </div>
                <div class="img-cont">
                <img src="view/images/afrodita.png" alt="">
                <div class="texto-sup">
                    <h1>Afrodita de Piscis</h1>
                    <p>Lorem jaja</p>
                </div>
            </div>
        </div>
    </div>
</main>

<button id="scrollBtn" onclick="scrollToTop()">↑</button>

<footer>
    <hr>
    <a href="https://x.com/universosaintse?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="view/images/x.png" alt=""></a>
    <p>©Masami Kurumada, Chimaki Kuori(AKITASHOTEN) / Toei Animation</p>
    <p>©Masami Kurumada／Toei Animation</p>
</footer>

    <?php
        include("controller/conexion.php"); 
    ?>

</body>

</html>