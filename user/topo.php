<?php
    include("./inc/config.inc.php");
?>

<header class="d-flex justify-content-around">
    <div class="container" id="nav-container">
        <nav class="navbar navbar-expand-lg">
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

        <!-- <h1>
            Jornal Diário
        </h1>
    <nav>
        <ul class="nav nav-pills justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        
        </ul>
    </nav> -->

</header>
