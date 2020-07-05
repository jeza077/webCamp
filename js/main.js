
//--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//JQUERY
$(function() {

    //Lettering.
    $('.nombre-sitio').lettering()

    //Agregar Clase a Menu.
    $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');
   
    //Menu Fijo.
    var windowHeight = $(window).height();//Nos dara la altura de la ventana.
    var barraAltura = $('.barra').innerHeight();//Nos dara la altura de la barra del menu.

    $(window).scroll(function() { 
        var scroll = $(window).scrollTop()
        if(scroll > windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({'margin-top': barraAltura+'px'});//Para que se quite el salto al hacer scroll hacia abajo.
      
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top': '0px'});//Para que se quite el salto al hacer scroll hacia arriba.
        }
    });

    //Menu Responsive.
    $('.menu-movil').on('click', function() {
        $('.navegacion-principal').slideToggle();
      });

      $(window).resize(function() {//Detecta el tamaño de la pantalla y automáticamente esconde y muestra las clases dependiendo del ancho de la pantalla
        var windowWidth = $('.barra').width();
        if (windowWidth > 768) {
            $('.navegacion-principal').css({ 'display': 'block' });
        } else {
            $('.navegacion-principal').css({ 'display': 'none' });
        }
 
    });



    //Programa de Conferencias.
    $('.programa-evento .info-curso:first').show();//Que muestre solo la primer Tab.
    $('.menu-programa a:first').addClass('activo');//Agregar la Clase 'Activo' solo al primer enlace.
    $('.menu-programa a').on('click', function() {
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();//Al cambiar de Tab, que se oculte la anterior y solo muestre la seleccionada.

        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);

        return false;//Para que no de brinco(recargue pagina) al cambiar entre Tabs.
    });

    //Animaciones para los Numeros.
    $('.resumen-evento li:nth-child(1) p').animateNumber({number: 6}, 1200);  //--nth-child, selecciona los elementos                                                                               en base a su numero. Por ejemplo:                                                                                 Invitados seria 1, Talleres seria 2                                                                               y asi sucesivamente.

    $('.resumen-evento li:nth-child(2) p').animateNumber({number: 15}, 1200);
    $('.resumen-evento li:nth-child(3) p').animateNumber({number: 3}, 1200);
    $('.resumen-evento li:nth-child(4) p').animateNumber({number: 9}, 1300);


    //Cuenta Regresiva(Faltan).
    $('.cuenta-regresiva').countdown('2020/12/10 09:00:00', function(event){
        $('#dias').html(event.strftime('%D'));//'%D, de dias'.
        $('#horas').html(event.strftime('%H'));//'%H, de dias'.
        $('#minutos').html(event.strftime('%M'));//'%M, de dias'.
        $('#segundos').html(event.strftime('%S'));//'%S, de dias'.

    });


    //COLORBOX(Plugin)
    $('.invitado_info').colorbox({inline:true, width:"50%"});//Invitados informacion
    $('.boton_newsletter').colorbox({inline:true, width:"50%"});//Newsletter

});