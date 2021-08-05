<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Biblioteca</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid ">
    <a class="navbar-brand " href="#">Biblioteca</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Colaborar</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Colaborar</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</div><br>
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
  <div class="col-sm-3 ">
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
    
      <button type="button" class="btn btn-outline-secondary me-auto btn-block">Ver todas</button>
    
  </div>
</div>
<div style="height: 100px; "></div>

<div class="container">
<div class="row p-8">
  <div class="col-sm-3 ">
    <div class="card" style="width: 15rem; ">
      <img src="assets/obra1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Café com letras</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-3 ">
    <div class="card" style="width: 15rem; ">
      <img src="assets/obra2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Corredor do livro</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card" style="width: 15rem;">
      <img src="assets/obra3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Mão nas letras</h5>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
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
    
      <button type="button" class="btn btn-outline-secondary me-auto btn-block">Ver todas</button>
    
  </div>
</div>

<br><br><br>

<footer class="container-fluid text-white bg-dark">
    <div class="row pt-5 pb-5">
      <section class="col-md-5">
        <h5>Album</h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="#" class="nav-link text-white">Baby</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">Models</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link text-white">Family</a>
          </li>
        </ul>
      </section>

      <section class="col-md-5">
        <h5>Contato</h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a href="tel:+5513111111111" class="nav-link text-white">Tel: (13) 9 9999-9999</a>
          </li>
          <li class="nav-item">
            <a href="https://api.whatsapp.com/send?phone=5513999999999&text=Quero%20saber%20mais%20sobre%20o%20Curso!"
              target="_blank" class="nav-link text-white">WhatsApp:
              (13) 9 9999-9999
            </a>
          </li>
        </ul>
      </section>
      

      <section>
        <a href="#" class="text-white">Voltar ao Top!</a>
      </section>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
    
 