<?php
include_once '../Conexao.php';

class Uf{

    protected $id_uf;
    protected $nome;

    public function __construct($dados){
        $this->setNome($dados['nome']);
        $this->setIdUf($dados['id_uf']);
    }

    public function getIdUf()
    {
        return $this->id_uf;
    }

    public function setIdUf($id_uf)
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

    public function carregarPorId($id_uf)
    {

        $conexao = new Conexao();


        $sql = "select * from uf where id_uf = '$id_uf'";

        $dados = $conexao->recuperarDados($sql);

        $this->id_uf = $dados[0]['id_uf'];
        $this->nome = $dados[0]['nome'];

        return $conexao->executar($sql);
    }

    public function inserir(){
        $conexao = new Conexao();
        return $conexao->executar("INSERT INTO `uf` VALUES ('{$this->getNome()}','{$this->getIdUf()}')");
    }

    public function alterar(){
        $conexao = new Conexao();
        $conexao->executar("UPDATE `uf` SET `id_uf` = '{$this->getIdUf()}', `nome` = '{$this->getNome()}' WHERE `id_uf` = '{$this->getIdUf()}'");
        return true;
    }

    public function excluir(){
        $conexao = new Conexao();
        $conexao->executar("DELETE FROM `uf` WHERE `id_uf` = '{$this->getIdUf()}'");
        return true;
    }
}

