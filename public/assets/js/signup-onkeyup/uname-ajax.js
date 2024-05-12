$('#lname').on('keyup', function() {
    var lastName = $(this).val();
    $.ajax({
        type: 'POST',
        url: 'signup.php',
        data: { field: 'lname', value: lastName },
        success: function(response) {
            $('#lnameError').text(response);
        }
    });
});
 