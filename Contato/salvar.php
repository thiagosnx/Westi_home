<?php 

if (isset($_POST["form-submit"])){ 

   $name=$_POST["name"]; 
   $email=$_POST["email"]; 
   $message=$_POST["message"]; 


   echo "<p>Olá, ".$name."</p>"; echo "<p>Seu email é: ".$email."</p>"; 
   
   echo "<p>Sua mensagem é:<br/>".$msg."</p>"; 
} 

?>