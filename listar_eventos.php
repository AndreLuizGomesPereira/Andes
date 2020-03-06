<?php
session_start();
$usuario = $_SESSION['usuario'];

if (!isset($usuario)) {
  header('location: index.html');
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Listar Eventos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
</head>

<body>
  <div class="container">
    <center>
      <div id="header_central">
        <img src="image/logo.png">
        <img src="image/logo_andes.gif">
      </div>
    </center>
    <h3 style="margin-top: 20px">Lista de Eventos</h3>
    <nav class="navbar navbar-light bg-light">
      <form class="form-inline" method="POST" style="margin-left: 784px">
        <input class="form-control mr-sm-2" type="text" placeholder="Busque por Eventos" name="procurar">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Procurar</button>
      </form>
    </nav>
    <table class="table table-striped" style="margin-top: 10px">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Evento</th>
          <th scope="col">Observação</th>
          <th scope="col">Data</th>
          <th scope="col">Valor</th>
          <th scope="col"># Ações</th>

        </tr>
      </thead>

      <?php
      include 'conexao.php';
      $sql    = "SELECT * FROM `evento`";
      $listar = mysqli_query($conexao, $sql);
      $procurar = $_POST['procurar'];
      if ($procurar) {
        $sql    = "SELECT * FROM `evento` WHERE nomeevento LIKE '%{$procurar}%'";
      }
      $listar = mysqli_query($conexao, $sql);

      while ($array     = mysqli_fetch_array($listar)) {
        $id_evento      = $array['eventoID'];
        $evento         = $array['nomeevento'];
        $observacao     = $array['observacaoevento'];
        $data            = $array['dataevento'];
        $valor          = $array['valorevento'];

      ?>
        <tr>
          <td><?php echo $id_evento ?></td>
          <td><?php echo $evento ?></td>
          <td style="width: 500px"><?php echo $observacao ?></td>
          <td><?php echo $data ?></td>
          <td><?php echo $valor.",00" . " R$" ?></td>

          <td><a class="btn btn-outline-success btn-sm" href="editar_eventos.php?id=<?php echo $id_nome ?> " role="button"><i class="far fa-edit"></i>&nbsp;Editar</button>
              <a class="btn btn-outline-danger btn-sm" style="margin-left: 5px" href="excluir_eventos.php?id=<?php echo $id_nome ?> " role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</button>
          </td>

        <?php } ?>
        </tr>
    </table>
  </div>
  <div class="container" style="margin-top: 10px; text-align: right;">
    <a href="menu.php" role="button" id="voltar" name="voltar" class="btn btn-warning"><i class="fas fa-undo-alt"></i>&nbsp;Retornar Menu</a>
    <a class="btn btn-primary" href="adicionar_pessoas.php" id="botao" name="botao"><i class="fas fa-user-plus"></i>&nbsp;Adicionar</a>
  </div>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>