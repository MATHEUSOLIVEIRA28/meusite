

<?php

//CONTATOCLIENTES
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['nome'];
  $email = $_POST['email'];
  $message = $_POST['message'];


  $mensagem_formatada = "Nome: $nome\n\nE-mail: $email\n\nAssunto: $assunto\n\nMensagem:\n$mensagem";

  if (mail($para, $assunto, $mensagem_formatada)) {
    echo 'Mensagem enviada com sucesso!';
  } else {
    echo 'Erro ao enviar mensagem. Por favor, tente novamente mais tarde.';
}
?>  