<?php
include 'views/compra.php';
?>
<html>
<head>
    <?php
    include 'views/sources.php';
    ?>
    <script src = "/js/compra.js"></script>
</head>
<body>
<ul class="nav">
<!--    <li class="nav-item">-->
<!--        <a class="nav-link active" href="/crearSucursal">sucursales</a>-->
<!--    </li>-->
    <li class="nav-item">
        <a class="nav-link" href="/views/productos.php">lista productos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/views/Existencias.php">Existencias</a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="#"  data-toggle="modal" data-target="#modalCompra">Compra</a>

    </li>
</ul>


</body>

</html>