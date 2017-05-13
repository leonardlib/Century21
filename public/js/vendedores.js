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
                window.location.href = "clientes";
            },
            error: function(data) {
                console.log('Error:', data);

            }
        });
    });
/*
    $("#modalGuardar").on("click", function(){
        var id      = $("#modalModificar #id").val();
        var nombre  = $("#modalModificar #inputNombre").val();
        var saldo   = $("#modalModificar #inputSaldo").val();
        var telefono= $("#modalModificar #inputTelefono").val();
        var calle   = $("#modalModificar #inputCalle").val();
        var ife     = $("#modalModificar #inputIfe").val();
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