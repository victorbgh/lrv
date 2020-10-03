<?php
    session_start();
    require_once("conexao.php");

    // if(isset($_SESSION['loggedIN'])){
    //     header('Location: ../index.php');
    //     exit();
    // }

    $id = $conn->real_escape_string($_POST['id']);
    $ponto_aprovado = $conn->real_escape_string($_POST['ponto_aprovado']);


        
    $result_usuario = "UPDATE `pontos_venda` SET `ponto_aprovado`='$ponto_aprovado' WHERE id=$id";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
        exit('success');   
    }else{
        exit("erro");  
    }
    
?>