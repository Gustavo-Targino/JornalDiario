<?php

include_once("../inc/config.inc.php");

$id = $_GET['id'];

$sql = "DELETE FROM materias WHERE id = ('$id')";

$delete = mysqli_query($conn, $sql);

if(!$delete){
    echo "Não foi possível excluir registro. <a class='btn' href='?pg=inserir'>Tente Novamente</a>";
} else {    
    include_once('./sucesso.php');
}

?>


