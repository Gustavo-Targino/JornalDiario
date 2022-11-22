<?php
if(isset($_COOKIE['login'])){
    $login = $_COOKIE['login'];
}
if(isset($_COOKIE['senha'])){
    $senha = $_COOKIE['senha'];
}
if(empty($login) OR empty($senha)){
        setcookie("login");
        setcookie("senha");
        echo "<center ><h2 style='margin-top: 5rem; margin-bottom: 2rem;'>Login não efetuado.</h2>";
        echo "<a class='btn' href=login.php> Clique para logar.</a></center>";
        exit();
 }

 ?>
