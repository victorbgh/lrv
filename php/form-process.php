<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);

    $to = "contato@lrvbrasil.com";
    $subject = "Mensagem do Formulario de contato";
    $body = "Nome: ". $nome. "\r\n".
            "E-mail: ". $email. "\r\n".
            "Mensagem: ". $mensagem;
    
    $header = "From:site@larevolucion.com". "\r\n"
                ."Reply-To:".$email. "\r\n"
                ."x=Mailer:PHP/".phpversion();
    
    if(mail($to, $subject, $body, $header)){
        exit('success');
    }else{
        echo('error');
    }
}



?>