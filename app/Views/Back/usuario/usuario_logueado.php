<body class="gradient-custom">
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if (session()->getFlashdata('msg')): ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>
            <br><br>
            <?php if (session()->perfil_id == 1): ?>
            </div>
            <img class="center" src="<?php echo base_url('assets/img/admin.jpg');?>" height="400px" width="200px">
        <?php elseif (session()->perfil_id == 2): ?>
            
            <img class="center" src="<?php echo base_url('assets/img/cliente.jpg');?>" height="400px" width="600px">
        <?php endif; ?>
    </div>
</div>
</body>