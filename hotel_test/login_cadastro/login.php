<?php
require_once('../../api/globais.php');
?>
<title>Faça seu login</title>
<body class="flex items-center justify-center h-screen bg-gray-200">

    <form class="bg-white shadow-md rounded-md px-10 py-8 mb-4">
        <div class=" p-2  shadow-lg bg-gray-100 rounded-lg  text-center">
            <h1 class="font-sans text-2xl font-bold">Faça o seu Login</h1>
        </div>
        <div class="mt-6 mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                Login:
            </label>
            <input type='name' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Seu login">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Senha:
            </label>
            <input type='password' class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" placeholder="Sua senha">
        </div>

        <div class="text-center my-6">
            <button id="fazerLogin" class="w-1/2 bg-gray-500 hover:bg-slate-700 ease-linear duration-300 text-white rounded-lg py-2" onclick="fazerLogin()">Entrar</button>
        </div>
        <div class="text-left">
            <a href="cadastro.php" class="text-gray-800 hover:text-gray-600">Cadastre-se</a>
        </div>
    </form>

</body>

</html>