$(document).ready(function(){

$('#btnComprar').click(function(e){
    e.preventDefault();
  // alert('presioanste el boton comprar');
    var opcion = $('#opcion').val();
    var codigoBarras = $('#codigoBarras2').val();
    var numeroSucursal = $('#numeroSucursal2').val();
    var cantidad = $('#cantidad2').val();

console.log(numeroSucursal);

    $.ajax({
        type:'POST',
        url:'../controllers/compraController.php',
        data:{opcion:opcion,codigoBarras:codigoBarras,numeroSucursal:numeroSucursal,cantidad:cantidad},
        success:function(x){
            tablaExistencia.ajax.reload(null, false);

            console.log(x);

        },
        error:function(jqXHR,estado,error){
            console.log(jqXHR);
            console.log(estado);
            console.log(error);
        },
        complete:function(){

        }
    });
});



});