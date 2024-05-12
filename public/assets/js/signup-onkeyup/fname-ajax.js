
$('#fname').on('keyup', function() {
    var firstName = $(this).val();
    $.ajax({
        type: 'POST',
        url: 'signup.php',
        data: { field: 'fname', value: firstName },
        success: function(response) {
            $('#fnameError').text(response);
        }
    });
});
 