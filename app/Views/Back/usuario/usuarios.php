<body class="gradient-custom">
    <div class="container mt-4 table-responsive">
        <h1 class="text-center">Tabla de Usuarios</h1>
        <table class="table table-dark table-hover table-rounded"> <!-- Agregamos la clase "table-dark" para el fondo gris oscuro -->
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Email</th>
                    <th scope="col">Baja</th>
                    <th scope="col">Acción</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario) : ?>
                    <tr>
                        <td scope="row"><?= $usuario['id_usuario'] ?></td>
                        <td scope="row"><?= $usuario['nombre'] ?></td>
                        <td scope="row"><?= $usuario['apellido'] ?></td>
                        <td scope="row"><?= $usuario['email'] ?></td>
                        <td scope="row"><?= $usuario['baja'] ?></td>
                        <td scope="row">
                            <?php if ($usuario['baja'] == 'NO') : ?>
                                <a class="btn btn-danger btn-sm" href="<?= site_url('usuarios/darDeBaja/' . $usuario['id_usuario']) ?>" role="button">Baja</a>
                            <?php else : ?>
                                <a class="btn btn-success btn-sm" href="<?= site_url('usuarios/darDeAlta/' . $usuario['id_usuario']) ?>" role="button">Alta</a>
                            <?php endif; ?>
                        </td>
                        <td scope="row">
                              <a class="btn btn-warning btn-sm text-white" href="<?= site_url('usuarios/editarUsuario/' . $usuario['id_usuario']) ?>" role="button">Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>