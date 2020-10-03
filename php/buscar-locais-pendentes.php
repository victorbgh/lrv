<?php
    session_start();
    require_once('conexao.php');

    $return_arr = array();

    $query = "SELECT * FROM pontos_venda WHERE ponto_aprovado=0";

    $result = mysqli_query($conn,$query);

    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $nome_loja = $row['nome_loja'];
        $endereco = $row['endereco'];
        $bairro = $row['bairro'];
        $estado = $row['estado'];
        $lat = $row['lat'];
        $lng = $row['lng'];
        $tipoPonto = $row['tipoPonto'];
        $site = $row['site'];
        $email = $row['email'];
        $delivery = $row['delivery'];
        $venda_online = $row['venda_online'];
        $cidade = $row['cidade'];
        $telefone_loja = $row['telefone_loja'];
        $tipoRedeSocial = $row['tipoRedeSocial'];
        $nomeRedeSocial = $row['nomeRedeSocial'];
    
        $return_arr[] = array("id" => $id,
                        "nome_loja" => $nome_loja,
                        "endereco" => $endereco,
                        "bairro" => $bairro,
                        "estado" => $estado,
                        "lat" => $lat,
                        "lng" => $lng,
                        "tipoPonto" => $tipoPonto,
                        "site" => $site,
                        "email" => $email,
                        "delivery" => $delivery,
                        "venda_online" => $venda_online,
                        "cidade" => $cidade,
                        "telefone_loja" => $telefone_loja,
                        "tipoRedeSocial" => $tipoRedeSocial,
                        "nomeRedeSocial" => $nomeRedeSocial);
    }

    echo json_encode($return_arr);
?>