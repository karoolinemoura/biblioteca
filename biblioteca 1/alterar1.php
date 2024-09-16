<html>
    <head>
        <meta charset="utf-8">
        <title>Gestão da biblioteca</title>
    </head>
    <body>
        <h1>Alteração de Manuais</h1>
        <form action="alterar2.php" method="post">
        <label for="isbnP">Qual o livro a alterar: </label>
        <select name="isbnP">
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
        $sql ="SELECT * FROM livro";
        // a variavel resultado vai guardar todos os dados de todos os manuais
        // o primeiro parametro é a base dados e o segundo a instrução sql
        $resultado =mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao)); 
        //enquanto conseguir ler dados do array resultado imprime
        while($linha = mysqli_fetch_assoc($resultado)){
            echo "<option value='". $linha['isbn']. "'>";
            echo $linha['titulo']. "</option>";            
        }
        mysqli_close($ligacao);
        //fecho a instrução de escrita em php
        ?>
        </select>
        <input type="submit" value="Alterar">
        </form>
        <br/>
        <a href="index.html" target="_self">Volta ao Menu</a>
    </body>
</html>
