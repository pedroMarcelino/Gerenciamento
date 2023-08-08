$(function () {
    $('#new-category').on('click', function () {
        $('.table-categoria').addClass('hidden');
        $('.form').removeClass('hidden').addClass('animate__fadeInRight animate__animated')

        $(this).addClass("hidden")
        $('#cancel-category').removeClass('hidden')
    });

    $('#cancel-category').on('click', function () {
        $(this).addClass('hidden');
        $('#new-category').removeClass('hidden')
        $('.table-categoria').removeClass('hidden').addClass('animate__fadeInRight animate__animated')
        $('.form').addClass('hidden');
    });


    $('#create-category').on('click', function () {

        if ($('#category').val() != "") {
            var data = {
                'category': $('#category').val(),
            }
            jQuery.ajax({
                type: 'POST',
                dataType: 'json',
                url: './pages/function/create-category.php',
                data: data,
                beforeSend: function () {
                    $('.create').addClass('hidden')
                    $('.loading').removeClass('hidden')

                    $('#create-category').attr('disabled', 'disabled');
                    $('#create-category').addClass('disabled:bg-violet-800 disabled:opacity-75')
                },
                success: function (data) {
                    console.log(data)
                    console.log(data.return)

                    if (data.return == 'existing_category') {
                        $('#returnMenssage').text("Categoria já existente!")
                        $('#returnMenssage').removeClass("hidden")

                        $('.loading').addClass('hidden')
                        $('.create').removeClass('hidden')

                        $('#category').val('').trigger("focus");
                        $('#create-category').removeClass('disabled:bg-violet-800 disabled:opacity-75').removeAttr("disabled")
                    } else if (data.return == false) {
                        $('#returnMenssage').text("Ocorreu algum erro, tente novamente mais tarde!")
                        $('#returnMenssage').removeClass("hidden")

                        $('.loading').addClass('hidden')
                        $('.create').removeClass('hidden')

                        $('#category').val('').trigger("focus");
                        $('#create-category').removeClass('disabled:bg-violet-800 disabled:opacity-75').removeAttr("disabled")
                    } else if (data.return == true) {
                        $('#returnMenssage').addClass("hidden")
                        $('#returnMenssageSuccess').removeClass('hidden')
                        setTimeout(function () {
                            $('.btn-categoria').click()
                        }, 1000);
                    }
                },
                done: function () {
                    $('#returnMenssage').addClass('hidden');
                    $('.create').removeClass('hidden')
                    $('.loading').addClass('hidden')
                },
            });
        } else {
            $('#returnMenssage').text("Preencha esse campo!")
            $('#returnMenssage').removeClass('hidden');
        }

    });
});


