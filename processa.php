<?php

error_reporting(E_ALL);
ini_set("display_errors", 0);

include './classes/Conexao.php';


$con = new Conexao();

$conexao = $con->getCon();

if (!empty($_FILES['arquivo']['tmp_name'])) {
    $arquivo = new DOMDocument();

    $arquivo->load($_FILES['arquivo']['tmp_name']);

    $linhas = $arquivo->getElementsByTagName("Row");

    $primeira_linha = true;

    foreach ($linhas as $linha) {
        if ($primeira_linha == false) {
            $nome = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
            $documento = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
            $cep = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
            $endereco = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
            $bairro = $linha->getElementsByTagName("Data")->item(4)->nodeValue;
            $cidade = $linha->getElementsByTagName("Data")->item(5)->nodeValue;
            $uf = $linha->getElementsByTagName("Data")->item(6)->nodeValue;
            $telefone = $linha->getElementsByTagName("Data")->item(7)->nodeValue;
            $email = $linha->getElementsByTagName("Data")->item(8)->nodeValue;
            $ativo = $linha->getElementsByTagName("Data")->item(9)->nodeValue;


            $sql = "INSERT INTO torcedores(nome, documento, cep, endereco, bairro, cidade, uf, telefone, email, ativo) VALUES
             ('$nome', '$documento', '$cep', '$endereco', '$bairro', '$cidade', '$uf', '$telefone', '$email', '$ativo')";

             $resultado = mysqli_query($conexao, $sql);
        }
        $primeira_linha = false;
    }
    echo "Realizado com sucesso";
} else {
    echo "Erro ao realizar atualização";
}
