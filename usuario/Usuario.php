<?php

include_once '../Conexao.php';

class Usuario
{

    protected $id_usuario;
    protected $nome;
    protected $email;
    protected $senha;
    protected $fk_perfil;

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getFkPerfil()
    {
        return $this->fk_perfil;
    }

    /**
     * @param mixed $fk_perfil
     */
    public function setFkPerfil($fk_perfil)
    {
        $this->fk_perfil = $fk_perfil;
    }

    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT
                    user.id_usuario,
                    user.nome,
                    user.email,
                    user.senha,
                    pfl.nome as perfil
                FROM usuario user
                JOIN perfil pfl ON (user.fk_perfil = pfl.id_perfil)
                ORDER BY
                    user.nome";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_usuario)
    {

        $conexao = new Conexao();


        $sql = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario'";

        $dados = $conexao->recuperarDados($sql);

        $this->id_usuario = $dados[0]['id_usuario'];
        $this->nome = $dados[0]['nome'];
        $this->email = $dados[0]['email'];
        $this->senha = $dados[0]['senha'];
        $this->fk_perfil = $dados[0]['fk_perfil'];

        return $conexao->executar($sql);
    }

    public function inserir($dados)
    {
        $nome = $dados['nome'];
        $email = $dados['email'];
        $senha = md5($dados['senha']);
        $fk_perfil = $dados['fk_perfil'];

        $conexao = new Conexao();

        $sql = "INSERT INTO usuario (nome, email, senha, fk_perfil) VALUES ('$nome', '$email', '$senha', '$fk_perfil')";
        // print_r($sql); die;
        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_usuario = $dados['id_usuario'];
        $nome = $dados['nome'];
        $email = $dados['email'];
        $senha = $dados['senha'];
        $fk_perfil = $dados['fk_perfil'];

        $conexao = new Conexao();

        $sql = "UPDATE usuario SET
                  nome = '$nome',
                  email = '$email',
                  senha = '$senha',
                  fk_perfil = '$fk_perfil'
                WHERE id_usuario = '$id_usuario'";

        return $conexao->executar($sql);
    }

    public function excluir($id_usuario)
    {
        $conexao = new Conexao();

        $sql = "DELETE FROM usuario WHERE id_usuario = '$id_usuario'";
        return $conexao->executar($sql);
    }
}