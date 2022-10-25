<?php
require_once 'header.php';
require_once 'nav.php';
//require_once 'validarSesion.php';

?>

<link property="stylesheet" rel="stylesheet" href=" <?php echo CSS_PATH . 'verFechasSolicitadas.css' ?> ">

<main>

    <h1 class="tituloG">Fechas solicitadas</h1>

    <?php foreach ($reservaLista as $reserva) { ?>
        
        <div class="igual">
        <img class="imagenPerf" src="https://us.123rf.com/450wm/isselee/isselee2003/isselee200300398/142504822-bulldog-ingl%C3%A9s-perro-sacando-la-lengua-aislado-en-blanco.jpg?ver=6" alt="">
        <div class="info">
            <h2>Dia / Hora</h2>
            <p>Nombre mascota</p>
            <p>Tamaño</p>
            <p>Edad</p>
            <div class="Aceptar-Rechazar">
                <button type="submit" onclick="location.href= <?php echo FRONT_ROOT . 'Reserva/aceptarFecha?id=' . $reserva->getId_reserva(); ?>;">Aceptar</button>
                <button type="submit" onclick="location.href= <?php echo FRONT_ROOT . 'Reserva/rechazarFecha?id=' . $reserva->getId_reserva();  ?>;">Rechazar</button>
            </div>
        </div>
    </div>





    <!-- <div class="igual">
        <img class="imagenPerf" src="https://t1.ea.ltmcdn.com/es/razas/1/6/1/san-bernardo_161_0_orig.jpg" alt="">
        <div class="info">
            <h2>Dia / Hora</h2>
            <p>Nombre mascota</p>
            <p>Tamaño</p>
            <p>Edad</p>
            <div class="Aceptar-Rechazar">
                <button type="submit">Aceptar</button>
                <button type="submit">Rechazar</button>
            </div>
        </div>
    </div> -->

    <?php } ?>

    

</main>

<?php require_once 'footer.php' ?>