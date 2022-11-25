<?php

$id = $_GET['id'];
$sql = "SELECT * FROM materias WHERE id = $id";
$busca = mysqli_query($conn, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>


<h2>Inserir Matéria</h2> 
  <form  id="contactForm" action="?pg=alterardb" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
	 <label>Título da matéria:</label> 
     <input type="text" class="form-control" name="titulo" value="<?=$dados['titulo']?>" ><br>
	 Subtítulo: <input type="text" class="form-control" name="subtitulo" value="<?=$dados['subtitulo'];?>"><br>
	 Corpo da matéria:<textarea class="form-control" name="materia" rows="5" cols="10"><?=$dados['materia'];?></textarea><br>
   Fonte: <input type="text" class="form-control" name="fonte" value="<?=$dados['fonte'];?>" required><br>
	 <button type="submit" class="btn">Atualizar</button>
  </form>
<?php 
}
?>