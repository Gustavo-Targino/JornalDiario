<?php
    include("./inc/config.inc.php");
?>

<header class="d-flex justify-content-around">
    <div class="container-fluid" id="nav-container">
        <nav class="navbar navbar-expand-md">
            <a href="?pg=principal" class="navbar-brand">
                <img src="./assets/logo.png" alt="logo_jornal" id="logo"> 
                <strong>Jornal Diário</strong> 
            </a>
            
           <div class="navbar-nav">
                <a href="?pg=principal" class="nav-item nav-link" id="home-menu"><strong>Home</strong></a>
                <a href="?pg=noticias" class="nav-item nav-link" id="news-menu"><strong>Notícias</strong></a>
                <a href="?pg=faleconosco" class="nav-item nav-link" id="talk-menu"><strong>Fale Conosco</strong></a>
                <a href="admin/login.php" class="nav-item nav-link"><i class="fas fa-user" id="login-menu"></i><strong> Login</strong></a>
           </div>
        </nav>
    </div>


</header>
