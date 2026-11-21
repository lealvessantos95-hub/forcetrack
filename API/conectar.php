<?php

$host = "localhost";

$usuario = "root";

$senha = "";

$banco = "forcetrack";

$conexao = new mysqli($host,$usuario,$senha,$banco);

if($conexao->connect_error){

    die("Erro de conexão");

}

?>