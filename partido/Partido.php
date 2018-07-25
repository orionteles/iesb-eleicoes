<?php

include_once '../Conexao.php';

class Partido{

    protected $id_partido;
    protected $nome;
    protected $sigla;
    protected $numero;

    public function getIdPartido()
    {
        return $this->id_partido;
    }

    public function setIdPartido($id_partido)
    {
        $this->id_partido = $id_partido;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSigla()
    {
        return $this->sigla;
    }

    public function setSigla($sigla)
    {
        $this->sigla = $sigla;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }



    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "select * from partido order by nome";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_partido)
    {
        $conexao = new Conexao();

        $sql = "select * from partido where id_partido = $id_partido";
        $dados = $conexao->recuperarDados($sql);
        
        $this->id_partido = $dados[0]['id_partido'];
        $this->nome = $dados[0]['nome'];
        $this->sigla = $dados[0]['sigla'];
        $this->numero = $dados[0]['numero'];
    }

    public function inserir($dados)
    {
        $nome = $dados['nome'];
        $sigla = $dados['sigla'];
        $numero = $dados['numero'];

        $conexao = new Conexao();

        $sql = "insert into partido (nome, sigla, numero) values ('$nome', '$sigla', '$numero')";
        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_partido = $dados['id_partido'];
        $nome = $dados['nome'];
        $sigla = $dados['sigla'];
        $numero = $dados['numero'];

        $conexao = new Conexao();

        $sql = "update partido set
                  nome = '$nome',
                  sigla = '$sigla',
                  numero = '$numero'
                where id_partido = $id_partido";

        return $conexao->executar($sql);
    }

    public function excluir($id_partido)
    {
        $conexao = new Conexao();

        $sql = "delete from partido where id_partido = $id_partido";
        return $conexao->executar($sql);
    }
}