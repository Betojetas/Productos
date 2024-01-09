<?php
require_once("layouts/header.php");
?>
<h1 class="text-center">NUEVO</h1>
<form action="" method="get">
    <input type="text" placeholder="INGRESE NOMBRE:" name="nombre"> <br><br>
    <input type="text" placeholder="INGRESE PRECIO:" name="precio"> <br><br>
    <input type="submit" class="btn" name="btn" value="GUARDAR"> <input type="submit" class="btn" name="btn" value="ATRAS"> <br> <br>
    <input type="hidden" name="m" value="guardar">
    <input type="hidden" name="" value="atras">
</form>

<?php
require_once("layouts/footer.php");