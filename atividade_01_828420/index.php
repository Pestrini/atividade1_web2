<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charsat="UTF-8">
    <title> Trabalho WEB II </title>

<style>
    .divform {align-items: center;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;}

    form {border: 1px solid #CCC; float: left; padding: 12px; margin-top: 45px; font: 18px Arial, sans-serif; color:blueviolet}
    form input{padding: 5px; width: 350px;}
    form textarea{width: 350px;}
    form button{width: 200px; cursor: pointer;}
</style>

</head>

<body>
    
    <div class="formulario">
        <form name="formulario" action="formsdir.php" method="POST">
            <h1>FORMS DO PESTRINI</h1>
            <hr>
            <label for="labelcodigo"><h3>CODIGO: </h3></label>
            <input name= "codigo_dir" placeholder="Informe seu código" type="number"><br><br>
            <label for="labeldoc"><h3>NOME DO DOCUMENTO: </h3></label>
            <input name= "doc_dir" placeholder="Informe o nome do documento" type="text"><br><br>
            <label name= "labeldir" placeholder="Digite sua mensagem" type="text"><h3>TEXTO: </h3></label>
            <textarea id= "txt.dir" name="mensagem" placeholder="Digite sua mensagem" rows="10" cols="50"></textarea><br><br>
            <button name="botao.dir" type="submit">CRIAR</button>
        </form>
    </div>

    <div>
        <ul>
            <?php
                $diretorio = 'docs/';
                $ponteiro = opendir($diretorio);

                while ($nome_itens = readdir($ponteiro)) {
                    $itens[] = $nome_itens;
                }

                sort($itens);
                foreach ($itens as $listar) {
                    if ($listar != '.' && $listar != '..') {
                        $pastas[] = $listar;
                    }
                }

                if ($pastas != ''){
                    foreach ($pastas as $listar) {
                        echo "<li>$listar - <a href=\"rmdir.php?dir=$listar\">(X)EXCLUIR</a></li>";
                    }
                }
            ?>
        </ul>
    </div>  

</body>
</html>