<?php
function connectDatabase() {
    $host = 'localhost';
    $dbname = 'reserva_teste';
    $username = 'root';
    $password = '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die('Erro de conexão: ' . $e->getMessage());
    }
}

function fazerLogin($conn, $email, $senha){
    try {
        $sql = "SELECT * FROM usuario WHERE (email = :email OR login = :email) AND senha = :senha";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
        
        $user = $stmt->fetch();
        
        if ($user) {
            echo "Login bem-sucedido!";
            sleep(2); // Aguarda 2 segundos
            header('Location: ../../sistema/index.php');
            exit;
        } else {
            return "Login ou senha incorretos.";
        }
    } catch (PDOException $e) {
        die('Erro na consulta: ' . $e->getMessage());
    }
}

function cadastrarUsuario($conn, $cpf, $telefone, $login, $senha, $email, $nome) {
    try {
        // Verifica se o usuário já existe (pode ser pelo email ou login)
        $sql = "SELECT * FROM usuario WHERE email = :email OR login = :login";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':login', $login);
        $stmt->execute();
        
        if ($stmt->fetch()) {
            return "Email ou login já estão em uso.";
        }

        // Insere o novo usuário
        $sql = "INSERT INTO usuario (cpf, telefone, login, senha, email, nome) VALUES (:cpf, :telefone, :login, :senha, :email, :nome)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha); // Certifique-se de armazenar a senha de forma segura (hash)
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nome', $nome);
        $stmt->execute();
        
        return "Cadastro realizado com sucesso!";
    } catch (PDOException $e) {
        die('Erro no cadastro: ' . $e->getMessage());
    }
}