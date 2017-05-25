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
            url: 'vendedores.getVendedor',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
            },
            success: function(data) {

                var vendedor = data;
                console.log(vendedor);

                $("#modalModificar #id").val(vendedor.id);
                $("#modalModificar #inputNombre").val(vendedor.nombre);
                $("#modalModificar #inputCalle").val(vendedor.calle);
                $("#modalModificar #inputColonia").val(vendedor.colonia);
                $("#modalModificar #inputTelefono").val(vendedor.telefono);
                $("#modalModificar #inputCelular1").val(vendedor.celular1);
                $("#modalModificar #inputCelular2").val(vendedor.celular2);
                $("#modalModificar #inputEmail").val(vendedor.email);
                $("#modalModificar #inputComision").val(vendedor.comision);
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
            url: 'vendedores.eliminar',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
            },
            success: function(data) {
                window.location.href = "vendedores";
            },
            error: function(data) {
                console.log('Error:', data);

            }
        });
    });

    $('.btn-PDF').on('click', function () {
        window.open(window.location.href + 'PDF' + $(this).val(), '_blank');
    });

});