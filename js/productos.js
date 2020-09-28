$(document).ready(function(){

    tablaProds = $('#tbAddProducto').DataTable({
        "ajax":{
            "url": "../controllers/productoController.php",
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:1}, //enviamos opcion 4 para que haga un SELECT
            "dataSrc":""
        },
        "columns":[
            {"data": "codigo"},
            {"data": "nombre"},
            {"data": "precio"},
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-outline-light btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-outline-light btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
        ]
    });


    $('#btnAddProd').click(function(){

       // alert('presioanste el boton buscarProd');
         opcion = $('#opcion').val();
         codigoBarras = $('#codigoBarras2').val();
         nombreProd = $('#nombreProd2').val();
         precioUnitario = $('#precioUnitario2').val();
        console.log(codigoBarras);


        $.ajax({
            type:'POST',
            url:'../controllers/productoController.php',
            data:{opcion:opcion,codigoBarras:codigoBarras,nombreProd:nombreProd,precioUnitario:precioUnitario},
            success:function(x){
                tablaProds.ajax.reload(null, false);
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