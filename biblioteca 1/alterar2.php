<html>
    <head>
        <meta charset="utf-8">
        <title>Gestão da Biblioteca</title>
    </head>
    <body>
    <?php
        // liga á base de dados
       $servidor="localhost";
            $utilizador="id22264274_karoline";
            $senha="Panico06-!";
            $bd="id22264274_bd_biblioteca";
        //criar a variavel ligacao (1º ip do servidor, 2º nome do utilizador)
        // (3º senha por defeito vazia, e 4º nome da base de dados)   
        $ligacao = mysqli_connect($servidor,$utilizador,$senha,$bd);
        // tento executar a ligação ao meu servidor
        if ($ligacao->connect_error)
            die(mysqli_error($ligacao));
        //crio a instrução sql para selecionar todos os registos
        $sql ="SELECT * FROM livro Where isbn='" . $_POST['isbnP']."'";
        // a variavel resultado vai guardar todos os dados de todos os manuais
        // o primeiro parametro é a base dados e o segundo a instrução sql
        $resultado =mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao)); 
        $linha = mysqli_fetch_assoc($resultado);
            ?>

        <h1>Alterar Livros</h1>
        <!-- o metodo post envia os dados de uma página para a outra de forma escondida
            o metodo get envia os dados para a página seguinte pela barra de endereço-->
        <form action="alterar3.php" method="post">
            <p>
                <label for="IsbnP">ISBN:</label>
                <input type="text" name="IsbnP" size="13" 
               readonly value="<?php echo $linha['isbn']; ?>" /></p>
            <p>
                <label for="tituloP">Título:</label>
                <input type="text" name="tituloP" size="80" required
                maxlength="100" value="<?php echo $linha['titulo']; ?>">
            </p>
            <p>
                <label for="autorP">Autor:</label>
                <input type="text" name="autorP" size="80" required
                maxlength="100" value="<?php echo $linha['autor']; ?>"/>
            </p>

            <p>
                <label for="n_paginasP">Nº Páginas:</label>
                <input type="number" name="n_paginasP" size="5" min="1" 
                max="99999" value="<?php echo $linha['n_paginas']; ?>">
            </p>
            <p>
                <label for="editoraP">Editora:</label>
                <input type="text" name="editoraP" size="50" 
                maxlength="50" value="<?php echo $linha['editora']; ?>">
            </p>
            <p>
                <label for="tamanhoP">Tamanho:</label>
                <input type="text" name="tamanhoP" size="10"
                maxlength="10" value="<?php echo $linha['tamanho']; ?>">
            </p>
            <!--O botao submit envia os dados para a pagina inserir.php o reset limpa
                os dados de todos os campos -->
            <input type="submit" value="Atualizar">
            <input type="reset" value="limpar">
            <br><br>
            <a href="index.html" target="_self">Voltar ao menu</a>
        </form>
    </body>
</html>