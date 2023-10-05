<div  class="container" >
    <div class="row justify-content-center"> 
        <div class="col-md-6">
            <div class="card2">
                <h2>Iniciar sesion</h2>
            

            <!-- mensaje de error -->
            <?php if (session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning" >
                        <?= (session()->getFlashdata ('msg'))?>
                    </div>
            <?php endif;?>

            <!-- inicio del formulario de login  -->
            <form method ="post"  action="<?php echo base_url('/enviarlogin') ?>">
                <div>
                    <div class="mb-2">
                        <label for="exampleFormControlInput1" class=" form-label"> Correo </label>
                        <input name="email" type="email" class ="form-control" placeholder ="Correo">
                    </div>
                    <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Contraceña</label>
                    <div class="input-group">
                        <input name="pass" id="password" type="password" class="form-control" placeholder="Contraseña">
                        <button type="button" id="showPassword" class="btn btn-outline-secondary" onclick="togglePasswordVisibility()">Mostrar</button>
                    </div>
                </div>

                    <input type="submit"  href="<?php echo base_url('login');?>"value="Ingresar" class="btn btn-success">
                    <a type="reset" class="btn btn-secondary">Cancelar</a>
                    <br><span>¿Aun no se registro? <a href="<?php echo base_url('/registro');?>">
                    registrarse aqui</a></span>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
<script>
    function togglePasswordVisibility() {
        var passwordField = document.getElementById("password");
        var showPasswordButton = document.getElementById("showPassword");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            showPasswordButton.textContent = "Ocultar";
        } else {
            passwordField.type = "password";
            showPasswordButton.textContent = "Mostrar";
        }
    }
</script>


