$(function(){

    $("#ver_recibo").on('click', function(){
        window.open(window.location.href+'VerPdf', '_blank')    
    });


    $('#tabReporteSaldos').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        }
    });
	
});
