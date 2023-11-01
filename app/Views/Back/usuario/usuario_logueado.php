<body class="gradient-custom">
<div class="container mt-5">
    <div >
        <div class="">
            <?php if (session()->perfil_id == 1): ?>
            </div>
            <h1 class="text-center">Bienvenido Admin!</h1>
            <img class="center" src="<?php echo base_url('assets/img/admin.jpeg');?>" height="400px" width="500px">
        <?php elseif (session()->perfil_id == 2): ?>
            <h1 class="text-center">Bienvenido!</h1>
            <img class="center" src="<?php echo base_url('assets/img/cliente.jpeg');?>" height="400px" width="600px">
        <?php endif; ?>
    </div>
</div>
</body>