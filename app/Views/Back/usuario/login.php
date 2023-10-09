<body class="gradient-custom">
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <?php if (session()->getFlashdata('msg')): ?>
            <div class="alert alert-warning">
              <?= (session()->getFlashdata('msg')) ?>
            </div>
          <?php endif; ?>
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
              <div class="card-body p-5 text-center">

                <div class="mb-md-5 mt-md-4 pb-5">

                  <h2 class="fw-bold mb-2 text-uppercase">Iniciar Sesion</h2>
                  <p class="text-white-50 mb-5">Por favor ingrese su Usuario y Conraseña</p>

                  <div class="form-outline form-white mb-4">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="email">
                    <label class="form-label" for="email">Email</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" name="pass" class="form-control form-control-lg" placeholder="password">
                    <label class="form-label" for="contraseña">Contraseña</label>
                  </div>
                  <input type="submit" value="Ingresar" class="btn btn-success">
                  <a href="<?php echo base_url('inicio'); ?>" class="btn btn-danger">Cancelar</a>
                </div>
                <div>
                  <p class="mb-0">No tienes una cuenta? <a href="<?php echo base_url('/registro'); ?>"
                      class="text-white-50 fw-bold nav-link">Registrarse</a>
                  </p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>