<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container"> <!-- Agregamos un contenedor para centrar el contenido -->

        <a class="navbar-brand" href="#">
            <img src="<?php echo base_url('assets/img/icono.png')?>" alt="marca" width="75" height="30" class="img-fluid">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <?php if($perfil == 1):?>
                    <div class="btn btn-info active btnUser btn-sm">
                        <a href="">ADMIN: <?php echo $nombre;?></a>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="registro" id="registro">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login" id="login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/logout');?>" id="salir">Cerrar Sesión</a>
                    </li>
                <?php elseif($perfil == 2):?>
                    <div class="btn btn-info active btnUser btn-sm">
                        <a href="">CLIENTE: <?php echo $nombre;?></a>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="inicio" id="enlace">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quienes_somos" id="enlace">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca_de" id="enlace">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('/logout');?>" id="salir">Cerrar Sesión</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="inicio" id="enlace">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quienes_somos" id="enlace">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acerca_de" id="enlace">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalogo" id="enlace">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>

    </div> <!-- Cierre del contenedor -->
</nav>
