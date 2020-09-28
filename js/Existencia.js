$(document).ready(function(){

    tablaExistencia = $('#tbAddExistencia').DataTable({

        "ajax":{
            "url": "../controllers/existenciaController.php",
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:1}, //enviamos opcion 4 para que haga un SELECT
            "dataSrc":""
        },
        "columns":[
            {"data": "codigo"},
            {"data": "numeroSucursal"},
            {"data": "cantidad"},
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-outline-light btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-outline-light btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
        ],
        "destroy": true
    });


    $('#select').change(function(){
        valorSelect =$('#select').val();

    tablaExistencia = $('#tbAddExistencia').DataTable({
        "ajax":{
            "url": "../controllers/existenciaController.php",
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:valorSelect}, //enviamos opcion 4 para que haga un SELECT
            "dataSrc":""
        },
        "columns":[
            {"data": "codigo"},
            {"data": "numeroSucursal"},
            {"data": "cantidad"},
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-outline-light btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-outline-light btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
        ],
        "destroy": true
    });


    });

$('#btnAddExist').click(function(e){
    e.preventDefault();
  // alert('presioanste el boton buscarProd');
    var opcion = $('#opcion').val();
    var codigoBarras = $('#codigoBarras3').val();
    var numeroSucursal = $('#numeroSucursal3').val();
    var cantidad = $('#cantidad3').val();



    $.ajax({
        type:'POST',
        url:'../controllers/existenciaController.php',
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