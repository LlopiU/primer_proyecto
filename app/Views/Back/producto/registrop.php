<body class="gradient-custom">
	<div class="container mt-0 mb-0">
		<div class="card-header text-justify">
			<div class="row d-flex justify-content-center mt-3">
				<div class="card col-lg-3 " style="width: 50%; background-color: #343a40;">
				<center><h4 class="text-white">Registrar Producto</h4></center>

				<?php $validation = \Config\Services::validation(); ?>
				<form method="post" action="<?php echo base_url('/enviar-formp') ?>">
					<?= csrf_field(); ?>
					<?= csrf_field(); ?>
					<?php if (!empty(session()->getFlashdata('fail'))) : ?>
						<div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
					<?php endif ?>
					<?php if (!empty(session()->getFlashdata('success'))) : ?>
						<div class="alert alert-danger"><?= session()->getFlashdata('success'); ?></div>
					<?php endif ?>
					<div class="card-body justify-content-center" style="background-color: #343a40; color: white;">
						<div class="form">
							<label for="exampleFormControlInput1" class="form-label">Nombre</label>
							<input name="nombre" type="text" class="form-control" placeholder="Nombre del producto">
							<?php if ($validation->getError('nombre')) : ?>
								<div class='alert alert-danger mt-2'>
									<?= $error = $validation->getError('nombre'); ?>
								</div>
							<?php endif; ?>
						</div>
						<div class="mb-3">
							<label for="exampleFormControlTextarea1" class="form-label">Marca</label>
							<input type="text" name="marca" class="form-control" placeholder="Marca">
							<?php if ($validation->getError('marca')) : ?>
								<div class='alert alert-danger mt-2'>
									<?= $error = $validation->getError('marca'); ?>
								</div>
							<?php endif; ?>
						</div>
                        <div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Cantidad</label>
							<input name="cantidad" type="text" class="form-control" placeholder="Cantidad">
							<?php if ($validation->getError('cantidad')) : ?>
								<div class='alert alert-danger mt-2'>
									<?= $error = $validation->getError('cantidad'); ?>
								</div>
							<?php endif; ?>
						</div>
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Descripcion</label>
							<input name="descripcion" type="text" class="form-control" placeholder="Describe el producto">
							<?php if ($validation->getError('descripcion')) : ?>
								<div class='alert alert-danger mt-2'>
									<?= $error = $validation->getError('descripcion'); ?>
								</div>
							<?php endif; ?>
						</div>
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoria</label>
                            <select name="categoria" id="categoria" class="form-control">
                                <option value="1">Accesorio</option>
                                <option value="2">Componente Interno</option>
                                <option value="3">Componente Externo</option>
                            </select>
                            <?php if ($validation->getError('categoria')) : ?>
                                <div class="alert alert-danger mt-2">
                                    <?= $error = $validation->getError('categoria'); ?>
                                </div>
                            <?php endif; ?>
                        </div>

						
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Precio</label>
							<input name="precio" type="text" class="form-control" placeholder="Precio">
							<?php if ($validation->getError('precio')) : ?>
								<div class='alert alert-danger mt-2'>
									<?= $error = $validation->getError('precio'); ?>
								</div>
							<?php endif; ?>
						</div>
						<input type="submit" value="Guardar" class="btn btn-success ">
						<input type="reset" value="Cancelar" class="btn btn-danger">
					</div>
				</form>
			</div>

		</div>
		</div>
	</div>
</body>