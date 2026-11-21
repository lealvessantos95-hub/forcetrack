<?php

include "conectar.php";

if (!isset($_POST["forca"])) {
    die("Erro: nenhum valor de força foi enviado.");
}

$forca = floatval($_POST["forca"]);

$data = date("Y-m-d H:i:s");

$anomalia = 0;


/*
    Busca as últimas 5 leituras
*/

$sql = "SELECT forca
        FROM leituras
        ORDER BY id DESC
        LIMIT 5";

$resultado = $conexao->query($sql);


/*
    Calcula a média das leituras anteriores
*/

if ($resultado && $resultado->num_rows >= 3) {

    $soma = 0;

    $quantidade = 0;

    while ($linha = $resultado->fetch_assoc()) {

        $soma += floatval($linha["forca"]);

        $quantidade++;

    }

    $media = $soma / $quantidade;


    /*
        Detecta uma variação muito grande
    */

    if ($media > 0 && $forca > ($media * 2)) {

        $anomalia = 1;

    }

}


/*
    Salva a leitura no banco
*/

$sql = "INSERT INTO leituras
        (forca, data_hora, anomalia)
        VALUES
        ('$forca', '$data', '$anomalia')";


if ($conexao->query($sql)) {

    echo "Leitura salva com sucesso!";

} else {

    echo "Erro ao salvar: " . $conexao->error;

}

?>