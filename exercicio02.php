<?php
    // saida.php


    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    if ($_POST['cidade'] == "Curitiba") {
        echo "Curitibano!";
    } else {
        echo "Olá, " . $_POST['nome'] . " de " . $_POST['cidade'] . "!";
    }
?>