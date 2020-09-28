<html>
<head>
</head>
<body>

<div class="modal fade" id="modalCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Comprar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formProv2"  method="post" accept-charset="utf-8" class="form-horizontal" action="">

                <div class="modal-body">


                    <div class ="form-group row">
                        <label for="codigoBarras2" class="col-3 col-form-label">codigo de barras</label>
                        <div class="col-8">
                            <input type="number" class="form-control input" id ="codigoBarras2" name="codigoBarras2" placeholder="codigo" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for ="numeroSucursal2" class="col-3 col-form-label">numero Sucursal</label>
                        <div class="col-8">
                            <input type="number" id ="numeroSucursal2" class="form-control input-sm" name="numeroSucursal2" placeholder="no. Sucursal" required>
                        </div>
                    </div>

                    <div class ="form-group row">
                        <input type="hidden" class="form-control input-sm" id ="opcion" name="opcion"  value="2" >


                        <label for="cantidad2" class="col-3 col-form-label">cantidad</label>
                        <div class="col-8">
                            <input type="number" class="form-control input-sm" id ="cantidad2" name="cantidad2" placeholder="cantidad" autofocus required>
                        </div>
                    </div>



                    <br>

                </div>
                <div class="modal-footer">
                    <button type="submit" id="btnComprar" class="btn btn-success" data-dismiss="modal">comprar</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <!--                    <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>-->
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>