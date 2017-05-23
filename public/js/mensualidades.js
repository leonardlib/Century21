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
                $('#input-id-mensualidad').val(mensualidad_proxima.id);
                $('#input-pago').val(mensualidad_proxima.monto);
            }
        });
    });

    $('#input-contrato-vencido').on('change', function () {
        $.ajax({
            url: 'mensualidades_vencidas.contrato',
            data: {'id_contrato' : $('#input-contrato-vencido').find('option:selected').html()},
            type: 'POST',
            dataType: 'JSON',
            error: function (xhr) {
                console.log(xhr);
                alert('Ocurrio un error. Intentelo de nuevo.')
            },
            success: function (response) {
                console.log(response);

                var body = $('<tbody></tbody>');

                $.each(response.mensualidades_pagar, function (i, mensual) {
                    body.append(
                        '<tr> ' +
                        '   <td>' + mensual.id + '</td> ' +
                        '   <td>' + mensual.contrato_id + '</td> ' +
                        '   <td>' + mensual.monto + '</td> ' +
                        '   <td>' + mensual.fecha + '</td> ' +
                        '</tr>'
                    );
                });

                var head = $('<thead><tr> <th>#</th> <th>Contrato</th> <th>Monto $</th> <th>Fecha</th> </tr> </thead>');
                var htmlText = head.html() + body.html();
                console.log(htmlText)

                $('#tabContratosVencidos').html(htmlText);
            }
        });
    });
});