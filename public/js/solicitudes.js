$(function(){
    $('#tabSolicitudes').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        }
    });

    //Solicitud
    $('#input-fondo, #input-frente').on('change keyup paste', function () {
        $('#input-superficie').val(
            ($('#input-frente').val() * $('#input-fondo').val()).toFixed(2)
        );
    });

    $('#input-precio-metro').on('change keyup paste', function () {
        //Precio total
        $('#input-precio-total').val(
            ($('#input-precio-metro').val() * $('#input-superficie').val()).toFixed(2)
        );

        //Enganche
        $('#input-enganche').val(
            ($('#input-precio-total').val() * 0.05).toFixed(2)
        );
    });

    //Modal
    $('#modalModificar #input-fondo, #modalModificar #input-frente').on('change keyup paste', function () {
        $('#modalModificar #input-superficie').val(
            ($('#modalModificar #input-frente').val() * $('#modalModificar #input-fondo').val()).toFixed(2)
        );
    });

    $('#modalModificar #input-precio-metro').on('change keyup paste', function () {
        //Precio total
        $('#modalModificar #input-precio-total').val(
            ($('#modalModificar #input-precio-metro').val() * $('#modalModificar #input-superficie').val()).toFixed(2)
        );

        //Enganche
        $('#modalModificar #input-enganche').val(
            ($('#modalModificar #input-precio-total').val() * 0.05).toFixed(2)
        );
    });

    $(".boton_modificar").on("click", function(){

    	var id = $(this).val();

    	$.ajax({
            type: "POST",
            url: 'solicitudes.getSolicitud',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
            },
            success: function(data) {
            	

                var solicitud = data[0];
                var fecha = data[1];

           		$("#modalModificar #input-cliente").val(solicitud.cliente_id);
           		$("#modalModificar #input-fecha-solicitud").val(fecha);
           		$("#modalModificar #input-vendedor").val(solicitud.vendedor_id);
           		$("#modalModificar #input-fraccionamiento").val(solicitud.fraccionamiento_id);
           		$("#modalModificar #input-lote").val(solicitud.no_lote);
           		$("#modalModificar #input-manzana").val(solicitud.manzana);
           		$("#modalModificar #input-frente").val(solicitud.frente);
           		$("#modalModificar #id").val(solicitud.id);
                $("#modalModificar #input-fondo").val(solicitud.fondo);
                $("#modalModificar #input-superficie").val(solicitud.superficie);
                $("#modalModificar #input-precio-metro").val(solicitud.precio_metro);
                $("#modalModificar #input-enganche").val(solicitud.enganche);
                $("#modalModificar #input-precio-total").val(solicitud.precio_total);
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
            url: 'solicitudes.eliminar',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
            },
            success: function(data) {
            	window.location.href = "solicitudes";
            },
            error: function(data) {
                console.log('Error:', data);

            }
        });
    });

});