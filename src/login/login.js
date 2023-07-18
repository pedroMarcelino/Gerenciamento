$(function () {

    $('#btn-enviar').on('click', function () {
        if (validaEmail()) {
            // console.log("asd");
            if (validaSenha()) {

                var data = {
                    "email": $("#email").val(),
                    "pass": $("#senha").val(),
                }

                console.log(data)

                $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: 'function/login-user.php',
                    data: data,
                    beforeSend: function () {
                        // console.log(123)
                        $("#btn-enviar").addClass(" hidden");
                        $("#btn-load").removeClass("hidden");
                    },
                    success: function (data) {
                        // console.log(data)
                        console.log(data.return)
                        if (data.return == true) {
                            // se tudo ir certo com email e senha é redirecionado
                            $("#btn-load").addClass("hidden");
                            $("#btn-correct").removeClass("hidden");
                            setTimeout(function () {
                                $(location).attr('href', '../dashboard/index.php');
                            }, 1400);
                        } else if (data.return == false) {

                            $("#returnMenssage").val("");
                            $("#returnMenssage").removeClass("hidden");
                            $("#returnMenssage").text("Email ou senha invalido!");

                            $("#btn-enviar").removeClass(" hidden");
                            $("#btn-load").addClass("hidden");

                        } else if (data.return == "user_not_found") {

                            $("#returnMenssage").val("");
                            $("#returnMenssage").removeClass("hidden");
                            $("#returnMenssage").text("Esse email não foi encontrado, registre-se!");

                            $("#btn-enviar").removeClass(" hidden");
                            $("#btn-load").addClass("hidden");

                        }
                    },
                });
            }
        }
    });




    function validaEmail() {
        const email = $("#email").val();
        let regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        // Se o e-mail não estiver no formato certo
        if ((email.search(regex) == -1)) {
            $("#email").attr("class", "appearance-none block w-full px-4 py-3 leading-tight text-red-700 bg-gray-50 focus:bg-white border border-red-300 focus:border-red-500 rounded focus:outline-none");
            $("#email").val("")

            $("#returnMenssage").val("");
            $("#returnMenssage").removeClass("hidden");
            $("#returnMenssage").text("Preencha o e-mail corretamente!");

            return false;
        } else {
            return true;
        }
    }

    function validaSenha() {
        const senha = $('#senha').val();

        if (senha == "") {
            $('#senha').attr("class", "appearance-none block w-full px-4 py-3 leading-tight text-red-700 bg-gray-50 focus:bg-white border border-red-300 focus:border-red-500 rounded focus:outline-none");
            $("#returnMenssage").val("");
            $("#returnMenssage").removeClass("hidden");
            $("#returnMenssage").text("Preencha o campo da senha!");
        } else {
            return true;
        }


    }

    $(".input").keyup(function () {
        $(this).attr("class", "appearance-none block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none")
        $("#returnMenssage").text("");
        $("#returnMenssage").addClass("hidden");
    });
});