<?php

$sql = "SELECT * FROM materias";

$todos = mysqli_query($conn, $sql);

while ($dados=mysqli_fetch_array($todos)) {
?>
<?php if($dados['id']%2==0) : ?>
 
    <div id='news'>
    <h3> <strong><?=$dados['titulo'];?></strong></h3>
    <h5><?=$dados['subtitulo'];?></h5>
    <p id="theme"> <?=$dados['materia']?></p>
    <strong><p>Fonte: <a id="fonte" target="_blank" href="<?= $dados['fonte']?>"><?= $dados['fonte']?></a></p></strong> 
    <p id="hour"> <?= $dados['d_h']?></p> 

    <hr>

    </div>
    <?php else : ?>
    <div style="text-align: right;" id='news'>
    <h3><strong> <?=$dados['titulo'];?></strong></h3>
    <h5><?=$dados['subtitulo'];?></h5>
    <p id="theme"> <?=$dados['materia']?></p>
    <strong><p>Fonte: <a id="fonte" target="_blank" href="<?= $dados['fonte']?>"><?= $dados['fonte']?></a></p></strong> 
    <p id="hour"> <?= $dados['d_h']?></p> 

    <hr>

    </div>

    <?php endif; ?>

<?php } ?>