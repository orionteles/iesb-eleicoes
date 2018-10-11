<?php

include_once '../Conexao.php';

class Usuario
{

    protected $id_usuario;
    protected $nome;
    protected $email;
    protected $senha;
    protected $id_perfil;

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
    public function getIdPerfil()
    {
        return $this->id_perfil;
    }

    /**
     * @param mixed $id_perfil
     */
    public function setIdPerfil($id_perfil)
    {
        $this->id_perfil = $id_perfil;
    }



    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "select * from usuario order by nome";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_usuario)
    {

        $conexao = new Conexao();


        $sql = "select * from usuario where id_usuario = '$id_usuario'";

        $dados = $conexao->recuperarDados($sql);

        $this->id_usuario = $dados[0]['id_usuario'];
        $this->nome = $dados[0]['nome'];
        $this->email = $dados[0]['email'];
        $this->senha = $dados[0]['senha'];
        $this->id_perfil = $dados[0]['id_perfil'];

        return $conexao->executar($sql);
    }

    public function inserir($dados)
    {

        $nome = $dados['nome'];
        $email = $dados['email'];
        $senha = $dados['senha'];
        $id_perfil = $dados['id_perfil'];

        $conexao = new Conexao();

        $sql = "insert into usuario (nome, email, senha, id_perfil) values ('$nome','$email','$senha','$id_perfil')";
//        print_r($sql); die;
        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_usuario = $dados['id_usuario'];
        $nome = $dados['nome'];
        $email = $dados['email'];
        $senha = $dados['senha'];
        $id_perfil = $dados['id_perfil'];

        $conexao = new Conexao();

        $sql = "update usuario set
                  id_usuario = '$id_usuario',
                  nome = '$nome',
                  email = '$email',
                  senha = '$senha',
                  id_perfil = 'id_perfil'
                where id_usuario = '$id_usuario'";
//print_r($sql);die;
        return $conexao->executar($sql);
    }

    public function excluir($id_usuario)
    {
        $conexao = new Conexao();

        $sql = "delete from usuario where id_usuario = '$id_usuario'";
        return $conexao->executar($sql);
    }

    public function existeSigla($id_usuario)
    {
        $conexao = new Conexao();

        $sql = "SELECT COUNT(*) qtd FROM usuario WHERE id_usuario ='$id_usuario';";
        $dados = $conexao->recuperarDados($sql);

        return (boolean) $dados[0]['qtd'];
    }

    public function existeNome($nome)
    {
        $conexao = new Conexao();

        $sql = "SELECT COUNT(*) qtd FROM usuario WHERE nome ='$nome';";
        $dados = $conexao->recuperarDados($sql);


        return (boolean) $dados[0]['qtd'];
    }


}