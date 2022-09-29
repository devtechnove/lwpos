
$(document).ready(function(){

  $('#main-form').submit(function(){

        $('.missing_alert').css('display', 'none');

        var data = $('#main-form').serialize();
        $('#main-form input, #main-form button').attr('disabled','true');
        $('#ajax-icon').removeClass('mdi mdi-check').addClass('spinner-border spinner-border-sm');


            $.ajax({
              url: $('#main-form #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#main-form #_token').val()},
              type: 'POST',
              cache: false,
              data: data,
              success: function (response) {
                 if(response === 'sended.true'){
                   $('#ajax-icon').removeClass('mdi mdi-check').addClass('spinner-border spinner-border-sm');
                    toastr.success('¡Recordatorio de contraseña enviado!');
                     $('#main-form input, #main-form button').removeAttr('disabled');
                     $('#ajax-icon').removeClass('spinner-border spinner-border-sm').addClass('mdi mdi-check');
                     $('#email').val('')

                  }
                  else
                  {
                    toastr.error('No se ha encontrado un usuario con esa dirección de correo.');
                    $('#main-form input, #main-form button').removeAttr('disabled');
                    $('#ajax-icon').removeClass('spinner-border spinner-border-sm').addClass('mdi mdi-check');
                  }
              },error: function (data) {
                var errors = data.responseJSON;
                $.each( errors.errors, function( key, value ) {
                  toastr.error(value);

                });

                $('#main-form input, #main-form button').removeAttr('disabled');
                $('#ajax-icon').removeClass('spinner-border spinner-border-sm').addClass('mdi mdi-check');
            }
           });

       return false;

    });
});
