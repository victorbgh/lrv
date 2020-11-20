<?php
    //Usar em ambiente de desenvolvimento, comentar o de teste
    // $servidor = "localhost";
    // $usuario = "root";
    // $senha = "";
    // $dbname = "lrv";

    //HEROKU
    $servidor = "blonze2d5mrbmcgf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $usuario = "qq9qospzqqcw22y7";
    $senha = "tdh0xvi7x239i0j5";
    $dbname = "x8obzw3h9gxs6qq1";  
    
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
