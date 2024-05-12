$('#pcode1').on('keyup', function() {
    var password = $(this).val();
    $.ajax({
        type: 'POST',
        url: 'signup.php',
        data: {
            field: 'pcode1',
            value: password
        },
        success: function(response) {
            $('#pcode1Error').text(response);
        }
    });
});