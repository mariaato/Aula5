<?php

//faz conexão ao banco de dados, ao rodas o script de acesso ao BD

include("conexao1.php");


$nome = $_POST['nome'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];

//gravar os dados do form no html no BD
$sql = "INSERT INTO aluno(nome, email, matricula) VALUES ('$nome', '$email', '$matricula')";


if(mysqli_query($conexao, $sql)){
    echo "Usuário cadastrado com sucesso";
}
else{
    echo "Erro".mysqli_connect_error($conexao);
}
mysqli_close($conexao);



?>