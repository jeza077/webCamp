$(document).ready(function () {
    $('.sidebar-menu').tree()

    // DataTable 
    $('#registros').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'language'    : {
        paginate: {
          next: 'Siguiente',
          previous: 'Anterior',
          last: 'Último',
          first: 'Primero'
        },
        info: 'Mostrando _START_ a _END_ de _TOTAL_ resultados',
        emptyTable: 'No hay registros',
        infoEmpty: '0 Registros',
        search: 'Buscar:',
        lengthMenu: 'Mostrar _MENU_ registros'
      }
    });

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //Initialize Select2 Elements
    $('.select2').select2();

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false,
      timeFormat: 'HH:mm'
    });

    //FontAwesome Icon Picker
    $('#icono').iconpicker();

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    });
     //Flat red color scheme for iCheck
     $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    });

    // LINE CHART
    $.getJSON('servicio-registrados.php', function(data) {
      // console.log(data);
        var line = new Morris.Line({
          element: 'grafica-registros',
          resize: true,
          data: data,
          xkey: 'fecha',
          ykeys: ['cantidad'],
          labels: ['Total Registros'],
          lineColors: ['#3c8dbc'],
          hideHover: 'auto'
        });
    });
    

  //---------------------------------------------------------------------------------------------------------------------  
    //CREAR REGISTRO
    $('#crear_registro_admin').attr('disabled', true);

    //CONFIRMAR PASSWORD
    $('#confirmar_password').on('input', function() {
      var password_nuevo = $('#password').val();

      if($(this).val() == password_nuevo){
        $('#resultado_password').text('Correcto');
        $('#resultado_password').parents('.form-group').addClass('has-success').removeClass('has-error');
        $('input#password').parents('.form-group').addClass('has-success').removeClass('has-error');
        $('#crear_registro_admin').attr('disabled', false);  
      } else {
        $('#resultado_password').text('No son iguales');
        $('#resultado_password').parents('.form-group').addClass('has-error').removeClass('has-success');
        $('input#password').parents('.form-group').addClass('has-error').removeClass('has-success');
        $('#crear_registro_admin').attr('disabled', true);
      }
    });

    
})