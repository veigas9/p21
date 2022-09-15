<?php

include './classes/Conexao.php';

$con = new Conexao();

$conexao = $con->getCon();


    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $documento = $_POST['documento'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $ativo = $_POST['ativo'];

    $sql = "UPDATE torcedores SET
nome = '$nome', documento= '$documento', cep = '$cep', endereco = '$endereco', bairro = '$bairro', cidade = '$cidade',
uf = '$uf', telefone = '$telefone', email = '$email', ativo = '$ativo' WHERE id='$id'";

    $resultado = mysqli_query($conexao, $sql);

    echo "Editado com sucesso";
