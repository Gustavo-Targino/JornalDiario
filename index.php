<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f9da2f246e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./static/style.css">
    <title>Jornal Diário</title>
</head>
<body>
    <?php
        include_once('./user/topo.php');
    ?>

    <div class='container'>
    <?php
    #Área de Conteúdo
    if(empty($_SERVER["QUERY_STRING"])) {
        $var = "./user/principal.php";
        include_once("$var");
    } else {
        $pg = $_GET['pg'];
        include_once("./user/$pg.php");
    }
    ?>
    </div>

    <?php
        include_once('./user/rodape.php');
    ?>

</body>
</html>