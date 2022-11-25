<?php

$id =  $_POST['id'];
$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$materia = $_POST['materia'];
$fonte = $_POST['fonte'];

$sql2 = mysqli_query($conn, "SELECT * FROM materias 
WHERE id='$id'");

$sql = "UPDATE materias SET titulo='$titulo', subtitulo='$subtitulo', 
materia='$materia', fonte='$fonte' WHERE id=$id";
$altera = mysqli_query($conn, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listar'>Voltar</a>";
}else{
   echo "
   <div style='display: flex; flex-direction: row; gap: 1rem; padding-top: 3rem;'>
   <h3>Alterado com sucesso! |</h3> <a class='btn' href='?pg=principal'>Voltar</a>
   </div>
   ";
}
?>