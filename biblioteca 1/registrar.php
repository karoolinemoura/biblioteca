<!DOCTYPE html>
<html lang="pt">
<head>
<!-- área reservada para as meta tags -->
<meta charset="utf-8">
<meta http-equiv="refresh" content="3000;url=registrar.php">
<link type="text/css" rel="stylesheet" href="style.css">
<title>OLZ</title>
</head>
<body>
<h1>farfeth - Compra e vende tudo</h1> 
<h2>Registo de utilizador</h2>

<?php

// verifica se $uploadok está a 0 por algum erro
if ($uploadOk == 0) {
    echo "O seu ficheiro não foi enviado, ";
} else {
    // Corrigi o $target_file
    move_uploaded_file($_FILES["ficheiro"]["tmp_name"], $target_file);

    // Crio o hash da senha
    $tmp = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    // Escapo as variáveis para evitar injeção de SQL
    $nick = mysqli_real_escape_string($ligacao, $_POST['nick']);
    $nome = mysqli_real_escape_string($ligacao, $_POST['nome']);
    $email = mysqli_real_escape_string($ligacao, $_POST['email']);
    $data_nasc = mysqli_real_escape_string($ligacao, $_POST['data_nasc']);

    // Crio a instrução SQL para adicionar um registo na base de dados
    $sql = "INSERT INTO Leitor (leitor_id, primeiro_nome, ultimo_nome, data_aniversario, morada, telemovel, email) VALUES ('$leitor_id', '$primeiro_nome', '$ultimo_nome', '$data_aniversario' , '$email', '$telemovel', '$email',);";

    // Tenta inserir na base de dados
    echo $sql;
    if (mysqli_query($ligacao, $sql)) {
        echo "<h2>Registo efetuado com sucesso!</h2>";
    } else {
        echo "<h2>Erro ao efetuar o registo: " . mysqli_error($ligacao) . "</h2>";
    }

    mysqli_close($ligacao);
}
?>
<br/>

<input type="button" value="Voltar ao menu" class="custom-button" onclick="window.open('index.html', '_self')">

</body>
</html>
