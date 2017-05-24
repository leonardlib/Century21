$(function(){
	
	

	$('#input-solicitud').on('click',function(){
		var solicitud_id = $(this).val();
		
		$('#input-nombre').val(solicitud_id).trigger('change');
		
		$('#input-fraccionamiento').val(solicitud_id).trigger('change');
		
		$('#input-lote').val(solicitud_id).trigger('change');
		
		$('#input-manzana').val(solicitud_id).trigger('change');
		
		$('#input-enganche').val(solicitud_id).trigger('change');
	});	



    $('#tabClientes').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        }
    });


    $(".boton_modificar").on("click", function(){

    	var id = $(this).val();

    	$.ajax({
            type: "POST",
            url: 'enganches.getEnganche',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
            },
            success: function(data) {
                console.log(data);

                $("#modalModificar #input-monto").val(data.monto);

                var fecha = new Date(data.fecha);
                fecha = fecha.getFullYear() + '-' + ("0" + (fecha.getMonth() + 1)).slice(-2)  + '-' + ("0" + (fecha.getDay() + 1)).slice(-2);
                $("#modalModificar #input-fecha-recibo").val(fecha);

                $("#modalModificar #input-concepto").val(data.concepto);

                $("#modalModificar #id").val(data.id);
                

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
            url: 'enganches.eliminar',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
            },
            success: function(data) {
                window.location.href = "enganches";
            },
            error: function(data) {
                console.log('Error:', data);

            }
        });
    });

});
