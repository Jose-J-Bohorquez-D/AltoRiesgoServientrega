<?php 
if (isset($_SESSION['usu']) && $_SESSION['usu'] = "ok") {
    echo '<div class="sidebar pe-4 pb-3 ">';
}
else
{
    echo ' <div class="sidebar pe-4 pb-3 open"> ';
} 
?>


    <nav class="navbar bg-light navbar-light">
        <a href="index.php?act=inicio" class="navbar-brand mx-4 mb-3">
            <h4 class="text-primary">
                <!--<i class="fa fa-hashtag me-2"></i>-->
                <i class="fa fa-motorcycle"></i>
                AltoRiesgo
            </h4>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="Vistas/Librerias/DashMin/img/dev.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jose Bohorquez</h6>
                <span>Desarrollador</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.php?act=inicio" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-nowrap" data-bs-toggle="dropdown"><i class="fa fa-screwdriver-wrench me-2"></i>Gestion</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="index.php?act=usuarios" class="dropdown-item">Usuarios</a>
                    <a href="index.php?act=roles" class="dropdown-item disabled">Roles</a>
                    <a href="index.php?act=permisos" class="dropdown-item disabled">Permisos</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-list-check me-2"></i>Procesos</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="index.php?act=bodega" class="dropdown-item">Ingreso A Bodega</a>
                    <a href="index.php?act=reasignacion" class="dropdown-item">Reasignacion</a>
                    <a href="index.php?act=impManif" class="dropdown-item">Impresion Manifiesto</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-chart-pie me-2"></i>Reportes</a> 
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="index.php" class="dropdown-item disabled">Diario</a>
                    <a href="index.php" class="dropdown-item disabled">Semanal</a>
                    <a href="index.php" class="dropdown-item disabled">Quincenal</a>
                    <a href="index.php" class="dropdown-item disabled">Mensual</a>
                </div>
            </div>
            <a href="index.php?act=salir" class="nav-item nav-link"><i class="fa fa-user-lock"></i>Cerrar Sesion</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->