<body class="gradient-custom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 bg-dark text-white">
                    <div class="card-body">
                        <h4 class="card-title text-center">Editar Producto</h4>
                        <?= form_open('productos/guardarEdicion/' . $producto['id']) ?>
                       
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $producto['nombre'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="marca">Marca:</label>
                            <input type="text" class="form-control" id="marca" name="marca" value="<?= $producto['marca'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Cantidad:</label>
                            <input type="number" class="form-control" id="cantidad" name="cantidad" value="<?= $producto['cantidad'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion"><?= $producto['descripcion'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="id_categoria">Categoría:</label>
                            <select class="form-control" id="id_categoria" name="id_categoria">
                                <option value="1" <?= ($producto['id_categoria'] == '1') ? 'selected' : '' ?>>Accesorio</option>
                                <option value="2" <?= ($producto['id_categoria'] == '2') ? 'selected' : '' ?>>Componente Interno</option>
                                <option value="3" <?= ($producto['id_categoria'] == '3') ? 'selected' : '' ?>>Componente Externo</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="precio">Precio:</label>
                            <input type="number" class="form-control" id="precio" name="precio" value="<?= $producto['precio'] ?>">
                        </div>
                        <button type="submit" class="btn btn-success btn-block mt-3">Guardar Cambios</button>
                        <button type="button" class="btn btn-danger btn-block mt-3" onclick="window.history.back();">Cancelar</button>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

