<div class="container mt-5">
    <div class= "row justify-content-md-center">
        <div class="col-5">
            <?php if (session()->getFlashdata('msg')): ?>
                <div class= "alert alert-warning">
                    <?= session()->getFlashdata('msg')?>
                </div>
                <?php endif;?>
                <br><br>
                <?php if(session()->id_perfil == 1): ?>
                <div>
                    <img class="center" height="100px" windth="100px" src="<?php echo base_url ('assets/img/admin.jpg');?>" >
                    <h1>Bienvenido</h1>
                </div>
                <?php if(session()->id_perfil == 2): ?>
                <div>
                    <img class="center" height="100px" windth="100px" src="<?php echo base_url ('assets\img\cliente.jpg');?>" >
                </div>
                <?php endif;?>
                <?php endif;?>
        </div>
    </div>
</div>