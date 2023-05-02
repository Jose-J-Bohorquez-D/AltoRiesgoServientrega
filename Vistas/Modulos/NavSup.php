<?php 
if (isset($_SESSION['usu']) && $_SESSION['usu'] = "ok") {
    echo '
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-motorcycle"></i></h2>
        </a> 
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <div class="navbar-nav align-items-center ms-auto">
            <!-- Default dropstart button -->
        </div>
    </nav>
    <!-- Navbar End --> 
    ';
}
else
{
    echo '
<nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top px-4 py-0">
  <div class="container-fluid">
    <a class="navbar-brand d-flex" href="index.php?act=inicio">
    <h2 class="text-primary mb-0"><i class="fa fa-motorcycle"></i></h2>
      olympus shipments
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?act=inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?act=nosotros">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?act=servicios">Servicios</a>
        </li><!--
        <li class="nav-item">
          <a class="nav-link" href="index.php?act=contacto">Contacto</a>
        </li>-->
        <!--
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
    -->
      </ul>
      <div>
          <a href="index.php?act=login" type="button" class="btn btn-primary btn-sm btn-lg">Ingreso</a>
          <!--<a href="index.php?act=registro" type="button" class="btn btn-sm btn-outline-warning m-2">Registro</a>-->
      </div>
      <!--
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        -->
    </div>
  </div>
</nav>
    ';
}
?>