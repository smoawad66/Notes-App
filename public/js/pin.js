$('#pin').on('click', function (event) {
    event.preventDefault();
    const form = $('#pin_form');
    $.ajax({
        type: 'POST',
        url: form.attr('action'),
        data: form.serialize(),
        success: function (response) {
            let status = $('#status').attr('value');
            status = status == 1 ? true : false;
            if (status == false) {
                $('#pin p').html('<i class="bi bi-pin-angle-fill"></i>');
                $('#pin').attr('title', 'Unpin');
                $('#status').attr('value', 1);
            } else {
                $('#pin p').html('<i class="bi bi-pin-angle"></i>');
                $('#pin').attr('title', 'Pin');
                $('#status').attr('value', 0);
            }
        },
    });
});
