<?php
    //Usar em ambiente de desenvolvimento, comentar o de teste
    // $servidor = "localhost";
    // $usuario = "root";
    // $senha = "";
    // $dbname = "lrv";

    //HEROKU
    $servidor = "r1bsyfx4gbowdsis.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $usuario = "eof7om1qzujx79nd";
    $senha = "kpfvseiv8x1zq2id";
    $dbname = "g3xz4txjserp868e";  
    
    //PRODUCAO   
    // $servidor = "mysql.hostinger.com";
    // $usuario = "u542059022_victorhgb";
    // $senha = "Cshvhgb3625";
    // $dbname = "u542059022_lrv";  


    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }      
?> 
