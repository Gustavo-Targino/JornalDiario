<?php
    setlocale(LC_ALL, "pt_BR", 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    $day = strftime('%A, ');
    $data_atual = strftime(ucfirst($day) . '%d de %B de %Y');

    $titulo = $_POST['titulo'];
    $subtitulo = $_POST['subtitulo'];
    $materia = $_POST['materia'];

   $sql = "INSERT INTO materias (titulo, 
    subtitulo, materia, d_h) 
    VALUES ('$titulo','$subtitulo','$materia', '$data_atual')";

    $insert = mysqli_query($conn, $sql);

    if(!$insert){
        echo "Ocorreu um erro ao cadastrar no banco de dados. 
        <a href='?pg=inserir'>Tente Novamente</a>";
    }else{
       echo 
        "<div class='container py-0'
        <h4>Página Cadastrada com sucesso!</h4> <br>
            <a class='btn' href='?pg=inserir'>
        Cadastrar Novamente</a>
            <a class='btn' href='?pg=principal'>
        Voltar para o Inicio</a> </div>";
    }

?>