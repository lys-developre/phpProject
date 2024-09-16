<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- estilos de inicio -->
    <link rel="stylesheet" href="./publico/css/index.css">

    <!-- estilos globales encabezado y pie de pagina-->
    <link rel="stylesheet" href="./publico/css/globales_encabezado.css">
    <link rel="stylesheet" href="./publico/css/globales_pie_de_pagina.css">


    <title>Inicio</title>
</head>

<body>
    <?php include './vistas/parciales/encabezado.php'; ?>

    <!-- contenedor principal de la pagina de inicio -->
    <main class="contenedor-inicio">
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-contenido">
                <h1>Bienvenidos al proyecto final del modulo PHP</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum repudiandae tempora eligendi dolore illum assumenda inventore eius, ab debitis sed nisi, facere optio animi placeat cupiditate maiores maxime tenetur dolor?<p>
                <a href="/vistas/registro.php" class="boton">Regístrate</a>
            </div>
        </section>

        <!-- Sección de Novedades de nuestro sitio.-->
        <section class="novedades">
            <h2>Noticias destacadas</h2>
            <div class="grid-novedades">


                <article class="novedad">
                    <h3>Titulo de noticias 1</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia optio nisi hic corporis sint atque fugit vero accusantium ex consequatur enim eius sequi iste similique, repudiandae labore neque vel excepturi.p>
                    <img class="php-elefante" src="./publico/images/php-azul.jpg" alt="imagen elefante php color rosa">
                    <a href="/rutas/rutas.php?accion=mostrarNoticias" class="leer-mas">Leer más</a>
                </article>


                <article class="novedad">
                    <h3>Titulo de noticias 2</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia optio nisi hic corporis sint atque fugit vero accusantium ex consequatur enim eius sequi iste similique, repudiandae labore neque vel excepturi.</p>
                    <img class="php-elefante" src="./publico/images/php-rosa.jpg" alt="imagen elefante php color azul">
                    <a href="/rutas/rutas.php?accion=mostrarNoticias" class="leer-mas">Leer más</a>
                </article>
            </div>
        </section>

        <!-- Sección de Contacto -->
        <section class="contacto">
            <h2>Contáctanos</h2>
            <p>¿Tienes alguna pregunta? No dudes en escribirnos a través de nuestro formulario de contacto.</p>
            <a href="./vistas/contacto.php" class="boton-contacto">Contáctanos</a>
        </section>
    </main>


    <?php include './vistas/parciales/pieDePagina.php'; ?>

</body>

</html>