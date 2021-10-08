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

    $('#send_message').on('click', function (e) {
        e.preventDefault();

        let head = $('#head').val();
        let body = $('#body').val();
        let recipient_id = $('#recipient_id option:selected').attr('data-id');
        let section = $('#section option:selected').attr('data-id');

        $.ajax({
            url: '/send_message',
            data: {head: head, body: body, recipient_id: recipient_id, section: section},
            success: function (suc) {
                window.location.replace("/personal_page");
            }
        });
    })
});
