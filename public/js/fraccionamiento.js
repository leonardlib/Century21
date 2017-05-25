$(function(){

    $('#tabFraccionamientos').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        }
    });

    $(".boton_modificar").on("click", function(){

    	var id = $(this).val();

    	$.ajax({
            type: "POST",
            url: 'fraccionamientos.getFraccionamiento',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
            },
            success: function(data) {
            	

                var cliente = data;
                console.log(cliente);

           		$("#modalModificar #inputId").val(cliente.id);
           		$("#modalModificar #inputNombre").val(cliente.nombre);
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
            url: 'fraccionamientos.eliminar',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
            },
            success: function(data) {
            	window.location.href = "fraccionamientos";
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