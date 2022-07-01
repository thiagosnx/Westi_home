<?

$nome = addslashes ($_POST ['name']);
$email = addslashes ($_POST['email']);
$mensagem = addslashes ($_POST['message']);

$to= "wesleigor@hotmail.com" ;
$subject= "Formulário do site";
$body = "Nome: " . $nome . "\n".
        "Email: " . $email . "\n".
        "Mensagem: " . $mensagem . "\r\n".

$header ="from:suporte@westi.tech"."\r\n".
        "reply-to".$email ."\r\n".
        "x=mailer:PHP/".phpversion();

        header("location:./index.html");



?>