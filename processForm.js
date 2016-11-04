/**
 * Created by Healer800 on 11/4/2016.
 */
$(document).ready(function() {

// Process the form Inputs
    $('form').submit(function(event) {

        // remove the past errors
        $('#name-group').removeClass('has-error');
        $('#name-group .help-block').empty();
        $('#password-group').removeClass('has-error');
        $('#password-group .help-block').empty();

        // remove success messages
        $('#messages').removeClass('alert alert-success').empty();

        // get the form data
        var formData = {
            'name'              : $('input[name=name]').val(),
            'password'    : $('input[name=password]').val()
        };

        //Passing pass form inputs and submitting through Ajax
        $.ajax({
            type        : 'POST',
            url         : 'process.php',
            data        : formData,
            dataType    : 'json',
            success     : function(data) {

                // log data to the console so we can see
                console.log(data);

                // if validation fails
                // add the error class to show a red input
                // add the error message to the help block under the input
                if ( ! data.success) {

                    if (data.errors.name) {
                        $('#name-group').addClass('has-error');
                        $('#name-group .help-block').html(data.errors.name);
                    }

                    if (data.errors.password) {
                        $('#password-group').addClass('has-error');
                        $('#password-group .help-block').html(data.errors.password);
                    }

                } else {

                    // if validation is good add success message
                    $('#messages').addClass('alert alert-success').append('<p>' + data.message + '</p>');
                    $("#loginForm")[0].reset();
                }
            }
        });

        // stop the form from submitting and refreshing
        event.preventDefault();
    });
});