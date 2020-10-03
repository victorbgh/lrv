<?php
    session_start();
    require_once("conexao.php");

    $id = $conn->real_escape_string($_POST['id']);
    $nome_loja = $conn->real_escape_string($_POST['nome_loja']);
    $cnpj = $conn->real_escape_string($_POST['cnpj']);
    $endereco = $conn->real_escape_string($_POST['endereco']);
    $bairro = $conn->real_escape_string($_POST['bairro']);
    $estado = $conn->real_escape_string($_POST['estado']);
    $lat = floatval ($conn->real_escape_string($_POST['lat']));
    $lng = floatval ($conn->real_escape_string($_POST['lng']));
    $cep = $conn->real_escape_string($_POST['cep']);
    $tipoPonto = $conn->real_escape_string($_POST['tipoPonto']);
    $cidade = $conn->real_escape_string($_POST['cidade']);
    $telefone_loja = $conn->real_escape_string($_POST['telefone_loja']);
    $delivery = $conn->real_escape_string($_POST['delivery']);
    $venda_online = $conn->real_escape_string($_POST['venda_online']);
    $ponto_aprovado = $conn->real_escape_string($_POST['ponto_aprovado']);
    $site = $conn->real_escape_string($_POST['site']);
    $email = $conn->real_escape_string($_POST['email']);
    $tipoRedeSocial = $conn->real_escape_string($_POST['tipoRedeSocial']);
    $nomeRedeSocial = $conn->real_escape_string($_POST['nomeRedeSocial']);
        
    $result_usuario = "UPDATE `pontos_venda` SET `nome_loja`='$nome_loja', `cnpj`='$cnpj', `endereco`='$endereco', `bairro`='$bairro', 
    `estado`='$estado', `lat`='$lat', `lng`='$lng', `cep`='$cep', `tipoPonto`='$tipoPonto', `cidade`='$cidade', `telefone_loja`='$telefone_loja', `delivery`='$delivery', `venda_online`='$venda_online', 
    `ponto_aprovado`='$ponto_aprovado', `site`='$site', `email`='$email', `tipoRedeSocial`='$tipoRedeSocial', `nomeRedeSocial`='$nomeRedeSocial' WHERE id=$id";
    
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    if(mysqli_affected_rows($conn) != 0){
        exit('success');   
    }else{
        exit("erro");  
    }
    
    
?>