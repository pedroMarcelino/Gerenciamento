$(function () {
    // function dropDown() {
    //     document.querySelector('#submenu').classList.toggle('hidden')
    //     document.querySelector('#arrow').classList.toggle('rotate-0')
    // }
    // dropDown()

    // function Openbar() {
    //     document.querySelector('.sidebar').classList.toggle('left-[-300px]')
    // }

    $(".btn-dashboard").on('click', function () {
        $('.item-navbar').removeClass('bg-violet-600');
        $(this).addClass('bg-violet-600');
        $(".list").empty()
        LoadDashboar();

    });

    $(".btn-categoria").on('click', function () {
        $('.item-navbar').removeClass('bg-violet-600');
        $(this).addClass('bg-violet-600');
        $(".list").empty()
        $.ajax({
            type: 'POST',
            dataType: 'html',
            url: 'pages/categoria.php',
            beforeSend: function () {
                $('.loadPage').removeClass("hidden");
            },
            success: function (data) {
                // console.log(data)
                $(".list").append(data);
            },
            done: function () {
                $('.loadPage').addClass("hidden");
            }
        });

    });

    $(".btn-produtos").on('click', function () {
        $('.item-navbar').removeClass('bg-violet-600');
        $(this).addClass('bg-violet-600');
        $(".list").empty()

        $.ajax({
            type: 'POST',
            dataType: 'html',
            url: 'pages/produtos.php',
            beforeSend: function () {
                $('.loadPage').removeClass("hidden");
            },
            success: function (data) {
                // console.log(data)
                $(".list").append(data);
            },
            done: function () {
                $('.loadPage').addClass("hidden");
            }
        });
    });



    function LoadDashboar() {
        $.ajax({
            type: 'POST',
            dataType: 'html',
            url: 'pages/dashboard.php',
            beforeSend: function () {
                $('.loadPage').removeClass("hidden");
            },
            success: function (data) {
                // console.log(data)
                $(".list").append(data);
            },
            done: function () {
                $('.loadPage').addClass("hidden");
            }
        });
    }

    LoadDashboar();



});