$(function(){
    $('#form').on('click', function (e) {
        e.preventDefault();
    });
    $("#btn").on("click", function(){

        var login = $('#username').val();
        var pass = $('#pwd').val();

        $.ajax({
            url: 'file.php',
            method: 'POST',
            dataType: 'json',
            data: {username: login, password: pass},
            success: function (response) {
                alert('Redirecting to your grocery list!');
                if (response == 'OK') {
                    top.location.href = 'table.html';
                }
            }
        });

    })
});
