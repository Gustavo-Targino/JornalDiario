<script language='javascript'>

function confirmaExclusao(aURL) {

    if(confirm('Você tem certeza que deseja excluir essa matéria?')) {
    location.href = aURL;
  }

}

</script>


<?php include "../inc/config.inc.php"; ?>
<?php

$sql = "Select * from materias order by id";

$todos = mysqli_query($conn, $sql);

?>
    
<section class="intro">
  <div>
    <div class="mask d-flex align-items-center">
      
      <div class="container">
        
        <div class="row justify-content-center">
          <p id="successP" style="text-align: center;"></p>
          <div class="col-20">
            <div class="table-responsive">
              <table class="table table-striped table-hover table-bordered border-dark mb-0">
                
                <thead class="table-dark">
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Título da Matéria</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                  </tr>
                </thead>
                <tbody>

                <?php while ($dados=mysqli_fetch_array($todos)) {?>
                  <tr>
                    <th scope="row"><?=$dados['id'];?></th>
                    <td><?=$dados['titulo'];?></td>
                    <td><a class="crud-link" href="?pg=alterar&id=<?=$dados['id']; ?>"> <i class="fas fa-pen d-flex justify-content-center align-items-center crud"></i></a></td>
                    <td><a class="crud-link" href="javascript:confirmaExclusao('excluir.php?&id=<?=$dados['id']; ?>')" class="btn ask"> <i class="fas fa-trash d-flex justify-content-center align-items-center crud"></i></a></td>
                  </tr>
          
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
