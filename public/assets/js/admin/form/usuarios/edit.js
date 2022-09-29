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
                  type: 'PATCH',
              cache: false,
                data: data,
               success: function (response) {
                var json = $.parseJSON(response);
                if(json.success){
                  $('#main-form #submit').hide();
                  $('#main-form #edit-button').attr('href', $('#main-form #_url').val() + '/' + json.user_id + '/edit');
                  $('#main-form #edit-button').removeClass('hide');
                 Toastify(
                    {
                        text: '¡Datos modificados satisfactoriamente!',
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
                }
              },error: function (data) {
                var errors = data.responseJSON;
                console.log(errors);
                $.each( errors.errors, function( key, value ) {
                  toastr.error(value);
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
