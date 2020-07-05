$(document).ready(function () {
        //LOGIN
        $('#login-admin').on('submit', function(e){  
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
    
                    if(resultado.respuesta == 'exitoso'){
                        swal(
                            '¡Login Correcto!',
                            'Bienvenid@ '+resultado.usuario+'!! ',
                            'success'
                          )
                          setTimeout(function(){  
                            window.location.href = 'admin-area.php';
                          }, 2000);
                    } else {
                        swal({
                            type: "error",
                            title: "¡Error!",
                            text: "Usuario o Password Incorrectos",
                            confirmButtonText: "Cerrar",
                            })
                    }
                }
            });
        });
});