//signin
$('#signin').on('click', function () {
    var path_uri = base_url + "LoginCtrl/signin";
    var username = $("#login-username").val();
    var password = $("#login-password").val();
    $('#login-response').show();
    $.ajax({
        type: "POST",
        url: path_uri,
        data: {
            username: username,
            password: password
        },
        success: function (data) {

            setTimeout(function () {
                $('#login-response').hide(100);
            }, 2500);

            $('#login-response').html(data);
            if (data === "success") {
                $('#login-response').html('<i class="fa fa-check-circle" aria-hidden="true"></i> Login success, please wait.....');
                $('#login-response').css({"background-color": "skyblue", "color": "white"});

                setTimeout(function () {
                    window.location.href = base_url + 'ln';
                }, 1500);
            }else{
                $('#login-response').html('<i class="fa fa-check-circle" aria-hidden="true"></i> Login unsuccessful');
            }
        }
    });
    return false;
});