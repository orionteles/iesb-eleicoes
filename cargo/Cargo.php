<?php

include_once '../Conexao.php';

class Cargo
{

    protected $id_cargo;
    protected $nome;
    protected $fk_id_uf;

    /**
     * @return mixed
     */
    public function getIdCargo()
    {
        return $this->id_cargo;
    }

    /**
     * @param mixed $id_cargo
     */
    public function setIdCargo($id_cargo)
    {
        $this->id_cargo = $id_cargo;
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
    public function getFkIdUf()
    {
        return $this->fk_id_uf;
    }

    /**
     * @param mixed $fk_id_uf
     */
    public function setFkIdUf($fk_id_uf)
    {
        $this->fk_id_uf = $fk_id_uf;
    }


    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "select * from cargo order by nome";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_cargo)
    {
        $conexao = new Conexao();

        $sql = "select * from cargo where id_cargo = '$id_cargo'";
        $dados = $conexao->recuperarDados($sql);

        $this->id_cargo = $dados[0]['id_cargo'];
        $this->nome = $dados[0]['nome'];
        $this->fk_id_uf = $dados[0]['id_uf'];

    }

    public function inserir($dados)
    {
        $nome = $dados['nome'];
        $fk_id_uf = $dados['fk_id_uf'];

        $conexao = new Conexao();

        $sql = "insert into cargo (nome, id_uf)
                            values ('$nome', '$fk_id_uf')
        ";
//        print_r($sql); die;

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_cargo = $dados['id_cargo'];
        $nome = $dados['nome'];
        $fk_id_uf = $dados['fk_id_uf'];

        $conexao = new Conexao();

        $sql = "update cargo set
        nome = '$nome',
        id_uf = '$fk_id_uf'
        where id_cargo = '$id_cargo'";

        return $conexao->executar($sql);
    }

    public function excluir($id_cargo)
    {
        $conexao = new Conexao();

        $sql = "delete from cargo where id_cargo = '$id_cargo'";
        return $conexao->executar($sql);
    }

}
