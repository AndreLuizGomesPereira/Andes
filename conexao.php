<?php
$server     = "localhost"; //padrão servidor local
$database   = "andes"; // alterar conforme o nome do banco de dados
$username   = "root"; // padrão do banco de dados
$password   = ""; // senha de conexão com o banco de dados

//Criar agora a conexão

$conexao    = mysqli_connect($server, $username, $password, $database);


?>