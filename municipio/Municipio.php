<?php

include_once '../Conexao.php';

class Municipio{

    protected $id_municipio;
    protected $nome;
    protected $id_uf;

    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "select * from municipio order by nome";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_partido)
    {
        $conexao = new Conexao();

        $sql = "select * from municipio where id_municipio = $id_municipio";
        $dados = $conexao->recuperarDados($sql);
        
        $this->id_municipio = $dados[0]['id_municipio'];
    }

    public function inserir($dados)
    {
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "insert into municipio (nome, titulo, zona,
                                        id_municipio, foto)
                            values ('$nome', '$titulo', '$zona', 
                            '$numero_endereco', '$id_municipio', '$foto')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_municipio = $dados['id_municipio'];

        $conexao = new Conexao();

        $sql = "update municipio set

        nome = '$nome',
        
        where id_municipio = '$id_municipio";

        return $conexao->executar($sql);
    }

    public function excluir($id_partido)
    {
        $conexao = new Conexao();

        $sql = "delete from municipio where id_municipio = $id_municipio";
        return $conexao->executar($sql);
    }


}