<body class="gradient-custom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5 bg-dark text-white">
                    <div class="card-body">
                        <h4 class="card-title text-center">Editar Usuario</h4>
                        <?= form_open('usuarios/guardarEdicionU/' . $usuario['id_usuario']) ?>
                        
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $usuario['nombre'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $usuario['apellido'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="mail" class="form-control" id="email" name="email" value="<?= $usuario['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="perfil_id">Perfil:</label>
                            <select class="form-control" id="perfil_id" name="perfil_id">
                                <option value="1" <?= ($usuario['perfil_id'] == '1') ? 'selected' : '' ?>>Admin</option>
                                <option value="2" <?= ($usuario['perfil_id'] == '2') ? 'selected' : '' ?>>Cliente</option>
                            </select>
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