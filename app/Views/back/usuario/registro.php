<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card2">
            <h3 Clase="color:red" >Registrarse</h3>

            <?php $validation = \Config\Services::validation(); ?>

            <form id="registroForm" method="post" action="<?= base_url('/enviar-form')?>">

                <?= csrf_field();?>
                <?= csrf_field();?>
                <?php if (!empty(session()->getFlashdata('fail'))): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('fail');?></div>
                <?php endif?>

                <?php if (!empty(session()->getFlashdata('success'))): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('success');?></div>
                <?php endif ?>

                <div>
                    <div class="form">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
                        <!-- error -->
                        <?php if ($validation->getError('nombre')): ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('nombre') ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Apellido</label>
                        <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                        <!-- error -->
                        <?php if ($validation->getError('apellido')): ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('apellido') ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" placeholder="Email">
                        <!-- error -->
                        <?php if ($validation->getError('email')): ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('email') ?>
                            </div>
                        <?php endif ?>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Usuario</label>
                        <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                        <!-- error -->
                        <?php if ($validation->getError('usuario')): ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('usuario') ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Contraceña</label>
                        <input name="pass" type="password" class="form-control" placeholder="Contraceña">
                        <!-- error -->
                        <?php if ($validation->getError('pass')): ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('pass') ?>
                            </div>
                        <?php endif ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Registrar</button>
                <button type="button" class="btn btn-secondary" onclick="limpiarFormulario()">Cancelar</button>
            </form>
            <script>
                function limpiarFormulario() {
                    document.getElementById("registroForm").reset();}
            </script>
            </div>
        </div>

    </div>
</div>

