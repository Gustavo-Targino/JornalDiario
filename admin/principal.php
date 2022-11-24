<!-- <script language='javascript'>

function confirmaExclusao(aURL) {

    if(confirm('Você tem certeza que deseja excluir?')) {
    location.href = aURL;
    }
}

</script> -->

<?php include "../inc/config.inc.php"; ?>
<?php

$sql = "Select * from materias order by id";

$todos = mysqli_query($conn, $sql);

?>
    
<section class="intro">
  <div class="gradient-custom-2">
    <div class="mask d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="table-responsive">
              <table class="table table-light table-bordered mb-0">
                
                <thead>
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
                    <td><i class="fas fa-pen d-flex justify-content-center crud"></i></td>
                    <td><i class="fas fa-trash d-flex justify-content-center crud"></i></td>
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
