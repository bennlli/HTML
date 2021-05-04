<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <title>La web del tapicero</title>
</head>

<body>
    <!-- ENCABEZADO DE NUESTRA PÁGINA-->
    <header class="header" id="inicio">
        <img src="mmedia/img/menu.svg" alt="menu" class="hamburguer">
        <nav class="menu-navegacion">
            <a href="#inicio">Inicio</a>
            <a href="#servicio">Servicio</a>
            <a href="#portafolio">Galeria</a>
            <a href="#expertos">Trabajos</a>
            <a href="#contacto">Contacto</a>
            <a href="#administracion">Administración</a>
        </nav>
        <div class="contenedor head">
            <h1 class="titulo">La web del Tapicero</h1>
            <p class="copy">Aquí podrás encontrar las cortinas que necesitas, quizás busques tapizar una sillas o quizás
                el sofá</p>
            <p class="copy">Sin más te invito a pasar y a mostrarte nuestro trabajos y lo que somos capaces de realizar.
            </p>
        </div>

    </header>

    <!-- CONTENIDO PRINCIPAL DE NUESTRA WEB -->
    <main>
        <!-- SECCIÓN PARA SERVICIOS -->
        <section class="contenedor" id="servicio">
            <h2 class="subtitulo">NUESTROS SERVICIOS</h2>
            <div class="contenedor-servicio">
                <img src="mmedia/img/lista.svg" alt="">
                <div class="checklist-servicio">

                    <div class="service">
                        <h3 class="n-service"><span class="number">1. </span>TAPICERÍA</h3>
                        <p>Realizamos todo tipo de trabajos relacionados con la reparación de sofás desde tapizados en
                            telas anti-manchas, sustitución de gomas, relleno de cojines, etc.. </p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2. </span>CARPINTERÍA</h3>
                        <p>No solamente tapizamos tus sofás, si no que tambíen los reparamos si neceistan de un arreglo.
                        </p>
                    </div>

                    <div class="service">
                        <h3 class="n-service"><span class="number">3. </span>TOLDOS Y CORTINAS</h3>
                        <p>También estamos especializados en el montaje de cortinas, ello incluye su confección y
                            colocación.
                            Por lado podemos decir que también somos unos especialista en la colocación de toldos.
                        </p>
                    </div>

                    <div class="service">
                        <h3 class="n-service"><span class="number">4. </span>TAPICERIA NAUTICA</h3>
                        <p>Realizamos trabajos para embarcaciones, desde reparación de material (telas) hasta las gomas
                            de dichos elementos.
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- SECCIÓN PARA LA GALERIA -->
        <section class="gallery" id="portafolio">
            <div class="contenedor">
                <h2 class="subtitulo">GALERÍA DE TRABAJOS</h2>
                <div class="contenedor-galeria">
                    <img src="mmedia/img/1.jpg" alt="" class="img-galeria">
                    <img src="mmedia/img/2.jpg" alt="" class="img-galeria">
                    <img src="mmedia/img/3.jpg" alt="" class="img-galeria">
                    <img src="mmedia/img/4.jpg" alt="" class="img-galeria">
                    <img src="mmedia/img/5.jpg" alt="" class="img-galeria">
                    <img src="mmedia/img/6.jpg" alt="" class="img-galeria">
                    <img src="mmedia/img/1.jpg" alt="" class="img-galeria">
                    <img src="mmedia/img/3.jpg" alt="" class="img-galeria">
                    <img src="mmedia/img/4.jpg" alt="" class="img-galeria">
                    <img src="mmedia/img/3.jpg" alt="" class="img-galeria">
                    <img src="mmedia/img/4.jpg" alt="" class="img-galeria">
                    <img src="mmedia/img/6.jpg" alt="" class="img-galeria">
                </div>
            </div>
        </section>
        <!-- SECCIÓN COMPLEMENTARIA DE LA GALERIA -->
        <section class="imagen-light">
            <img src="mmedia/img/close.svg" alt="" class="close">
            <img src="" alt="" class="agregar-imagen">
        </section>
        <!-- SEECIÓN EN LO QUE TRABAJAMOS -->
        <section class="contenedor" id="expertos">
            <h2 class="subtitulo">SOMOS EXPERTOS EN</h2>
            <section class="experts">
                <div class="cont-expert">
                    <img src="mmedia/img/material.jpg" alt="">
                    <h3 class="n-expert"><b>Tapicería</b></h3>
                    <p> Maestros en el tapizado a medida de todo tipo de articulos</p>

                </div>
                <div class="cont-expert">
                    <img src="mmedia/img/tapiceriaGeneral.jpg" alt="">
                    <h3 class="n-expert"><b>Carpintería</b></h3>
                    <p> Reparamos todo lo que requiera el trabajo siempre</p>
                </div>
                <div class="cont-expert">
                    <img src="mmedia/img/toldo.jpg" alt="">
                    <h3 class="n-expert"><b>Toldos y cortinas</b></h3>
                    <p> Maestros en la confección y realizacion de trabajos a medida</p>
                </div>
            </section>
        </section>
        <!-- SECCIÓN DE CONTACTO -->
        <section class="contenedor" id="contacto">
            
            <h2 class="subtitulo"><img class="img-logo-circu" src="mmedia/img/logo_circulo.png" width="20%"></h2>
            <h2 class="subtitulo">Contáctame</h2>
            
            
            <div style="border:1px; background-color:rgba(169, 169, 169, 0.632); padding: 50px;text-align: center; margin: auto;display: flex; justify-content: space-evenly; flex-wrap: wrap;">
            <form action="includes/php/registro_bd.php" method="POST">
                <fieldset>
                    <legend>&nbsp;&nbsp; La web del tapicero &nbsp;&nbsp;</legend><br>
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" id="nombre" name="nombre" value="" size="15" style="height: 25px;"><br>
                    <label for="tlfn">Teléfono/Móvil:</label><br>
                    <input type="text" id="tlfn" name="tlfn" value="" style="height: 25px;"><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" value="" style="height: 25px;"><br><br>
                    <label for="descripcion">Descripción:</label><br>
                    <textarea name="mensaje" rows="10" cols="50" style=" padding: 20px;margin: 20px;"> </textarea><br><br>
                    <input type="submit" value="Enviar" style="width: 90px;height: 25px;"><br><br>
                </fieldset>
            </form>
        </div>
        </section>
    </main>
    <footer id="administracion">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="brand">Benlli Montijano</h2>
                <p>Proyecto final desarrollo web (DAW)</p>
                
            </div>
            <div class="social-media">
                
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="./" class="social-media-icon" style="margin-right:50px ;">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="./" class="social-media-icon" ">
                    <i class='bx bxs-door-open'></i>
                    <span style="color: white;"></span>
                </a>
            
            </div>
        </div>
        <div class="line"></div>
    </footer>

    <script src="includes/js/menu.js"></script>
    <script src="includes/js/lightbox.js"></script>


</body>

</html>