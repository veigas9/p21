<?php

class UsuarioDAO
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao();
    }

    public function consultarTodosUsuarios()
    {
        $sql = "SELECT * FROM torcedores";

        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }

    public function consultarUsuario($id)
    {

        $sql = "SELECT * FROM torcedores WHERE id = $id";

        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }

    public function consultarUsuariosPaginacao()
    {
        $itensPorPagina = 10;

        //pega página atual
        $pagina = intval($_GET('pagina'));

        $sql = "SELECT * FROM torcedores LIMIT $pagina, $itensPorPagina";

        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }


    public function consultarCodigo($codigo)
    {
        $sql = "SELECT * FROM torcedores WHERE id = '$codigo' ";

        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }

    public function consultarStatus($status)
    {
        $sql = "SELECT * FROM torcedores WHERE ativo = '$status' ";

        $resultado = mysqli_query($this->conexao->getCon(), $sql);

        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
        } else {
            return false;
        }
    }
}
