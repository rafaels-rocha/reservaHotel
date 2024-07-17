<?php
require_once('../../api/globais.php');
?>
<script src="js/main.js"></script>
<title>Faça seu login</title>

<body class="flex items-center justify-center h-screen bg-gray-200">

<form action="backend/index.php" method="POST" onsubmit="event.preventDefault(); cadastrarUsuario(); " id="cadastroForm" class="bg-white shadow-md rounded-md w-1/2">
        <div class="p-2 shadow-lg bg-gray-100 rounded-lg text-center">
            <h1 class="font-sans text-2xl font-bold">Faça o seu Cadastro</h1>
        </div>
        <div class="flex flex-wrap mt-6 mb-4 ms-4 ">
            <div class="w-1/2 px-2">
                <div class="w-5/6 px-2">
                    <label class="text-gray-700 text-sm font-bold mb-2" for="nome_pessoa">
                        Nome:
                    </label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nome_pessoa" name="nome_pessoa" placeholder="Digite seu nome">
                </div>
            </div>
            <div class="w-1/2 px-2">
                <div class="w-5/6 px-2">
                    <label class="text-gray-700 text-sm font-bold mb-2" for="email_pessoa">
                        Email:
                    </label>
                    <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email_pessoa" name="email_pessoa" placeholder="Digite seu email">
                </div>
            </div>
        </div>
        <div class="flex flex-wrap mt-6 mb-4 ms-4 ">
            <div class="w-1/2 px-2">
                <div class="w-5/6 px-2">
                    <label class="text-gray-700 text-sm font-bold mb-2" for="telefone_pessoa">
                        Telefone:
                    </label>
                    <input type="tel" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="telefone_pessoa" name="telefone_pessoa" placeholder="Digite seu telefone">
                </div>
            </div>
            <div class="w-1/2 px-2">
                <div class="w-5/6 px-2">
                    <label class="text-gray-700 text-sm font-bold mb-2" for="cpf_pessoa">
                        CPF:
                    </label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cpf_pessoa" name="cpf_pessoa" placeholder="Digite seu CPF">
                </div>
            </div>
        </div>
        <div class="flex flex-wrap mt-6 mb-4 ms-4 ">
            <div class="w-1/2 px-2">
                <div class="w-5/6 px-2">
                    <label class="text-gray-700 text-sm font-bold mb-2" for="login">
                        Login:
                    </label>
                    <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="login" name="login" placeholder="Digite seu login">
                </div>
            </div>
            <div class="w-1/2 px-2">
                <div class="w-5/6 px-2">
                    <label class="text-gray-700 text-sm font-bold mb-2" for="senha">
                        Senha:
                    </label>
                    <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="senha" name="senha" placeholder="Digite sua senha">
                </div>
            </div>
        </div>

        <div class="text-center my-6">
            <button type="button" id="btnCadastrar" class="w-1/2 bg-gray-500 hover:bg-slate-700 ease-linear duration-300 text-white rounded-lg py-2" >Cadastre-se</button>
        </div>
        <div class="text-left">
            <a href="login.php" class="m-4 text-gray-800 hover:text-gray-600">Já possui cadastro?</a>
        </div>
    </form>
</body>

</html>