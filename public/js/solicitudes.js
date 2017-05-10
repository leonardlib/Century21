$(function(){

    $('#tabClientes').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        }
    });


    $(".boton_modificar").on("click", function(){

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

    $(".boton_eliminar").on("click", function(){
    	
    	var id = $(this).val();

    	$.ajax({
            type: "POST",
            url: 'cliente.eliminar',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
            },
            success: function(data) {
            	window.location.href = "clientes";
            },
            error: function(data) {
                console.log('Error:', data);

            }
        });
    });

});