$(function() {
    var form = $('#book-taxi-ride');
    var formMessages = $('#form-messages');
    $(form).submit(function(event) {
        event.preventDefault();
        var formData = $(form).serialize();
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        }).done(function(response) {
            $(formMessages).removeClass('alert-danger');
            $(formMessages).addClass('alert-success');
            $(formMessages).text(response);
            $('#full-name').val('');
            $('#email').val('');
            $('#package-type').val('');
            $('#passengers').val('');
            $('#start-dest').val('');
            $('#end-dest').val('');
            $('#ride-date').val('');
            $('#ride-time').val('');
        }).fail(function(data) {
            $(formMessages).removeClass('alert-success');
            $(formMessages).addClass('alert-danger');
            if (data.responseText !== '') {
                $(formMessages).text(data.responseText);
            } else {
                $(formMessages).text('Oops! An error occured and your message could not be sent.');
            }
        });
    });
});