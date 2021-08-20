<?php include './includs/header.php'; ?>

<div style="height: 100px; "></div>
<div class="container">
<div class="row p-8">
  <?php
      if (isset($_POST['busca'])) {
        $pesquisa = $_POST['busca'];
      } else {
        $pesquisa = '';
      }

      Require_once ("admin/conexao.php");

      $sql = "SELECT * FROM autoras where nome LIKE '%$pesquisa%'";

      $dados = mysqli_query($conn, $sql);

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

      ?>
  <div class=" xs-3 col-sm-6 col-md-5 col-lg-4 col-xl-3 ">
    <div class="card" style="width: 15rem; ">
      <img src="assets/morena1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center"><?= $nome ?></h5>
        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="infoautora.php?id=<?php echo $cod_autora; ?>" class="btn btn-primary mx-auto d-block">Ver mais</a>
      </div>
    </div>
  </div>

<?php  } ?>
</div>
</div>
<br>
<br>
<div class="container">
  <div class="row">
    
      <button style="width: 200px; background: black; color: #fff; margin: auto;"
      type="button" 
      class="btn btn-outline-secondary me-auto btn-block">Ver todas</button>
    
  </div>
</div>
<div style="height: 100px; "></div>

<div class="container">
<div class="row p-8">
  <div class="xs-3 col-sm-6 col-md-5 col-lg-4 col-xl-3">
    <div class="card" style="width: 15rem; ">
      <img src="assets/obra1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Café com letras</h5>
      </div>
    </div>
  </div>
  <div class="xs-3 col-sm-6 col-md-5 col-lg-4 col-xl-3 ">
    <div class="card" style="width: 15rem; ">
      <img src="assets/obra2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Corredor do livro</h5>
      </div>
    </div>
  </div>
  <div class="xs-3 col-sm-6 col-md-5 col-lg-4 col-xl-3">
    <div class="card" style="width: 15rem;">
      <img src="assets/obra3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Mão nas letras</h5>
      </div>
    </div>
  </div>
  <div class="xs-3 col-sm-6 col-md-5 col-lg-4 col-xl-3">
    <div class="card" style="width: 15rem;">
      <img src="assets/obra4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Variados</h5>
      </div>
    </div>
  </div>
</div>
</div>
<br><br>
<div class="container">
  <div class="row">
    
      <button style="width: 200px; background: black; color: #fff; margin: auto;" type="button" 
      class="btn btn-outline-secondary me-auto btn-block">
      Ver todas</button>
    
  </div>
</div>



<br><br><br>


<?php include 'includs/footer.php'; ?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
    
 