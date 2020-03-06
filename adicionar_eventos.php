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
    <meta charset="utf-8">
    <title>:: Sistema Andes - Formulário de Cadastro ::</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
    <style type="text/css">
        #tamanhoContainer{
            width: 500px;
        }
    </style>
</head>
<body>
    <div class="container" id="tamanhoContainer">
    <center>
            <div id="header_central">
                <img src="image/logo.png">
                <img src="image/logo_andes.gif">
            </div>
        </center>
       <h4 style="margin-top: 20px">Formulário de Cadastro</h4> 
        <form action="_inserir_eventos.php" method="POST" style="margin-top: 20px">
            <div class="form-group">
                <label>Nome do Evento</label>
                <input type="text" class="form-control" name="nomeevento"  placeholder="Insira o nome do evento" autocomplete="off" required>
             </div>
             <div class="form-group"> 
                 <label>Data do Evento</label>
                 <input type="date" class="form-control"  name="dataevento"  placeholder="Insira o ano" autocomplete="off" required>
             </div>
             <div class="form-group">
                <label>Observação do Evento</label>
                <textarea type="text" class="form-control" name="observacaoevento"   placeholder="Insira qualquer Observação" autocomplete="off"></textarea>
             </div>
                <div class="form-group">
                        <label>Valor do Evento</label>
                        <input type="number" class="form-control" name="valorevento"  placeholder="Insira o valor do Evento" required>
                </div>
            
            <div style="text-align: right;">
                <a href="menu.php" role="button" id="voltar" name="voltar" class="btn btn-warning"><i class="fas fa-undo-alt"></i>&nbsp;Retornar Menu</a>
                <button type="submit" id="botao" name="botao" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;Salvar Dados</button>
            </div>
            </div>
                
        </form>
    </div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>