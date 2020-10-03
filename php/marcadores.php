<?php
require("conexao.php");

function parseToXML($htmlStr){
	$xmlStr=str_replace('<','&lt;',$htmlStr);
	$xmlStr=str_replace('>','&gt;',$xmlStr);
	$xmlStr=str_replace('"','&quot;',$xmlStr);
	$xmlStr=str_replace("'",'&#39;',$xmlStr);
	$xmlStr=str_replace("&",'&amp;',$xmlStr);
	return $xmlStr;
}

// Select all the rows in the markers table
$result_markers = "SELECT * FROM pontos_venda WHERE ponto_aprovado=1";
$resultado_markers = mysqli_query($conn, $result_markers);

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<markers>';

// Iterate through the rows, printing XML nodes for each
while ($row_markers = mysqli_fetch_assoc($resultado_markers)){
  // Add to XML document node
  echo '<marker ';
  echo 'nome_loja="' . parseToXML($row_markers['nome_loja']) . '" ';
  echo 'endereco="' . parseToXML($row_markers['endereco']) . '" ';
  echo 'bairro="' . parseToXML($row_markers['bairro']) . '" ';
  echo 'estado="' . parseToXML($row_markers['estado']) . '" ';
  echo 'lat="' . $row_markers['lat'] . '" ';
  echo 'lng="' . $row_markers['lng'] . '" ';
  echo 'tipoPonto="' . parseToXML($row_markers['tipoPonto']) . '" ';
  echo 'site="' . $row_markers['site'] . '" ';
  echo 'email="' . parseToXML($row_markers['email']) . '" ';
  echo 'cep="' . $row_markers['cep'] . '" ';
  echo 'telefone_loja="' . $row_markers['telefone_loja'] . '" ';
  echo 'delivery="' . $row_markers['delivery'] . '" ';
  echo 'venda_online="' . $row_markers['venda_online'] . '" ';
  echo 'cidade="' . parseToXML($row_markers['cidade']) . '" ';
  echo 'tipoRedeSocial="' . parseToXML($row_markers['tipoRedeSocial']) . '" ';
  echo 'nomeRedeSocial="' . parseToXML($row_markers['nomeRedeSocial']) . '" ';
  echo '/>';
}

// End XML file
echo '</markers>';
