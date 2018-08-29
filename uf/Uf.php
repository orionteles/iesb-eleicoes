<?php

include_once '../Conexao.php';

class Uf
{

    protected $id_uf;
    protected $nome;

    /**
     * @return mixed
     */
    public function getIdUf()
    {
        return $this->id_uf;
    }

    /**
     * @param mixed $id_uf
     */
    public function setIdUf($id_uf)
    {
        $this->id_uf = $id_uf;
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

        $sql = "select * from uf order by nome";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_uf)
    {

        $conexao = new Conexao();


        $sql = "select * from uf where id_uf = '$id_uf'";

        $dados = $conexao->recuperarDados($sql);

        $this->id_uf = $dados[0]['id_uf'];
        $this->nome = $dados[0]['nome'];

        return $conexao->executar($sql);
    }

    public function inserir($dados)
    {
        $id_uf = $dados['id_uf'];
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "insert into uf (id_uf, nome) values ('$id_uf', '$nome')";
//        print_r($sql); die;
        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_uf = $dados['id_uf'];
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "update uf set
                  id_uf = '$id_uf',
                  nome = '$nome'
                where id_uf = '$id_uf'";
//print_r($sql);die;
        return $conexao->executar($sql);
    }

    public function excluir($id_uf)
    {
        $conexao = new Conexao();

        $sql = "delete from uf where id_uf = '$id_uf'";
        return $conexao->executar($sql);
    }

    public function existeSigla($id_uf)
    {
        $conexao = new Conexao();

        $sql = "SELECT COUNT(*) qtd FROM uf WHERE id_uf ='$id_uf';";
        $dados = $conexao->recuperarDados($sql);

        return (boolean) $dados[0]['qtd'];
    }

    public function existeNome($nome)
    {
        $conexao = new Conexao();

        $sql = "SELECT COUNT(*) qtd FROM uf WHERE nome ='$nome';";
        $dados = $conexao->recuperarDados($sql);


        return (boolean) $dados[0]['qtd'];
    }


}