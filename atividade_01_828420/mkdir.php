<?php
$dirname = $_POST['cod_dir'];
$dir = "docs/$dirname";

if(is_dir($dir)){
    echo 'PASTA \"$dirname\" JÁ EXISTENTE NO DIRETORIO.';
    echo '<br/>';
    echo '<a href="javascript:history.back()">VOLTAR<a/>';
}else {
    mkdir($dir,0777);
    echo 'OK. PASTA CRIADA';
    echo '<br/>';
    echo '<a href="javascript:history.back()">VOLTAR<a/>';
}

?>