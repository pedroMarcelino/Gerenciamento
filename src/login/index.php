<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("../asset/includes/links.php");?>
    <title>LOGIN - Projeto de Gerenciamento</title>
</head>

<body class="">
    <div class="min-h-screen flex flex-col justify-center bg-violet-600">
        <div class="bg-white mx-auto max-w-md py-8 px-10 shadow rounded-lg">
            <div class="mb-4">
                <img src="../asset/img/loginImg.svg" alt="">
            </div>
            <div class="mb-4 mt-2">
                <p class="bg-yellow-300 p-4 rounded text-center font-bold uppercase hidden" id="returnMenssage"></p>
            </div>
            <div class="mb-4">
                <input type="text" id="email" placeholder="E-mail"
                    class="input appearance-none block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none">
            </div>
            <div class="mb-4">
                <input type="password" id="senha" placeholder="Senha"
                    class="input appearance-none block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none">
            </div>
            <div class="mb-4">
                <button id="btn-enviar"
                    class="inline-block w-full px-8 py-4 leading-none text-white bg-violet-800 hover:bg-violet-900 font-semibold rounded-full shadow">Entrar</button>
                <button id="btn-load"
                    class="inline-block w-full px-8 py-4 leading-none text-white bg-violet-800 font-semibold rounded-full shadow mt-1 flex justify-center items-center hidden"
                    disabled><img src="../asset/img/loading-btn.svg" class="w-5 animate-spin"></button>
                <button id="btn-correct"
                    class="inline-block w-full px-8 py-4 leading-none text-white bg-violer-800 font-semibold rounded-full shadow mt-1 flex justify-center items-center hidden"
                    disabled><img src="../asset/img/correct-signal.svg" class="w-5"></button>
            </div>
            <div class="nb-4">
                <p><a href="#" class="text-indigo-600">Esqueceu sua senha?</a></p>
                <p>Não tem uma conta? <a href="../register/index.php" class="text-indigo-600">Registre-se</a></p>
            </div>
        </div>
    </div>

    <script src="./login.js"></script>
</body>

</html>