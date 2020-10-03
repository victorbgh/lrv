<?php
    session_start();
    require_once("conexao.php");

    // if(isset($_SESSION['loggedIN'])){
    //     header('Location: ../index.php');
    //     exit();
    // }

    if (isset($_POST['ponto'])){

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


        $result_ponto = "INSERT INTO pontos_venda(nome_loja, cnpj, endereco, bairro, estado, lat, lng, cep, tipoPonto, cidade, telefone_loja, delivery, venda_online, ponto_aprovado, site, email, tipoRedeSocial, nomeRedeSocial) VALUES ('$nome_loja','$cnpj', '$endereco', '$bairro', '$estado', '$lat', '$lng', '$cep', '$tipoPonto', '$cidade', '$telefone_loja', '$delivery', '$venda_online', '$ponto_aprovado', '$site', '$email', '$tipoRedeSocial', '$nomeRedeSocial')";
        $resultado_coleta = mysqli_query($conn, $result_ponto);
        
        if(mysqli_affected_rows($conn) != 0){
            $_SESSION['cadPonto'] = '1';
            exit('success');
        }else{
            exit("erro");  
        }
        
    }else{
        exit("erro no servidor");
    }
?>