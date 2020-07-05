$(document).ready(function () {
   //CREAR Y/O ACTUALIZAR REGISTRO 
    $('#guardar-registro').on('submit', function(e){  
        e.preventDefault();

        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: datos,
            dataType: "json",
            success: function (data) {
                console.log(data);

                var resultado = data;

                if(resultado.respuesta == 'exito'){
                    swal({		
                    type: "success",
                    title: "¡Correcto!",
                    text: "Se guardo correctamente",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location.href = 'lista-admin.php';
                        }
                    });
                } else {
                    swal({
                        type: "error",
                        title: "¡Error!",
                        text: "Hubo un error",
                        confirmButtonText: "Cerrar",
                        })
                }
            }
        });
    });

       //CREAR REGISTRO CUANDO HAY UN ARCHIVO(IMAGEN)
       $('#guardar-registro-archivo').on('submit', function(e){  
        e.preventDefault();

        var datos = new FormData(this);

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: "json",
            contentType: false,
            processData: false,
            async: true,
            cache: false,
            success: function (data) {
                console.log(data);

                var resultado = data;

                if(resultado.respuesta == 'exito'){
                    swal({		
                    type: "success",
                    title: "¡Correcto!",
                    text: "Se guardo correctamente",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar",
                    closeOnConfirm: false
                    }).then((result)=>{
                        if(result.value){
                            window.location.href = 'lista-admin.php';
                        }
                    });
                } else {
                    swal({
                        type: "error",
                        title: "¡Error!",
                        text: "Hubo un error",
                        confirmButtonText: "Cerrar",
                        })
                }
            }
        });
    });

    //ELIMINAR REGISTRO
    $('.borrar_registro').on('click', function(e) {
        e.preventDefault();

        var id = $(this).attr('data-id');
        var tipo = $(this).attr('data-tipo');

        swal({
            type: "warning",
            title: "¿Estás Seguro?",
            text: "Un registro eliminado no se puede recuperar",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Si, Eliminar!",
            cancelButtonText: 'Cancelar'
        }).then((result) => {  
            if(result.value){
                $.ajax({
                    type: "post",
                    url: 'modelo-'+tipo+'.php',
                    data: {
                        'id': id,
                        'registro': 'eliminar'
                    },
                    success: function (data) {
                        console.log(data);

                        var resultado = JSON.parse(data);
    
                        if(resultado.respuesta == 'exito'){
                            swal(
                                'Eliminado!',
                                'Registro Eliminado',
                                'success'
                            )
                            jQuery('[data-id="'+resultado.id_eliminado+'"]').parents('tr').remove();
                        } else {
                            swal(
                                'Error!',
                                'No se pudo eliminar',
                                'error'
                              )
                        }
                    }
                });
            }
           
        });

       

    });

});