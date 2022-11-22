<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../static/signin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f9da2f246e.js" crossorigin="anonymous"></script>
    <title>Jornal Diário | Administração</title>
  </head>

  <body>
  <div class="container">
  
    <div class="row">
        
      <div class="col-md-6 offset-md-3">
        
        <div class="mt-5">
            
        <div class="card-body cardbody-s p-lg-3">
            <a href="../index.php"><i class="fas fa-solid fa-arrow-left" id="back"></i></a> 
        <form action="acesso.php" method="POST" >

            <div class="text-center">
              <img src="../assets/logo_admin.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" alt="Jornal Diário Logo">
            </div>

            <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Usuário" name="login" required>
            <label for="floatingInput">Usuário</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="senha" required>
            <label for="floatingPassword">Senha</label>
            </div>

            <div class="buttonControl"><button type="submit" class="btn mt-3" id="sub-btn">Entrar</button></div> 
          </form>
        </div>
          
        </div>

      </div>
    </div>
  </div>

    
  </body>
</html>
