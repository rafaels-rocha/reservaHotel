<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<script src="https://cdn.tailwindcss.com"></script>

<body class="">
  <div class="bg-gray-200 dark:bg-gray-900 w-full border-b p-2 border-gray-200 dark:border-gray-600">
    <nav>
        <div class="flex flex-col md:flex-row  rounded-lg  bg-white max-w-screen-xl flex-wrap items-center justify-between mx-auto p-6">
            <a href="#" class=" flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../../api/img/images.jpeg" class="h-8" alt="">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Reservar</span>
            </a>
            <div class="text-center m-5">
              <h2>Completamente desenvolvido por Rafael Rocha</h2>
          </div>
            <div class="flex md:order-2 space-x-3 mt-2">
                <a href="../login_cadastro/login.php">
                    <button type="button" class="text-white bg-cyan-500	 hover:bg-gray-300 hover:text-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 shadow-md text-center">Entrar</button>
                </a>
            </div>
        </div>
    </nav>
</div>