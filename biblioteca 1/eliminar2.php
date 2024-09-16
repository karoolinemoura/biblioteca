<html>
    <head>
        <meta charset="utf-8">
        <title>Gestão de  Livros</title>
        <meta http-equiv="refresh" content="2;url=eliminar1.php">
    </head>
    <body>
        <h1>Eliminar Livros</h1>
        <?php
        // liga á base de dados
        $servidor="localhost";
            $utilizador="id22264274_karoline";
            $senha="Panico06-!";
            $bd="id22264274_bd_biblioteca";
        $ligacao = mysqli_connect($servidor,$utilizador,$senha,$bd);
        //crio a instrução sql para eliminar o registo
        $sql ="DELETE from livro WHERE isbn='".$_POST['isbnP']."'";

        // caso consiga executar a ação mostra a mensagem de sucesso
        if (mysqli_query($ligacao, $sql))
            echo "<h3>Livro eliminado com sucesso!</h3>"; 
        mysqli_close($ligacao); echo "<br/>";
        ?>
        <br/><h4>Aguarde que vai ser redirecionado</h4>
        <a href="eliminar1.php" target="_self">Volta ao Menu</a>
    </body>
</html>