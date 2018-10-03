<?php

include_once '../Conexao.php';

class Perfil
{

    protected $id_perfil;
    protected $nome;

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


    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "select * from perfil order by nome";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_perfil)
    {

        $conexao = new Conexao();


        $sql = "select * from perfil where id_perfil = '$id_perfil'";

        $dados = $conexao->recuperarDados($sql);

        $this->id_perfil = $dados[0]['id_perfil'];
        $this->nome = $dados[0]['nome'];

        return $conexao->executar($sql);
    }

    public function inserir($dados)
    {
        $id_perfil = $dados['id_perfil'];
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "insert into perfil (id_perfil, nome) values ('$id_perfil', '$nome')";
//        print_r($sql); die;
        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_perfil = $dados['id_perfil'];
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "update perfil set
                  id_perfil = '$id_perfil',
                  nome = '$nome'
                where id_perfil = '$id_perfil'";
//print_r($sql);die;
        return $conexao->executar($sql);
    }

    public function excluir($id_perfil)
    {
        $conexao = new Conexao();

        $sql = "delete from perfil where id_perfil = '$id_perfil'";
        return $conexao->executar($sql);
    }
}