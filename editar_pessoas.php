<?php
include 'conexao.php';
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edição do Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/8786c39b09.js"></script>
    <style type="text/css">
        #tamanhoContainer{
            width: 500px;
        }
        #botao{
            color: white;
        }
    </style>
</head>
<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px">
       <h4>Editar Cadastro</h4> 
        <form action="atualizar_pessoas.php" method="POST" style="margin-top: 20px">
            <?php
                $sql = "SELECT * FROM `cadastro` WHERE nomeID=$id";
                $buscar = mysqli_query($conexao, $sql);
                while($array = mysqli_fetch_array($buscar)){
                    
                    $id_nome        = $array['nomeID'];
                    $nome           = $array['nome'];
                    $cpf            = $array['cpf'];
                    $localidade     = $array['localidade'];
                    $dataNascimento = $array['nascimento'];
                    $grupo          = $array['grupo'];
            ?>
            <div class="form-group">
            <input type="number" class="form-control" name="nomeID" value="<?php echo $id_nome ?>" hidden>
             </div>
            <div class="form-group">
                <label>Nome Completo</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">
             </div>
             <div class="form-group"> 
                 <label>CPF</label>
                 <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $cpf ?>">
             </div>
             <div class="form-group">
                <label>Localidade (Ex.: Teixeira de Freitas)</label>
                <input type="text" class="form-control" name="localidade" value="<?php echo $localidade ?>">
             </div>
            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="text" class="form-control" name="nascimento"value="<?php echo $dataNascimento ?>">
            </div>
            <?php
                }
                ?>
            <div class="form-group">
                    <label>Grupo Caseiro</label>
                    <select class="form-control" name="grupo">
                    <?php
                        include 'conexao.php';
                        $sql = "SELECT * FROM grupo";
                        $buscar = mysqli_query($conexao, $sql);
                        while ($array = mysqli_fetch_array($buscar)) {
                            $id_grupo = $$array['grupoID'];
                            $nomeGrupo = $array['nomegrupo'];
                    ?>
                        <option><?php echo $nomeGrupo ?></option>
                        <?php }; ?>
                    </select>
            </div>
                <div style="text-align: right;">
                <a href="menu.php" role="button" id="voltar" name="voltar" class="btn btn-warning"><i class="fas fa-undo-alt"></i>&nbsp;Retornar Menu</a>
                <button type="submit" id="botao" name="botao" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;Salvar Alteração</button>
            </div>

        </form>
    </div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>