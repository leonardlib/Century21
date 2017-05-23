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

    //Contrato
    $('#input-contrato').on('change', function () {
        $.ajax({
            url: 'mensualidades.contrato',
            data: {'id_contrato' : $('#input-contrato').find('option:selected').html()},
            type: 'POST',
            dataType: 'JSON',
            error: function (xhr) {
                console.log(xhr);
                alert('Ocurrio un error. Intentelo de nuevo.')
            },
            success: function (response) {
                var mensualidad_proxima = response.mensualidades[response.mensualidades.length - 1];
                var fecha = new Date(mensualidad_proxima.fecha);
                fecha = fecha.getFullYear() + '-' + ("0" + (fecha.getMonth() + 1)).slice(-2)  + '-' + ("0" + (fecha.getDay() + 1)).slice(-2);
                $('#input-fecha-pago').val(fecha);
                $('#input-pago').val(mensualidad_proxima.monto);
            }
        });
    });
});