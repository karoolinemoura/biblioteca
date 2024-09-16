<html>
<head>
<meta charset="utf-8">
<title>Gestão da Biblioteca</title>
<!-- ao fim de 5 segundo redireciona para o index-->
<meta http-equiv="refresh" content="5;url=index.html">
</head>
<body>
<h1>Inserir Livros</h1>
<?php
            // liga á base de dados
            $servidor="localhost";
            $utilizador="id22264274_karoline";
            $senha="Panico06-!";
            $bd="id22264274_bd_biblioteca";
    //criar a variavel ligacao (1º ip do servidor, 2º nome do utilizador)
    // (3º senha por defeito vazia, e 4º nome da base de dados)   
    $ligacao = mysqli_connect($servidor,$utilizador,$senha,$bd);
 
        //crio a instrução sql para inserir um novo registo
        $sql ="INSERT INTO livro (isbn, titulo, autor, n_paginas, editora, tamanho) VALUES
            ('$_POST[isbnP]', '$_POST[tituloP]', '$_POST[autorP]',$_POST[num_pagP],
            '$_POST[editoraP]','$_POST[tamanhoP]')";
        // os campos recebidos do formulário anterior pelo metodo post, tudo tem pelicas
        // menos os campos do tipo numero (n_paginas tipo int)
        if (mysqli_query($ligacao, $sql))
            echo "<h3>Livro inserido com sucesso!</h3>"; 
        mysqli_close($ligacao); echo "<br/>";
        ?>
<br/><h4>Aguarde que vai ser redirecionado</h4><a href="index.html" target="_self">Volta ao Menu</a>
</body>
</html>
 