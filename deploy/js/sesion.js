/*const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: 'btn btn-warning',
    },
    buttonsStyling: false
  })*/
  
Swal.fire({
    title: 'Solo administradores',
    text: "¡Esta pagina solo es para administradores!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#FF7F3F',
    cancelButtonColor: ' #A2CC3E',
    confirmButtonText: '¡Sí, soy administrador!',
    cancelButtonText: '¡No soy administrador!'
})



/*.then((resultado) => {
    if (resultado.isConfirmed) 
    swalWithBootstrapButtons.fire(
        'Puedes seguir',
        '¡Debes ser un administrador!',
        'success'
      )
        
    
})
 Swal.fire(
            '!Puedes seguir!',
            'Eres un administrador',
            'success',
            
        )*/