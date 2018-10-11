<?php

include_once '../Conexao.php';

class Permissao
{

    protected $id_permissao;
    protected $nome;


    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "select * from permissao order by nome";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_permissao)
    {

        $conexao = new Conexao();


        $sql = "select * from permissao where id_permissao = '$id_permissao'";

        $dados = $conexao->recuperarDados($sql);

        $this->id_permissao = $dados[0]['id_permissao'];
        $this->nome = $dados[0]['nome'];

        return $conexao->executar($sql);
    }

    public function inserir($dados)
    {
        $id_permissao = $dados['id_permissao'];
        $id_pagina = $dados['id_pagina'];
        $id_perfil = $dados['id_perfil'];

        $conexao = new Conexao();

        $sql = "insert into permissao (id_pagina, id_perfil) values ('$id_pagina', '$id_perfil')";
//        print_r($sql); die;
        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_permissao = $dados['id_permissao'];
        $nome = $dados['nome'];

        $conexao = new Conexao();

        $sql = "update permissao set
                  id_permissao = '$id_permissao',
                  nome = '$nome'
                where id_permissao = '$id_permissao'";
//print_r($sql);die;
        return $conexao->executar($sql);
    }

    public function excluir($id_permissao)
    {
        $conexao = new Conexao();

        $sql = "delete from permissao where id_permissao = '$id_permissao'";
        return $conexao->executar($sql);
    }

    public function existeSigla($id_permissao)
    {
        $conexao = new Conexao();

        $sql = "SELECT COUNT(*) qtd FROM permissao WHERE id_permissao ='$id_permissao';";
        $dados = $conexao->recuperarDados($sql);

        return (boolean) $dados[0]['qtd'];
    }

    public function existeNome($nome)
    {
        $conexao = new Conexao();

        $sql = "SELECT COUNT(*) qtd FROM permissao WHERE nome ='$nome';";
        $dados = $conexao->recuperarDados($sql);


        return (boolean) $dados[0]['qtd'];
    }


}