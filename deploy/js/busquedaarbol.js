$(document).ready(function () {

    $('#enviar').click(function (e) {
        e.preventDefault();

        var tronco = $('input:radio[name=tronco]:checked').val();
        var hoja = $('input:radio[name=hoja]:checked').val();
        var fruto = $('select[name=fruto]').val();
        var origen = $('select[name=origen]').val();
        var sitio = $('select[name=sitio]').val();

        if (tronco == undefined || hoja == undefined || fruto === null || origen === null || sitio === null) {

            
            Swal.fire({
                
                title: 'Por favor elige una opción',
                icon: 'error',
            });
        } else {
            $.ajax({
                url: "busquedaarbol.php",
                type: "POST",
                data: { tronco: tronco, hoja: hoja, fruto: fruto, origen: origen, sitio: sitio },
                success: function (link) {
                   if (link == 'error') {
                   

                    Swal.fire({
                        title: 'No se encontraron resultados',
                        icon: 'question',
        
                    });
                    
                   } else {

                    Swal.fire({
                        title: 'Se encontraron resultados',
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: 'Ir a ver',
                        denyButtonText: `No ver`,
                        cancelButtonText: 'Cancelar',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                          Swal.fire('Redirigir', '', 'success')
                          window.location.href = link;

                        } else if (result.isDenied) {
                          Swal.fire('Buscar otro árbol', '', 'info')
                        }
                      })
                   
                   }
                    
                }
            });
        }
    });



})