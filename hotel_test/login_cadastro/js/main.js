function cadastrarUsuario() {
    // Captura os valores dos campos de formulário
    var nome = document.getElementById('nome_pessoa').value;
    var email = document.getElementById('email_pessoa').value;
    var telefone = document.getElementById('telefone_pessoa').value;
    var login = document.getElementById('login').value;
    var senha = document.getElementById('senha').value;

    // Cria um objeto FormData com os dados do formulário
    var formData = new FormData();
    formData.append('nome_pessoa', nome);
    formData.append('email_pessoa', email);
    formData.append('telefone_pessoa', telefone);
    formData.append('login', login);
    formData.append('senha', senha);

    // Opções para a requisição fetch
    var options = {
        method: 'POST',
        body: formData
    };

    // URL do script PHP que vai receber os dados
    var url = '../backend/LoginController.php';


   
}