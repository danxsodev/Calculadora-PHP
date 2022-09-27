<?php 
include'index.html';

        $value1 = $_POST['txt-value1'];
        $value2 = $_POST['txt-value2'];
        $operacoes = $_POST['radio-operacoes'];

        if ($operacoes == 'radio-soma') {
            $result = $value1 + $value2;
        }
        else if ($operacoes == 'radio-sub') {
            $result = $value1 - $value2;
        }
        else if ($operacoes == 'radio-mult') {
            $result = $value1 * $value2;
        }
        else if ($operacoes == 0) {
            echo "<script language='javascript'>window.alert('Divisão por zero inexistente');</script>";
        }
        else {
            $result = $value1 / $value2;
    }

    echo "O resultado é: $result";
?>
