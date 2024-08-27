<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Cadastro - Processamento</title>
</head>
<body>
    <?php
    if(isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['cidade'])){
    //Captura os valores dos campos do formulário 
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];

    //exibir os dados na tela
    echo "<h1>Dados Recebidos:</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Endereço:</strong> $endereco</p>";
    echo "<p><strong>Cidade:</strong>$cidade</p>";
    }else{
    echo"<h1>Erro: Todos os campos são obrigatorios.</h1>";
    } 
    // conexão com o Banco de Dados(host, usuario, senha, banco de dados)
$conexao = mysqli_connect("localhost", "root", "", "aula_php");

if(!$conexao){
    die("Erro de conexão com o Banco de Dados");
}

$sql = "INSERT INTO alunos(nome, endereco, cidade) VALUES ('$nome', '$endereco', '$cidade')";

$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);


?>
    
</body>
</html>

