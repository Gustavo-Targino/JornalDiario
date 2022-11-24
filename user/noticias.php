<?php

$sql = "SELECT * FROM materias";

$todos = mysqli_query($conn, $sql);

while ($dados=mysqli_fetch_array($todos)) {
?>
<?php if($dados['id']%2==0) : ?>
 
    <div id='news'>
    <h3><?=$dados['titulo'];?></h3>
    <h5><?=$dados['subtitulo'];?></h5>
    <p id="theme"> <?=$dados['materia']?></p>

    <p id="hour"> <?= $dados['d_h']?></p> 

    <hr>

    </div>
    <?php else : ?>
    <div style="text-align: right;" id='news'>
    <h3><?=$dados['titulo'];?></h3>
    <h5><?=$dados['subtitulo'];?></h5>
    <p id="theme"> <?=$dados['materia']?></p>

    <p id="hour"> <?= $dados['d_h']?></p> 

    <hr>

    </div>

    <?php endif; ?>

<?php } ?>