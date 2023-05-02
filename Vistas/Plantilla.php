<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("Vistas/Modulos/Head_y_Dependencias.php"); ?>
<body>
<?php
if (!empty($_GET['act']) && $_GET['act'] == "login")
{
    require_once("Vistas/Paginas/login.php");
}
else
{
    echo ' <div class="container-xxl position-relative bg-white d-flex p-0"> ';
    if(isset($_SESSION['usu']) && $_SESSION['usu'] = "ok")
    {
        echo ' <div class="content"> ';
        require_once("Vistas/Modulos/NavLat.php");
    }else{
        echo ' <div class="content open"> '; 
    }
    
    require_once("Vistas/Modulos/NavSup.php");
    echo ' <div class="container-fluid pt-4 px-4">
           <div class="row vh-100 bg-light rounded mx-0">
           ';
    $url=new Mvc_Ctlr; $url->urls_Ctlr();
    echo ' </div>
           </div>';
    require_once("Vistas/Modulos/Footer.php");
    require_once("Vistas/Modulos/DependenciasJs.php");
} ?>
</body>
</html>