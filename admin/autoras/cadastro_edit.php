<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Alteração de cadastro</title>
  </head>
  <body>
    <?php 
       include "conexao.php";

        $id = $_GET['id'] ?? '';
        $sql = "SELECT * FROM autoras Where cod_autora= $id";

        $dados = mysqli_query($conn, $sql);

        $linha = mysqli_fetch_assoc($dados);


       ?>
    
      <div class="container">
        <div class="row">
          <div class="col" > 
            <h1>Cadastro</h1>
              <form action="edit_script.php" method="POST" >
                <div class="form-group" >
                  <label for="nome" >Nome completo</label>
                  <input type="text" class="form-control" name="nome" value="<?php echo $linha['nome'];?>">
                </div>
                <div class="form-group" >
                  <label for="biografia" >Biografia</label>
                  <input type="text" class="form-control" name="biografia" value="<?php echo $linha['biografia']; ?>">
                </div>
                <div class="form-group" >
                  <label for="foto" >foto</label>
                  <input type="file" class="form-control" name="foto" value="<?php echo $linha['foto']; ?>">
                </div>
                <div class="form-group" >
                  <label for="data_nasc" >Data do nascimento</label>
                  <input type="date" class="form-control" name="data_nasc" value="<?php echo $linha['data_nasc']; ?>">
                </div>
                <div class="form-group" >
                  <label for="data_morte">Data da morte</label>
                  <input type="date" class="form-control" name="data_morte" value="<?php echo $linha['data_morte']; ?>">
                </div>
                <div class="form-group" >
                  <label for="instagra" >Instagram</label>
                  <input type="text" class="form-control" name="instagram" value="<?php echo $linha['instagram']; ?>">
                </div>
                <div class="form-group" >
                  <label for="facebook" >Facebook</label>
                  <input type="text" class="form-control" name="facebook" value="<?php echo $linha['facebook']; ?>">
                </div>
                <div class="form-group" >
                  <label for="twitter" >Twitter</label>
                  <input type="text" class="form-control" name="twitter" value="<?php echo $linha['twitter']; ?>">
                </div>
                <div class="form-group" >
                  <label for="site_autora" >Site da autora</label>
                  <input type="text" class="form-control" name="site_autora" value="<?php echo $linha['site_autora']; ?>">
                </div>
                <div class="form-group" >
                  <input type="submit" class="btn btn-success " value="Salvar alterações">
                  <input type="hidden" name="id" value="<?php echo $linha['cod_autora']; ?>">
                  <a href="listar.php" class="btn btn-success " >Listar</a>
                </div>
              </form>
            </div>
        </div>  
      </div>  
    
      

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
  </body>
</html>