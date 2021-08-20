<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>testeBD</title>
  </head>
  <body>
     <?php 
       include "conexao.php";

       ?>
    
    
      <div class="container">
        <div class="row">
          <div class="col" > 
            <h1>Cadastro</h1>
              <form action="cadastro.php" method="POST" >
                <div class="form-group" >
                  <label for="titulo" >Titulo</label>
                  <input type="text" class="form-control" name="titulo">
                </div>
                <div class="form-group" >
                  <label for="resumo" >Resumo</label>
                  <input type="text" class="form-control" name="resumo">
                </div>
                <div class="form-group" >
                  <label for="ano" >Ano</label>
                  <input type="date" class="form-control" name="ano">
                </div>
                <div class="form-group" >
                  <label for="url" >Url</label>
                  <input type="text" class="form-control" name="url">
                </div>
                <div class="form-group" >
                  <label for="autora_obra">Autora obra</label>
                  <select class="form-control" name="autora_obra">

                    <?php 

                      $sql = "SELECT * FROM autoras";

                      $dados = mysqli_query($conn, $sql);

                      while($res = mysqli_fetch_array($dados)){

                     ?>

                    <option value="<?php echo $res['cod_autora']; ?>"><?php echo $res['nome']; ?></option>

                    <?php
                      }

                  ?>
                  </select>
                </div>
                <div class="form-group" >
                  <label for="tipo_obra" >Tipo da obra</label>
                  <select class="form-control" name="tipo_obra">
                  <?php 

                      $sql = "SELECT * FROM tipo_obra";

                      $dados = mysqli_query($conn, $sql);

                      while($res = mysqli_fetch_array($dados)){

                     ?>

                    <option value="<?php echo $res['cod_tipo']; ?>"><?php echo $res['descricao']; ?></option>

                    <?php
                      }

                  ?>
                </select>
                </div>
                <div class="form-group" >
                  <label for="editora_obra" >Editora da obra</label>
                  <select class="form-control" name="editora_obra">
                  <?php 

                      $sql = "SELECT * FROM editora";

                      $dados = mysqli_query($conn, $sql);

                      while($res = mysqli_fetch_array($dados)){

                     ?>

                    <option value="<?php echo $res['cod_editora']; ?>"><?php echo $res['nome']; ?></option>

                    <?php
                      }

                  ?>
                </select>
                </div>
                
                <div class="form-group" >
                  <input type="submit" class="btn btn-success ">
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