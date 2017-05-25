$(function(){

    $('#tabUsuarios').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        }
    });

    $(".boton_modificar").on("click", function(){

    	var id = $(this).val();

    	$.ajax({
            type: "POST",
            url: 'usuarios.getUsuario',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
            },
            success: function(data) {
            	

                var usuario = data;
                console.log(usuario);
				
				$("#modalModificar #id").val(usuario.id);	
           		$("#modalModificar #inputNombre").val(usuario.name);
           		$("#modalModificar #inputCorreo").val(usuario.email);
           		$("#modalModificar #inputPassword").val("");
           		
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
            url: 'usuario.eliminar',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            data: {
                id: id,
            },
            success: function(data) {
            	window.location.href = "usuarios";
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
