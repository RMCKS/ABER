<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Armazena os campos de texto em variáveis
  $empresa = $_POST["name"];
  $email = $_POST["email"];
  $mensagem = $_POST["message"];

  // Imprime os valores armazenados
  echo "Empresa: $empresa<br>";
  echo "Email: $email<br>";
  echo "Mensagem: $mensagem<br>";

  // Você também pode armazenar esses valores em um banco de dados ou em um arquivo
  // Aqui está um exemplo de como armazenar em um arquivo
  $arquivo = fopen("contatos.txt", "a");
  fwrite($arquivo, "Empresa: $empresa\n");
  fwrite($arquivo, "Email: $email\n");
  fwrite($arquivo, "Mensagem: $mensagem\n\n");
  fclose($arquivo);
}

?>