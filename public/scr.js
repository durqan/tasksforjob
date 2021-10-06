$(function () {

    $('#submit').on('click', function (e) {

        let subscribe = 0;
        let name = $('#name').val();
        let email = $('#email').val();
        let phone = $('#phone').val();
        let password = $('#password').val();

        if ($('#flexCheckDefault').is(':checked')) {
            subscribe = 1;
        }


        $.ajax({
            url: '/registrate',
            data: {name: name, email: email, phone: phone, password: password, subscribe: subscribe},
            success: function (suc) {
                window.location.replace("/");
            }
        });
    });
});
