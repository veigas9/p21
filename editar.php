<?php

include './app/header/head.php';
include './classes/Conexao.php';
include './classes/DAO/UsuarioDAO.php';

$usuarioDao = new UsuarioDAO();

$consulta = $usuarioDao->consultarUsuario($_GET['id']);

$linha = mysqli_fetch_array($consulta);

?>

<div id="edit" class="container">

<form id="formEdit" enctype="multipart/form-data">
    <input value="<?php echo $linha['id']; ?>" name="id" type="hidden">
    <div class="input-group mb-3">
        <span class="input-group-text size-form" id="cep">NOME: </span>
        <input value="<?php echo $linha['nome']; ?>" name="nome" type="text" class="form-control" aria-label="nome input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text size-form" id="doc">DOCUMENTO:</span>
        <input value="<?php echo $linha['documento']; ?>" name="documento" type="text" class="form-control" aria-label="documento input" aria-describedby="inputGroup-sizing-default">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text size-form" id="cep">CEP:</span>
        <input value="<?php echo $linha['cep']; ?>" name="cep" type="text" class="form-control" aria-label="cep input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text size-form" id="endereco">ENDEREÇO: </span>
        <input value="<?php echo $linha['endereco']; ?>" name="endereco" type="text" class="form-control" aria-label="endereco input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text size-form" id="bairro">BAIRRO: </span>
        <input value="<?php echo $linha['bairro']; ?>" name="bairro" type="text" class="form-control" aria-label="bairro input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text size-form" id="cidade">CIDADE: </span>
        <input value="<?php echo $linha['cidade']; ?>" name="cidade" type="text" class="form-control" aria-label="cidade input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text size-form" id="uf">UF: </span>
        <input value="<?php echo $linha['uf']; ?>" name="uf" type="text" class="form-control" aria-label="uf input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text size-form" id="telefone">TELEFONE: </span>
        <input value="<?php echo $linha['telefone']; ?>" name="telefone" type="text" class="form-control" aria-label="telefone input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text size-form" id="email">EMAIL: </span>
        <input value="<?php echo $linha['email']; ?>" name="email" type="text" class="form-control" aria-label="email input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text size-form" id="ativo">ATIVO: </span>
        <input value="<?php echo $linha['ativo']; ?>" name="ativo" type="text" class="form-control" aria-label="ativo input" aria-describedby="inputGroup-sizing-default">
    </div>
    <input class="btn btn-primary" id="bt_editar" name="bt_editar" type="button" value="Editar">

</form>

<div id="resposta_editar" class="alert alert-success" style="display: none;"></div>

</div>


<?php
include './app/footer/footer.php';
