$(document).ready(function () {

    //check user exists or not
    $("#username").keyup(function () {

        var path = base_url + "SignupCtrl/check_user";
        var username = $("#username").val();
        $.ajax({
            type: "POST",
            url: path,
            data: {
                username: username
            },
            success: function (data) {
                $('#username-status').html(data);
            }
        });

        return false;
    });

    //check_user_email_exists
    $("#email").keyup(function () {

        var path = base_url + "SignupCtrl/check_user_email_exists";
        var email = $("#email").val();
        $.ajax({
            type: "POST",
            url: path,
            data: {
                email: email
            },
            success: function (data) {

                $('#email-status').html(data);
            }
        });

        return false;
    });
});