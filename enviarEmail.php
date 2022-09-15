<?php

require './vendor/autoload.php';

include './classes/Conexao.php';
include './classes/DAO/UsuarioDAO.php';

$usuarioDao = new UsuarioDAO();

$consulta = $usuarioDao->consultarTodosUsuarios();

//$address[] = array();

for ($i = 0; $i < mysqli_num_rows($consulta); $i++) {
    $linha = mysqli_fetch_array($consulta);

    $address[] = $linha['email'];
}


use App\email\Email;

$address = $address;
$subject = 'teste de email';
$body = '<b>teste</b> de envio';

$objEmail = new Email();

$sucesso = $objEmail->sendEmail($address, $subject, $body);

echo $sucesso ? 'enviado com sucesso' : $objEmail->getError();
