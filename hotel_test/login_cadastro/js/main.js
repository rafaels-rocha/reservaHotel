function myAjax(method, url, req, callback) {
  // EXEMPLO DE USO:

  // Crie uma constante do tipo objeto chamada.
  // É necessário que o objeto tenha a propriedade "action" para direcioná-lo a qual ação será executada.

  // const data = {
  //     action: "generateReport",
  //     type: "convenio",
  //     idConvenio: convenioSelect,
  // };

  // myAjax(método, url desejada, constante data, e uma função que será executada ao final);

  // myAjax("POST", CAMINHO_API+"clientes_api.php", data, (response) => {
  //     alert("Resposta: " + response);
  // });

  let newUpperCaseData = {};

  Object.keys(req).forEach((dataKey) => {
    let value = req[dataKey];

    if (dataKey !== "action") {
      const isArray = Array.isArray(value);
      const isObject = typeof value === "object";

      if (!isArray && !isObject) {
        // value.toString().toUpperCase();
      }
    }

    typeof value == 'string' ? value = value.replaceAll(',', "_@_") : ''

    newUpperCaseData[dataKey] = value;
  });

  let xhr = new XMLHttpRequest();

  if (method === "GET") {
    xhr.open(method, url, true);
    xhr.onreadystatechange = function () {
      if (xhr.status == 200 && xhr.readyState == 4) {
        callback(xhr.responseText);
      }
    };
    xhr.send();
  } else {
    xhr.open(method, url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.status == 200 && xhr.readyState == 4) {
        xhr.responseText = xhr.responseText.replace(/_@_/g, ',')

        callback(xhr);
      }
    };
    xhr.send("dataAjax=" + JSON.stringify(newUpperCaseData));
  }
}

function showAlert_2(status, message) {
  const alert = document.getElementById('alert');
  alert.classList.remove('success', 'error');  // Remove classes anteriores
  alert.classList.add('alert', status);  // Adiciona classes necessárias
  alert.textContent = message;
  alert.style.display = 'block';

  setTimeout(() => {
      alert.style.display = 'none';
  }, 3000); // Esconde o alerta após 3 segundos
}

function cadastrarUsuario() {
  const login = document.getElementById('login').value;
  const senha = document.getElementById('senha').value;
  const nome = document.getElementById('cpf_pessoa').value;
  const cpf = document.getElementById('cpf_pessoa').value;
  const email = document.getElementById('email_pessoa').value;
  const telefone = document.getElementById('telefone_pessoa').value;
  console.log(login + 'teste');

 
  const data = {
      action: "cadastrarUsuario",
      login: login,
      senha: senha,
      nome: nome,
      cpf: cpf,
      email: email,
      telefone: telefone,
    };
    myAjax("POST", "backend/index.php", data, (response) => {
      const result = JSON.parse(response.responseText.replaceAll('_@_', ','));
      showAlert_2(result.status, result.message);
    });
  
}

function loginUsuario() {
  
const login = document.getElementById('login').value;
const senha = document.getElementById('senha').value;


const data = {
    action: "loginUsuario",
    login: login,
    senha: senha,
    
   
    
       };
  myAjax("POST", "backend/index.php", data, (response) => {
    const result = JSON.parse(response.responseText.replaceAll('_@_', ','));
    showAlert_2(result.status, result.message);
    if (result.status === "success") {
     
      window.location.href = `../../hotel_test/sistema/?token=${result.token}`;
  }
  });

 


}