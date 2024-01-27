<body class="gradient-custom">
    <div class="container mt-4 table-responsive ">
            <h1 class="text-center">Tabla de Productos</h1>
            <table class="table table-dark table-hover table-rounded"> <!-- Agregamos la clase "table-dark" para el fondo gris oscuro -->
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Baja</th>
                        <th scope="col">Accion</th>
                        <th scope="col">Opciones</th>



                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productos as $producto) : ?>
                        <tr>
                            <td scope="row"><?= $producto['id'] ?></td>
                            <td scope="row"><?= $producto['nombre'] ?></td>
                            <td scope="row"><?= $producto['marca'] ?></td>
                            <td scope="row"><?= $producto['cantidad'] ?></td>
                            <td scope="row"><?= $producto['descripcion'] ?></td>
                            <td scope="row"><?= $producto['id_categoria'] ?></td>
                            <td scope="row"><?= $producto['precio'] ?></td>
                            <td scope="row"><?= $producto['baja'] ?></td>

                            <td scope="row">
                                <?php if ($producto['baja'] == 'NO') : ?>
                                    <a class="btn btn-danger btn-sm" href="<?= site_url('productos/darDeBaja/' . $producto['id']) ?>" role="button">Baja</a>
                                <?php else : ?>
                                    <a class="btn btn-success btn-sm" href="<?= site_url('productos/darDeAlta/' . $producto['id']) ?>" role="button">Alta</a>
                                <?php endif; ?>
                            </td>
                            <td scope="row">
                              <a class="btn btn-warning btn-sm text-white" href="<?= site_url('productos/editarProducto/' . $producto['id']) ?>" role="button">Editar</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a class="btn btn-success btn-sm" href="registrop" role="button">Registrar Producto</a>

    </div>
</body>