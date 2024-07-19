<?php

if (isset($_POST['dataAjax']) && $_POST['dataAjax'] != '') {
    $ajax = json_decode($_POST['dataAjax'], true);

  
    $ajax['action'] === 'cadastrarUsuario' ? cadastrarUsuario($ajax) : '';
  }

// function connectDatabase() {
//     $host = 'localhost';
//     $dbname = 'reserva_teste';
//     $username = 'root';
//     $password = '';

//     try {
//         $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         return $conn;
//     } catch (PDOException $e) {
//         die('Erro de conexão: ' . $e->getMessage());
//     }
// }


function cadastrarUsuario($data) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reserva_teste";
  
    $login = $data['login'];
    $senha = $data['senha'];
    $nome = $data['nome'];
    $cpf = $data['cpf'];
    $email = $data['email'];
    $telefone = $data['telefone'];

  

   
    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    $sql = "INSERT INTO usuario (login, senha, email, nome_pessoa, telefone_pessoa, cpf_pessoa) 
            VALUES (?, ?, ?, ?, ?, ?)";


    if ($stmt = $conn->prepare($sql)) {
        
        $stmt->bind_param("ssssss",$login, md5($senha), $email, $nome, $telefone, $cpf);

       
        if ($stmt->execute()) {
            $response = array("status" => "success", "message" => "Usuário cadastrado com sucesso!");
        } else {
            $response = array("status" => "error", "message" => "Erro ao cadastrar usuário: " . $stmt->error);
        }

       
        $stmt->close();
    } else {
        $response = array("status" => "error", "message" => "Erro na preparação da declaração: " . $conn->error);
    }

    $conn->close();

   
    echo json_encode($response);
}

?>


