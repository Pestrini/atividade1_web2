<?php
    $pasta = 'docs/' . $_GET['dir'];

    if(rmdir($pasta)){
        echo "OK. PASTA APAGADA.";
        echo '<br/>';
        echo '<a href="javascript:history.back()">VOLTAR<a/>';
    }else {
        echo 'ERRO AO APAGAR. A PASTA NÃO EXISTE';
        echo '<br/>';
        echo '<a href="javascript:history.back()">VOLTAR<a/>';
    }
?>