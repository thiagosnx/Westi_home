<?php
if (!empty($_POST['g-recapcha-response'])){
  continuar
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // O formulário foi enviado
  // Obter dados do formulário
  $nome = $_POST['name'];
  $email = $_POST['email'];
  $mensagem = $_POST['message'];

  // Validar e sanitizar dados do formulário aqui
  // ...

  // Definir informações de e-mail
  $para = 'wesleigor@hotmail.com';
  $assunto = 'Novo formulario enviado no site';
  $mensagem = "Nome: $nome\nE-mail: $email\nMensagem: $mensagem";

  // Enviar e-mail
  mail($para, $assunto, $mensagem);

  // Redirecionar de volta para a página HTML
  header('Location: thanks.html');
  exit();
}
?>
