<?php

include "conectar.php";


$sql = "
    SELECT *
    FROM (

        SELECT
            id,
            forca,
            data_hora,
            anomalia

        FROM leituras

        ORDER BY id DESC

        LIMIT 50

    ) AS ultimas

    ORDER BY id ASC
";


$resultado =
    $conexao->query($sql);


$dados = [];


if ($resultado) {

    while (
        $linha =
        $resultado->fetch_assoc()
    ) {

        $dados[] = [

            "id" =>
                (int)$linha["id"],

            "forca" =>
                (float)$linha["forca"],

            "data_hora" =>
                $linha["data_hora"],

            "anomalia" =>
                (int)$linha["anomalia"]

        ];

    }

}


header(
    "Content-Type: application/json"
);


echo json_encode($dados);

?>