<?php
include_once('Header.php')
    ?>

<main id="main">


    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('assets/img/sara-kurfess-5epnzwsphl0-unsplash-min.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Servicios</h2>
            <ol>
                <li><a href="index.html">Inicio</a></li>
                <li>servicios</li>
            </ol>

        </div>
    </div>


    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <img src="assets/img/bolsa-de-la-compra.png" alt="" srcset="">
                        </div>
                        <h3>Compra en linea (En proceso)</h3>

                        <p>¡Compra en línea! Pronto podrás disfrutar de la comodidad de adquirir nuestras exclusivas
                            prendas y diseños personalizados desde cualquier lugar. Estamos trabajando para brindarte
                            una experiencia de compra en línea excepcional, donde reflejarás tu estilo único con solo
                            unos clics. ¡Mantente atento a nuestras novedades y únete a la moda a tu manera!</p>

                        <a href="#features" class="readmore stretched-link">Leer más<i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="assets/img/personalizacion.png" alt="" srcset="">
                        </div>
                        <h3>Personaliza tu producto</h3>
                        <p>Personaliza tu estilo: Crea prendas únicas que reflejen tu personalidad. Nuestro servicio de
                            personalización te permite diseñar desde cero, eligiendo colores, estampados y detalles para
                            obtener una prenda a tu medida. ¡Sé el diseñador de tu moda y destaca con estilo propio!</p>
                        <a href="#features" class="readmore stretched-link">Learn more <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="assets/img/entrega-rapida.png" alt="" srcset="">
                        </div>
                        <h3>Envíos </h3>
                        <p>
                            Nuestro servicio de envíos garantiza una entrega rápida y confiable para que disfrutes de
                            tus prendas personalizadas en poco tiempo. Procesamos tu pedido con cuidado y trabajamos con
                            los mejores servicios de envío para asegurar que tu paquete llegue en perfectas condiciones.
                            Te mantendremos informado sobre el estado de tu envío para que puedas hacer un seguimiento y
                            recibir tus prendas únicas en tiempo récord. ¡Haz tu pedido ahora y luce tu diseño exclusivo
                            cuanto antes!</p>
                        <a href="#features" class="readmore stretched-link">Learn more <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <div class="fondo2"></div>






    <section id="Servicio" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h2>Servicios</h2>
            <h5>Cotiza información sobre ventas personalizadas</h5>

            <div class="col-lg-6">


                <form action="services.php" method="post" class="php-email-form">


                    <div class="row gy-4">
                        <div class="col-lg-6 form-group">
                            <input type="text" name="Nombre" class="form-control" id="Nombre" placeholder="Nombre"
                                required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="Email" id="Email" placeholder="Email"
                                required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="Telefono" id="Telefono" placeholder="Telefono"
                            required>
                    </div>


                    <h5 class="radioH5">Como prefiere su cotización</h5>
                    <div class="form-group">
                        <select name="Como_prefiere_su_cotizacion" id="Como_prefiere_su_cotizacion">
                            <option value="">Elige</option>
                            <option value="Asesoría">Asesoría</option>
                            <option value="Cotización">Cotización</option>
                        </select>

                    </div>


                    <div class="form-group">
                        <h5 class="radioH5">Fecha de inicio</h5>
                        <input type="date" class="form-control" name="Fecha" id="Fecha" required>
                    </div>


                    <div class="form-group">
                        <textarea class="form-control" name="Comentario" id="Comentario" rows="6"
                            placeholder="Comentanos detalles de tu personalización..." required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit">Enviar</button>
                    </div>

                </form>
            </div>

        </div>

        </div>
    </section>



</main>






<?php

if ($_POST) {

    $Nombre = $_POST["Nombre"];
    $Email = $_POST["Email"];
    $celular = $_POST["Telefono"];
    $opcion = $_POST['Como_prefiere_su_cotizacion'];
    $Fecha = $_POST["Fecha"];
    $Detalles = $_POST["Comentario"];




    if (empty($Nombre)) {
        echo "<h1>Falta ingresar el nombre</h1>";
    }

    if (empty($Email)) {
        echo "<h1>Falta ingresar el telefono/celular</h1>";
    }

    if (empty($celular)) {
        echo "<h1>Falta ingresar el Email</h1>";
    }

    if (empty($opcion)) {
        echo "<h1>Falta ingresar la sugerencia</h1>";
    }

    if (empty($Fecha)) {
        echo "<h1>Falta ingresar la sugerencia</h1>";
    }

    if (empty($Detalles)) {
        echo "<h1>Falta ingresar la sugerencia</h1>";
    }


    if ((!empty($Nombre)) && (!empty($Email)) && (!empty($celular)) && (!empty($opcion)) && (!empty($Fecha)) && (!empty($Detalles))) {

    }

    include_once("Configuracion/funciones.php");
    Reg_Cotización($Nombre, $Email, $celular, $opcion, $Fecha, $Detalles);



}


?>



<?php
include_once('Footer.php')
    ?>