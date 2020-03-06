<?php
  session_start();
  $usuario = $_SESSION['usuario'];
    
  if (!isset($usuario)) {
      header('location: index.html');
    }

    include 'conexao.php';

    $sql = "SELECT controleacesso FROM usuario WHERE emailusuario = '$usuario' and statusID='Ativo'";
    $buscar = mysqli_query($conexao, $sql);
    $array = mysqli_fetch_array($buscar);
    $acesso = $array['controleacesso'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>:: Sistema Andes - Menu ::</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
</head>
<body>
<div class="container">
<header style="margin-bottom: 20px">
<center>    
<div id="header_central">
        <img src="image/logo.png">        
        <img src="image/logo_andes.gif">
        <a class="btn btn-danger" style="float: right" href="index.html">Sair Logout</a>
</div>
    </center>
</header>
<div class="row">
  <?php
    if(($acesso == 1)){
  ?>
  <?php
    }
  ?>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Adicionar Eventos</h5>
        <p class="card-text">Opção para adicionar novos eventos, favor verificar antes se não existe cadastro.</p>
        <a href="adicionar_eventos.php" class="btn btn-primary"><i class="far fa-plus-square"></i>&nbsp;Adicionar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Listar Eventos</h5>
        <p class="card-text">Opção para listar eventos cadastros no sistema, existe a opção de edição e exclusão.</p>
        <a href="listar_eventos.php" class="btn btn-primary"><i class="fas fa-list-ul"></i>&nbsp;Listagem</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Adicionar Pessoas</h5>
        <p class="card-text">Opção para adicionar novos membros, favor verificar antes se não existe cadastro.</p>
        <a href="adicionar_pessoas.php" class="btn btn-primary"><i class="fas fa-user-plus"></i>&nbsp;Adicionar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Listar Pessoas</h5>
        <p class="card-text">Opção para listar membros cadastros no sistema, existe a opção de edição e exclusão.</p>
        <a href="listar_pessoas.php" class="btn btn-primary"><i class="fas fa-list-ul"></i>&nbsp;Listagem</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Adicionar Grupos</h5>
        <p class="card-text">Opção para adicionar novos Grupos Caseiros no sistema, no entanto verificar se já existe cadastrado.</p>
        <a href="adicionar_grupos.php" class="btn btn-primary"><i class="fas fa-users"></i>&nbsp;Adicionar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Listar Grupos</h5>
        <p class="card-text">Opção para listar membros cadastros no sistema, existe a opção de edição e exclusão.</p>
        <a href="listar_grupos.php" class="btn btn-primary"><i class="fas fa-stream"></i>&nbsp;Listagem</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Aprovação de Usúarios</h5>
        <p class="card-text">Opção para aprovar novos usúarios do sistema, favor verificar as permissões à serem dadas.</p>
        <a href="aprovar_usuarios.php" class="btn btn-success"><i class="fas fa-thumbs-up"></i>&nbsp;Aprovação</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Adicionar Usúario</h5>
        <p class="card-text">Opção para adicionar novos usúarios do sistema, favor verificar as permissões à serem dadas.</p>
        <a href="adicionar_usuarios.php" class="btn btn-primary"><i class="fas fa-user-check"></i>&nbsp;Adicionar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Listar Usúarios</h5>
        <p class="card-text">Opção para Listar usúarios do sistema, existe opção de edição e exlusão.</p>
        <a href="listar_usuarios.php" class="btn btn-primary"><i class="fas fa-address-book"></i>&nbsp;Listagem</a>
      </div>
    </div>
  </div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>