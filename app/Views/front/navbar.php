    <!--  fondo ( bg-body-tertiary) //cambiar el fondo del --> 
    <!--  espaciado ( me-auto, mb-2, mb-lg-0, ).me-2// cambia el espacio entre los texto -->

<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('id_perfil');
  ?>

<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
          <nav class="navbar">
            <div class="container">
              <a class="navbar-brand" href="<?php echo base_url('principal')?>">
                <!-- logo/marca de la empresa -->
                <img src="<?php echo base_url('assets/img/d.png')?>" alt="" width="10px" height="30px" />

              </a>
            </div>
          </nav>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if(session()->id_perfil == 1): ?>
      <div class="btn btn-warning" >
        <a href="#">ADMIN: <?php echo session('nombre');?> </a>
      </div>
              <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="quiene_somos">Quiénes Somos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="acerca">Acerca de</a>
                  </li>
                  <li class="nav-item login">
                    <a class="nav-link" href=" <?php echo base_url('/logout'); ?>" tabindex= "-1" aria-disabled="true">Cerra Sesion</a>
                  </li>
                </ul>
              </div>

    <?php elseif(session()->id_perfil == 2 ): ?>
      <div class="btn btn-secondary active btnUser btn-sm" >
        <a href="">cliente: <?php echo session('nombre'); ?> </a>
      </div>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="quiene_somos">Quiénes Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="acerca">Acerca de</a>
            </li>
            <li class="nav-item login">
              <a class="nav-link" href=" <?php echo base_url('/logout'); ?>" tabindex= "-1" aria-disabled="true">Cerra Sesion</a>
            </li>
          </ul>
      </div>
    <?php else:?>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="acerca">Acerca de</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="registro">Registrarse</a>
        </li>
        <li class="nav-item login">
          <a class="nav-link" href="login">Acceso</a>
        </li>
      </ul>
    </div>
        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <?php endif;?>
  </div>
</nav>  


