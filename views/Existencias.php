<?php
include '../index.php';
include 'agregarExistencia.php';
?>
<html>
<head>
    <?php
    include 'sources.php';
    ?>
    <script src = "/js/Existencia.js"></script>
</head>

<body>
<a data-toggle="modal" data-target="#modalAddExistencia" class= "btn btn-primary" href="">Agregar Existencias</a>
<p></p>
<div class = "form-inline">
    <label for=""><h4>No Sucursal: </h4></label>
    <div class ="form-group">
        <select class="form-control" name = "select" id ="select">
            <option value ="1" selected>todas</option>
            <option value ="3">1</option>
            <option value = "4">2</option>

        </select>
    </div>
</div>
<p></p>
<table id ="tbAddExistencia">
    <thead class="text-center">
    <tr>
        <th>codigo</th>
        <th>id_sucursal</th>
        <th>existencias</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</body>
</html>