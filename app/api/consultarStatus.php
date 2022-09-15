<?php

include './classes/Conexao.php';
include './classes/DAO/UsuarioDAO.php';

if ($_GET) {
    $status = $_GET['status'];
    $usuarioDao = new UsuarioDAO();
    $consulta = $usuarioDao->consultarStatus($status);

    if ($consulta == true) {
        for ($i = 0; $i < mysqli_num_rows($consulta); $i++) {
            $linha = mysqli_fetch_array($consulta);

            $respostas[] = array(
            'id' => $linha['id'],
            'nome' => $linha['nome'],
            'documento' => $linha['documento'],
            'cep' => $linha['cep'],
            'endereco' => $linha['endereco'],
            'bairro' => $linha['bairro'],
            'cidade' => $linha['cidade'],
            'uf' => $linha['uf'],
            'telefone' => $linha['telefone'],
            'email' => $linha['email'],
            'ativo' => $linha['ativo']
            );
        }
    }
    echo json_encode($respostas);
} else {
    echo "Nenhum parâmetro foi passado para essa url";
}
