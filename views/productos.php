<?php
include '../index.php';
include 'agregarProducto.php';
?>
<html>
<head>
    <?php
    include 'sources.php';
    ?>
    <script src = "/js/productos.js"></script>
</head>

<body>
<a data-toggle="modal" data-target="#modalAddProd" class= "btn btn-primary" href="">Agregar producto</a>


<p></p>
<tr></tr>
<table id ="tbAddProducto">
    <thead class="text-center">
    <tr>
        <th>codigo</th>
        <th>nombre</th>
        <th>precio</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</body>
</html>