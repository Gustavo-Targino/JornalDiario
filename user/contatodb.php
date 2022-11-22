<?php

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO fale_conosco (nome, idade, email, telefone, endereco, mensagem) 
    VALUES ('$nome', '$idade','$email','$telefone',
    '$endereco','$mensagem')";

    $insert = mysqli_query($conn, $sql);

    if(!$insert){
        echo "Ocorreu um erro ao cadastrar no banco de dados. 
        <a href='?pg=faleconosco'>Tente Novamente</a>";
    } else {
       echo "<h4 id='form-success-message'>Olá, $nome! Sua mensagem foi enviada com sucesso.</h4>";
       echo "<h5> <a href='?pg=principal' class='form-link'>Voltar para a página principal</a> </h5>";
    echo "<h5 id='form-success-message'> <a href='?pg=faleconosco' class='form-link'>Enviar outra mensagem</a> </h5>";
    }

?>