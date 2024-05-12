$('#pcode2').on('keyup', function() {
    var password = $('#pcode1').val();
    var confirmPassword = $(this).val();
    $.ajax({
        type: 'POST',
        url: 'signup.php',
        data: {
            field: 'pcode2',
            value: password,
            confirmValue: confirmPassword
        },
        success: function(response) {
            $('#pcode2Error').text(response);
        }
    });
});
 