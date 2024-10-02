<form action="cadastro.php" method="post">
   
    <input type="submit" name="submit" id="submit">
</form>
<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Criar tabela se não existir
$sql = "CREATE TABLE IF NOT EXISTS cadastro (
    id INT AUTO_INCREMENT,
    nome VARCHAR(255),
    email VARCHAR(255),
    genero VARCHAR(255),
    data_nascimento DATE,
    cidade VARCHAR(255),
    estado VARCHAR(255),
    PRIMARY KEY (id)
)";
$conn->query($sql);

// Inserir dados na tabela
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $genero = $_POST["genero"];
    $data_nascimento = $_POST["data_nascimento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];

    $sql = "INSERT INTO cadastro (nome, email, genero, data_nascimento, cidade, estado)
            VALUES ('$nome', '$email', '$genero', '$data_nascimento', '$cidade', '$estado')";
    $conn->query($sql);

    echo "Cadastro realizado com sucesso!";
}

$conn->close();
?>