<?php

    $conn = mysqli_connect("localhost", "root", "");

    $db = mysqli_select_db($conn, "jornal");

    // if($conn) {
    //     echo "Conexão estabelecida com sucesso";
    // } else {
    //     echo "Erro na conexção com o banco de dados";
    // }

?>