<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include("../asset/includes/links.php");?>
  <title>LOGIN - Projeto de Gerenciamento</title>
</head>
<body class="">
  <div class="min-h-screen flex flex-col justify-center bg-indigo-600">
    <div class="bg-white mx-auto max-w-md py-8 px-10 shadow rounded-lg">
        <div class="mb-4">
            <img src="../asset/img/loginImg.svg" alt="">
        </div>
        <form action="">
            <div class="mb-4">
                <input type="text" placeholder="E-mail" class="appearance-none block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none">
            </div>
            <div class="mb-4">
                <input type="password" placeholder="Senha" class="appearance-none block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-50 focus:bg-white border border-gray-200 focus:border-gray-500 rounded focus:outline-none">
            </div>
            <div class="mb-4">
                <button class="inline-block w-full px-8 py-4 leading-none text-white bg-indigo-600 hover:bg-indigo-700 font-semibold rounded shadow">Entrar</button>
            </div>
            <div class="nb-4">
                <p><a href="#" class="text-indigo-600">Esqueceu sua senha?</a></p>
                <p>Não tem uma conta? <a href="../register/index.php" class="text-indigo-600">Registre-se</a></p>
            </div>
        </form>
    </div>
  </div>
</body>
</html>