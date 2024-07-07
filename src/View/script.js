$(document).ready(function () {
    $('input, textarea').on('focus', function() {
        $('#errorMessages').hide();
    });

    $('#btnEnviar').click(function () {

        var obj = {
            nome: $('#fnameID').val() ?? 0,
            email: $('#emailID').val() ?? 0,
            comentario: $('#commentID').val() ?? 0,
        }
        if (!obj.nome || !obj.email || !obj.comentario) {
            $('#errorMessages').html('Por favor, preencha todos os campos.');
            $('#errorMessages').show();
            return 0;
        } else {
            $('#errorMessages').hide();
        }

        $.ajax({
            url: "../../index.php",
            type: "GET",
            data: obj,
            beforeSend: function () {
                console.log("Processando...")
            },
            success: function (data) {
                if (data != null) {

                    console.log("Funcionou!")
                    $('#errorMessages').html('Formulário enviado com sucesso!');
                    $('#errorMessages').addClass('success-text');
                    $('#errorMessages').show();

                    $('#fnameID').val(null);
                    $('#emailID').val(null);
                    $('#commentID').val(null);

                    $('#fnameID, #emailID, #commentID').on('click', function () {
                        $('#errorMessages').removeClass('success-text');
                        $('#errorMessages').html('Por favor, preencha todos os campos.');

                    });
                }

            },
            error: function (error) {
                console.error("Erro ao enviar o formulário: ", error);
                $('#errorMessages').html('Houve um erro ao enviar o formulário!');
                $('#errorMessages').show()
            }
        })
    })
})
