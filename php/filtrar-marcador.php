<?php
    session_start();
    require_once('conexao.php');

    // $estado = $conn->real_escape_string($_POST['estado']);
    // $cidade = $conn->real_escape_string($_POST['cidade']);
    // $tipoPonto = $conn->real_escape_string($_POST['tipo']);

    $return_arr = array();

    $where = Array();

    $estado = getPostEstado('estado');
    $cidade = getPostCidade('cidade');
    $tipoPonto = getPostTipo('tipoPonto');


    if( $estado ){ $where[] = " `estado` = '{$estado}'"; }
    if( $cidade ){ $where[] = " `cidade` = '{$cidade}'"; }
    if( $tipoPonto ){ $where[] = " `tipoPonto` = '{$tipoPonto}'"; }

    $query = "SELECT * FROM pontos_venda ";
    if( sizeof( $where ) )
        $query .= ' WHERE '.implode( ' AND ',$where );

    // $query = "SELECT * FROM pontos_venda WHERE estado='$estado' or cidade='$cidade' or tipoPonto='$tipoPonto'";

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
                        "telefone_loja" => $telefone_loja);
    }

    echo json_encode($return_arr);

    function getPostEstado( $key ){
		return isset( $_POST[ $key ] ) && $_POST[ $key ] != "Estado" ? $_POST[ $key ] : null;
    }

    function getPostCidade( $key ){
		return isset( $_POST[ $key ] ) && $_POST[ $key ] != "Cidade" ? $_POST[ $key ] : null;
    }

    function getPostTipo( $key ){
		return isset( $_POST[ $key ] ) && $_POST[ $key ] != "tipoPonto" ? $_POST[ $key ] : null;
    }
?>