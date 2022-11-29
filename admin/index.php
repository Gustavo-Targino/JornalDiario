<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f9da2f246e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../static/style.css">
    <title>Jornal Diário</title>
</head>
<body>
    <?php
        include_once('./topo.php');

        require_once("valida_cookies.php");
    ?>
<div class="container pb-0">
    <h2 class="page-header">Bem-vindo ao Painel Admin - Jornal Diário | 
    <a href="?pg=inserir" class="btn"> Inserir Novo Artigo</a>
    <a href="?pg=logout" class="btn">Sair</a> 
    </h2>      
    </div>

    <div class="container pt-2 px-0">
    <?php
    #Área de Conteúdo
    if(empty($_SERVER["QUERY_STRING"])) {
        $var = "./principal.php";
        include_once("$var");
    } else {
        $pg = $_GET['pg'];
        include_once("./$pg.php");
    }
    ?>
    </div>

</body>
</html>