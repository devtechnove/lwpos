
$(document).ready(function(){

  $('#main-form').submit(function(){

        $('.missing_alert').css('display', 'none');



        var data = $('#main-form').serialize();
        $('input').iCheck('disable');
        $('#main-form input, #main-form button').attr('disabled','true');
        $('#ajax-icon').removeClass('fas fa-sign-in-alt').addClass('mdi-spin');

        Pace.track(function () {
            $.ajax({
              url: $('#main-form #_url').val(),
              headers: {'X-CSRF-TOKEN': $('#main-form #_token').val()},
              type: 'POST',
              cache: false,
              data: data,
              success: function (response) {
                 if(response === 'authenticated.true'){
                   $('#ajax-icon').removeClass('fas fa-sign-in-alt').addClass('mdi-spin');
                   Toastify(
                    {
                        text: 'Usuario logueado satisfactoriamente.',
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
                   $(location).attr('href', $('#main-form #_redirect').val());
                  }
              },error: function (data) {
                var errors = data.responseJSON;
                $.each( errors.errors, function( key, value ) {
                 Toastify(
                    {
                        text: value,
                        duration: 3000,
                         className: "success",
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


                });
                $('input').iCheck('enable');
                $('#main-form input, #main-form button').removeAttr('disabled');
                $('#ajax-icon').removeClass('mdi-spin').addClass('fas fa-sign-in-alt');
            }
           });
        });

       return false;

    });
});
