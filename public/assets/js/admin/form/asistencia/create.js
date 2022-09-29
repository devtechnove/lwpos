$(document).ready(function(){

  $('#main-form').submit(function(){

        var data = $('#main-form').serialize();
        $('input').iCheck('disable');
        $('#main-form input, #main-form button').attr('disabled','true');
        $('#ajax-icon').removeClass('fa fa-save').addClass('fa fa-spin fa-refresh');

        Pace.track(function () {
            $.ajax({
              url: $('#main-form #_url').val(),
                  headers: {'X-CSRF-TOKEN': $('#main-form #_token').val()},
                  type: 'POST',
              cache: false,
                data: data,
              success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                 Toastify(
                    {
                        text: '¡Datos registrados satisfactoriamente!',
                        duration: 3000,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style:
                        {
                           background: "#12DB03",
                        },
                    }
                    ).showToast();

                    $('#main-form input, #main-form button').removeAttr('disabled');
                    $('#ajax-icon').removeClass('fa fa-spin fa-refresh').addClass('fa fa-save');
                    $('#register-name').val('');
                    $('#register-username').val('');
                    $('#register-zona').val('');
                    $('#register-distrito').val('');
                    $('#register-email').val('');
                    $('#register-email').val('');
                    $('#register-empresa').val(1);
                    $('#register-estado').val(1);
                    $('#register-password').val('');
                    $('#register-password-confirm').val('');


                }
                else
                {
                     Toastify(
                    {
                        text: 'Registro de asistencia existente',
                        duration: 3000,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style:
                        {
                           background: "#FF0000",
                        },
                    }
                    ).showToast();
                      $('#main-form input, #main-form button').removeAttr('disabled');
                      $('#ajax-icon').removeClass('fa fa-spin fa-refresh').addClass('fa fa-save');
                       window.location.href = '/home';
                     return false;
                }
              },error: function (data) {
                var errors = data.responseJSON;
                console.log(errors);
                $.each( errors.errors, function( key, value ) {
                  Toastify(
                    {
                        text: value,
                        duration: 3000,
                        close: true,
                        gravity: "top", // `top` or `bottom`
                        position: "right", // `left`, `center` or `right`
                        stopOnFocus: true, // Prevents dismissing of toast on hover
                        style:
                        {
                           background: "#FF0000",
                        },
                    }
                    ).showToast();
                  return false;
                });
                $('input').iCheck('enable');
                $('#main-form input, #main-form button').removeAttr('disabled');
                $('#ajax-icon').removeClass('fa fa-spin fa-refresh').addClass('fa fa-save');
              }
           });
        });

       return false;

    });
});
