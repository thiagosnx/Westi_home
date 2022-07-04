<?php


if(isset($_POST['email']) && !empty($_POST['email'])){


$nome = addslashes($_POST ['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to= "wesleigor@hotmail.com" ;
$subject= "Formulário - Westi.tech";
$body = "Nome: " . $nome . "\r\n".
        "Email: " . $email . "\r\n".
        "Mensagem: " . $mensagem;

$header ="from:suporte@westi.tech"."\r\n".
        "reply-to".$email ."\r\n".
        "x=mailer:PHP/".phpversion();

        if(mail($to, $subject, $body, $header)){
             //   header("location:index.html");
             echo("sucesso!!!!");
        
        }else{echo("Não foi possível enviar o e-mail");
        } 

}

?>