<html>
<head>
</head>
<body>

<div class="modal fade" id="modalAddExistencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Existencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
<!--            <form id="formProv"  method="post" accept-charset="utf-8" class="form-horizontal" action="../controllers/productoController.php">-->
            <form id="formProv"  method="post" accept-charset="utf-8" class="form-horizontal" action="">

                <div class="modal-body">


                    <div class ="form-group row">
                        <label for="codigoBarras3" class="col-3 col-form-label">codigo de barras</label>
                        <div class="col-8">
                            <input type="number" class="form-control input" id ="codigoBarras3" name="codigoBarras3" placeholder="codigo" required>
                        </div>
                    </div>

                    <div class ="form-group row">
                        <input type="hidden" class="form-control input-sm" id ="opcion" name="opcion"  value="2" >


                        <label for="numeroSucursal3" class="col-3 col-form-label">No Sucursal</label>
                        <div class="col-8">
                            <input type="number" class="form-control input-sm" id ="numeroSucursal3" name="numeroSucursal3" placeholder="No. Sucursal" autofocus required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for ="cantidad3" class="col-3 col-form-label">Unidades</label>
                        <div class="col-8">
                            <input type="number" id ="cantidad3" class="form-control input-sm" name="cantidad3" placeholder="existencias" required>
                        </div>
                    </div>

                    <br>

                </div>

                <div class="modal-footer">
                    <button type="submit" id="btnAddExist" class="btn btn-success" data-dismiss="modal">agregar</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <!--                    <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>-->
                </div>
            </form>

        </div>
    </div>
</div>

</body>
</html>