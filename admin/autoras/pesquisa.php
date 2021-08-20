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
      if (isset($_POST['busca'])) {
        $pesquisa = $_POST['busca'];
      } else {
        $pesquisa = '';
      }

      Require_once ("conexao.php");

      $sql = "SELECT * FROM autoras where nome LIKE '%$pesquisa%'";

      $dados = mysqli_query($conn, $sql);
      ?>


    
      <div class="container">
        <div class="row">
          <div class="col" > 
            <h1>Pesquisar</h1>
              
                  <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" action="pesquisa.php" method="post">
                      <input class="form-control mr-sm-2 mb-2" type="search" placeholder="Digite aqui" aria-label="Search" name="busca" autofocus>
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                  </nav>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Biografia</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Datade nascimento</th>
                        <th scope="col">Data da morte</th>
                        <th scope="col">Instagram</th>
                        <th scope="col">Facebook</th>
                        <th scope="col">Twiter</th>
                        <th scope="col">Site da autora</th>
                        <th scope="col">Funções</th>
                      </tr>
                    </thead>
                    <tbody>
                         <?php
                         while ($linha = mysqli_fetch_assoc($dados) ) {
                            $cod_autora = $linha['cod_autora'];
                            $nome = $linha['nome'];
                            $biografia = $linha['biografia'];
                            $foto = $linha['foto'];
                            $data_nasc = $linha['data_nasc'];
                            $data_morte = $linha['data_morte'];
                            $instagran = $linha['instagram'];
                            $facebook = $linha['facebook'];
                            $twiter = $linha['twitter'];
                            $site_autora = $linha['site_autora'];
                            

                            echo "<tr>
                                    <th scope='row'>$nome</th>
                                    <td>$biografia</td>
                                    <td>$foto</td>
                                    <td>$data_nasc</td>
                                    <td>$data_morte</td>
                                    <td>$instagran</td>
                                    <td>$facebook</td>
                                    <td>$twiter</td>
                                    <td>$site_autora</td>
                                    <td width=150px>
                                    <a href='cadastro_edit.php?id=$cod_autora' class='btn btn-success btn-sm'>Editar</a>
                                    <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target= '#confirma' onclick=" .'"' ."pegar_dados($cod_autora, '$nome')" .'"' .">Excluir</a>
                                    </td>
                                  </tr>";
                           }
                          
                        ?>
                                           <!--onclick="pegar_dados($id, '$nome')" -->
                      
                    </tbody>
                  </table>
                <a href="listar.php" class="btn btn-success " >Voltar</a>
            </div>
          </div>  
      </div>  
      
      <!-- Modal -->
      <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="excluir_script.php" method="POST">
                  <p>Deseja realmente excluir <b id="nome_autora">Nome da autora</b>?</p>
                  
            </div>
            <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                  <input type="hidden" name="id" id="cod_pessoa" value="">
                  <input type="submit" class="btn btn-danger" value="sim">
              </form>
            </div>
          </div>
        </div>
      </div>

      <script type="text/javascript">
        function pegar_dados(id, nome) {
          document.getElementById('nome_autora').innerHTML = nome;
          document.getElementById('cod_pessoa').value = id;
        }
      </script>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
  </body>
</html>