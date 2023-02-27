<div class="text-center"><h1>pagina de Salida</h1></div>

<?php
session_destroy(); 
echo '<script type="text/javascript"> window.location.href = "index.php?act=inicio";</script>';
?>