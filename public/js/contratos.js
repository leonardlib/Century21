$(function () {
    $('#input-solicitud').on('change', function () {
        var solicitud_id = $(this).val();

        $('#input-fraccionamiento').val(solicitud_id);
        $('#input-cliente').val(solicitud_id);
        $('#input-lote').val(solicitud_id);
        $('#input-manzana').val(solicitud_id);
        $('#input-frente').val(solicitud_id);
        $('#input-fondo').val(solicitud_id);
        $('#input-superficie').val(solicitud_id);
        $('#input-precio-metro').val(solicitud_id);
        $('#input-enganche').val(solicitud_id);
        $('#input-precio-total').val(solicitud_id);
        $('#input-saldo').val(solicitud_id);
    });

    $('#input-plazo').on('change', function () {
        var saldo = Number($('#input-saldo').find('option:selected').html());
        $('#input-saldo-1').val(saldo);

        $('#input-mensualidad').val(
            (saldo / $('#input-plazo').val()).toFixed(0)
        );
    });

    $(".boton_eliminar").on("click", function(){
        
        var id = $(this).val();

        $.ajax({
            type: "POST",
            url: 'contratos.eliminar',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
            },
            success: function(data) {
                window.location.href = "contratos";
            },
            error: function(data) {
                console.log('Error:', data);

            }
        });
    });

    $(".boton_modificar").on("click", function(){

        var id = $(this).val();

        $.ajax({
            type: "POST",
            url: 'contratos.getContrato',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
            },
            success: function(data) {
                console.log(data);

                $("#modalModificar #solicitud_id").val(data.solicitud_id);

                var fecha = new Date(data.fecha);
                fecha = fecha.getFullYear() + '-' + ("0" + (fecha.getMonth() + 1)).slice(-2)  + '-' + ("0" + (fecha.getDay() + 1)).slice(-2);
                $("#modalModificar #input-fecha-contrato").val(fecha);

                $("#modalModificar #saldo_id").val(data.saldo);

                $("#modalModificar #id").val(data.id);

                $("#modalModificar #input-plazo").val(data.plazo);

                $("#modalModificar #input-mensualidad").val(data.monto_mensual);

                

            },
            error: function(data) {
                console.log('Error:', data);

            }
        });
    });
});