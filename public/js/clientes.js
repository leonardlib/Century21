$(function(){


	

    $('#tabClientes').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        }/*,

        "fnDrawCallback": function() {
            //$('.check-estado').bootstrapToggle();
        },
        "scrollX": true,
        "processing": true,
        "serverSide": true,
        "ajax": 'clientes.tabla',
        "columns": [
            {data: 'id'},
            {data: 'nombre'},
            {data: 'saldo'},
            {data: 'telefono'},
            {data: 'colonia'},
            {data: 'ife'},
            {data: 'id',
                render: function(data, type, row) {
                    return '<button type="button" class="btn btn-success boton_modificar" id="modal_"'+data+' data-toggle="modal" data-target="#modalModificar" value='+data+'>Editar</button>'
                }
            },
            {data: 'id',
                render: function(data, type, row) {
                    return '<button type="button" class="btn btn-warning btn-circle btn-xl"><i class="glyphicon glyphicon-remove"></i></button>'
                }
            }
        ],*/
    });


    $(".boton_modificar").on("click", function(){
    	console.log("hoal mudno");

    	var id = $(this).val();

    	$.ajax({
            type: "POST",
            url: 'cliente.getCliente',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
            },
            success: function(data) {
            	

                var cliente = data;
                console.log(cliente);

           		$("#modalModificar #inputId").val(cliente.id);
           		$("#modalModificar #inputNombre").val(cliente.nombre);
           		$("#modalModificar #inputSaldo").val(cliente.saldo);
           		$("#modalModificar #inputTelefono").val(cliente.telefono);
           		$("#modalModificar #inputCalle").val(cliente.calle);
           		$("#modalModificar #inputIfe").val(cliente.ife);
           		$("#modalModificar #inputColonia").val(cliente.colonia);
           		$("#modalModificar #id").val(cliente.id);
            },
            error: function(data) {
                console.log('Error:', data);

            }
        });
    });
/*
    $("#modalGuardar").on("click", function(){
		var id 		= $("#modalModificar #id").val();
   		var nombre 	= $("#modalModificar #inputNombre").val();
   		var saldo 	= $("#modalModificar #inputSaldo").val();
   		var telefono= $("#modalModificar #inputTelefono").val();
   		var calle 	= $("#modalModificar #inputCalle").val();
   		var ife 	= $("#modalModificar #inputIfe").val();
   		var colonia = $("#modalModificar #inputColonia").val();
   	
    	$.ajax({
            type: "POST",
            url: 'clientes.editar',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
                nombre: nombre,
                saldo: saldo,
                telefono: telefono,
                calle: calle,
                ife: ife,
                colonia: colonia
            },
            success: function(data) {
            	
            },
            error: function(data) {
                console.log('Error:', data);

            }
        });
    });
*/
});