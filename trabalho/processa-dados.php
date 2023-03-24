<?php

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $datanascimento = $_POST["datanascimento"];
    $sexo = $_POST["sexo"];
    $tiposangue = $_POST["tiposangue"];
    $endereco = $_POST["endereco"];
    $doenca = $_POST["doenca"];

    $texto = $nome . "," . $cpf . "," . $datanascimento . "," . $sexo . "," . $tiposangue . "," . $endereco . ","
     . $doenca . "\n";

     $arquivo = fopen("banco.csv", "a");
     fwrite($arquivo, $texto);
     fclose($arquivo);

?>