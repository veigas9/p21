<?php

include './app/header/head.php';
include './classes/Conexao.php';
include './classes/DAO/UsuarioDAO.php';

$usuarioDao = new UsuarioDAO();

$consulta = $usuarioDao->consultarTodosUsuarios();

?>

<div class="container">
<?php
if ($consulta == true) {
    ?>
     <table id="lista" class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Documento</th>
            <th>CEP</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ativo</th>
            <th>Editar</th>
            </tr>
        </thead>
        <tbody>
    <?php
    for ($i = 0; $i < mysqli_num_rows($consulta); $i++) {
        $linha = mysqli_fetch_array($consulta);
        ?>
            <tr>
            <th><?php echo $linha["id"] ?></th>
            <td><?php echo $linha["nome"] ?></td>
            <td><?php echo $linha["documento"] ?></td>
            <td><?php echo $linha["cep"] ?></td>
            <td><?php echo $linha["endereco"] ?></td>
            <td><?php echo $linha["bairro"] ?></td>
            <td><?php echo $linha["cidade"] ?></td>
            <td><?php echo $linha["uf"] ?></td>
            <td><?php echo $linha["telefone"] ?></td>
            <td><?php echo $linha["email"] ?></td>
            <td><?php echo $linha["ativo"] ?></td>
            <td><?php echo "<a href='editar.php?id=" . $linha["id"] . "'> Editar </a> " ?></td>
        </tr>
        <?php
    }
    ?>
        </tbody>
        </table>
    </div>
    <?php
}

include './app/footer/footer.php';
