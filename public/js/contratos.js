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
});