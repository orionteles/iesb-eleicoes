<?php

include_once '../Conexao.php';

class Uf{

    protected $id_uf;
    protected $nome;

    public function getId_uf()
    {
        return $this->id_uf;
    }

    public function setId_uf($id_uf)
    {
        $this->id_uf = $id_uf;
    }

    public function getNome()
    {
        return $this->nome;
    }

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

        $sql = "select * from uf where id_uf = $id_uf";
        $dados = $conexao->recuperarDados($sql);
        
        $this->id_uf = $dados[0]['id_uf'];
        $this->nome = $dados[0]['nome'];
    }

    public function inserir($dados)
    {
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "insert into uf (nome) values ('$nome')";
        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_uf = $dados['id_uf'];
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "update uf set
                  nome = '$nome',
                where id_uf = $id_uf";

        return $conexao->executar($sql);
    }

    public function excluir($id_uf)
    {
        $conexao = new Conexao();

        $sql = "delete from uf where id_uf = $id_uf";
        return $conexao->executar($sql);
    }
}