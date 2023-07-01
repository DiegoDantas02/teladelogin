<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recupera os valores enviados pelo formulário
  $nome = $_POST['nome'];
  $idade = $_POST['idade'];
  $email = $_POST['email'];
  $objetivo = $_POST['objetivo'];
  $alergias = $_POST['alergias'];
  
  // Realize as ações necessárias com os dados recebidos
  // Por exemplo, você pode armazenar no banco de dados, enviar por email, etc.
  
  // Exemplo de exibição dos dados recebidos
  echo "Nome: " . $nome . "<br>";
  echo "Idade: " . $idade . "<br>";
  echo "Email: " . $email . "<br>";
  echo "Objetivo: " . $objetivo . "<br>";
  echo "Alergias Alimentares: " . $alergias . "<br>";
} else {
  // Caso o formulário não tenha sido enviado, redirecione para a página do formulário
  header('Location: formulario_nutricao.html');
  exit;
}
?>
