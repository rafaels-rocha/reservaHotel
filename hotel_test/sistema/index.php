
<?php
require_once('../../api/menu_inicial.php')
?>

<div class="mx-auto mt-2 w-4/5 md:w-3/4 drop-shadow-md bg-gray-200 rounded-md" id="navbar-sticky">
  <div class="flex flex-col md:flex-row flex-wrap py-4 w-full drop-shadow-sm items-center justify-center">
    <div class="bg-gray-300 rounded-lg p-4 w-3/5 md:w-1/5 mx-2 mt-2 md:mt-0 flex flex-col justify-center ">
        <div class="">
            <span class="block font-bold">Check-in</span>
            <span class="block text-gray-500">Insira a data</span>
        </div>
        <input type="date" class="mt-2 rounded-lg w-full text-center">
    </div>
    
    <div class="bg-gray-300 rounded-lg p-4 w-3/5 md:w-1/5 mx-2 mt-2 md:mt-0 flex flex-col justify-center ">
        <div class="">
            <span class="block font-bold">Checkout</span>
            <span class="block text-gray-500">Insira a data</span>
        </div>
        <input type="date" class="mt-2 rounded-lg w-full text-center">
    </div>
    <div class="bg-gray-300 rounded-lg p-4 w-3/5 md:w-1/5 mx-2 mt-2 md:mt-0 flex flex-col justify-center ">
        <div class="">
            <span class="block font-bold">Hospedes</span>
            <span class="block text-gray-500">Insira a quantidade</span>
        </div>
          <select name="quantidade_hospedes" id="quantidade_hospedes" class="mt-2 rounded-lg w-full text-center">
              <option value=""></option>
              <option value="0">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
          </select>
      </div>
      <button class="bg-gray-300 rounded-full p-2 w-2/4 md:w-1/6 mx-2 flex justify-center items-center mt-2 md:mt-0">
          <p class="text-center flex items-center">
              <img src="../../api/img/search-interface-symbol.png" alt="Ícone de busca" class="h-4 mr-2">
              Buscar
          </p>
      </button>
  </div>
</div>


  
</body>
</html>