<!DOCTYPE html>
<html lang="En">
<?php require_once("Vistas/Modulos/Head_y_Dependencias.php"); ?>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <?php 
        if (!isset($_SESSION['usu_ok'])) 
        {
            require_once("Vistas/Paginas/login.php");
        }
        else
        {
            if (empty($_SESSION['usu_ok'])) 
                {?>
                    <!-- Spinner End -->
                    <?php require_once("Vistas/Modulos/NavLat.php"); ?>
                    <!-- Content Start -->
                    <div class="content">
                        <?php require_once("Vistas/Modulos/NavSup.php"); ?>

                        <div class="container-fluid pt-4 px-4">
                            <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                                <div class="col-md-6 text-center">
                                    <?php $url=new Mvc_Ctlr; $url->urls_Ctlr(); ?>
                                </div>
                            </div>
                        </div>
                        <?php require_once("Vistas/Modulos/Footer.php"); ?>
                    </div>
                    <!-- Content End -->
                    <!-- Back to Top -->
                    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
                <?php } ?>
            <?php } ?> 
        </div>
        <?php require_once("Vistas/Modulos/DependenciasJs.php"); ?>
    </body>
    </html>