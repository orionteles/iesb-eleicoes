<?php

include_once '../Conexao.php';

class Eleitor{

    protected $id_eleitor;
    protected $nome;
    protected $titulo;
    protected $zona;
    protected $secao;
    protected $telefone;
    protected $cep;
    protected $logradouro;
    protected $complemento;
    protected $bairro;
    protected $numero_endereco;
    protected $id_municipio;
    protected $foto;



    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "select * from eleitor order by nome";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_partido)
    {
        $conexao = new Conexao();

        $sql = "select * from eleitor where id_eleitor = $id_eleitor";
        $dados = $conexao->recuperarDados($sql);
        
        $this->id_eleitor = $dados[0]['id_eleitor'];
        $this->nome = $dados[0]['nome'];
        $this->titulo = $dados[0]['titulo'];
        $this->zona = $dados[0]['zona'];
        $this->secao = $dados[0]['secao'];
        $this->telefone = $dados[0]['telefone'];
        $this->cep = $dados[0]['cep'];
        $this->logradouro = $dados[0]['logradouro'];
        $this->complemento = $dados[0]['complemento'];
        $this->bairro = $dados[0]['bairro'];
        $this->numero_endereco = $dados[0]['numero_endereco'];
        $this->id_municipio = $dados[0]['id_municipio'];
        $this->foto = $dados[0]['foto'];
    }

    public function inserir($dados)
    {
        $nome = $dados['nome'];
        $titulo  = $dados['titulo'];
        $zona = $dados['zona'];
        $secao  = $dados['secao'];
        $telefone  = $dados['telefone'];
        $cep  = $dados['cep'];
        $logradouro = $dados['logradouro'];
        $complemento  = $dados['complemento'];
        $bairro  = $dados['bairro'];
        $numero_endereco  = $dados['numero_endereco'];
        $id_municipio  = $dados['id_municipio'];
        $foto  = $dados['foto'];

        $conexao = new Conexao();

        $sql = "insert into partido (nome, titulo, zona,
                                     secao, telefone, cep,
                                      logradouro, complemento,
                                       bairro, numero_endereco,
                                        id_municipio, foto)
                            values ('$nome', '$titulo', '$zona', 
                            '$secao', '$telefone', '$cep',
                            '$logradouro', '$complemento', '$bairro', 
                            '$numero_endereco', '$id_municipio', '$foto')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_eleitor = $dados['id_eleitor'];
        $nome = $dados['nome'];
        $titulo  = $dados['titulo'];
        $zona = $dados['zona'];
        $secao  = $dados['secao'];
        $telefone  = $dados['telefone'];
        $cep  = $dados['cep'];
        $logradouro = $dados['logradouro'];
        $complemento  = $dados['complemento'];
        $bairro  = $dados['bairro'];
        $numero_endereco  = $dados['numero_endereco'];
        $id_municipio  = $dados['id_municipio'];
        $foto  = $dados['foto'];

        $conexao = new Conexao();

        $sql = "update eleitor set

        nome = '$nome',
        titulo = '$titulo',
        zona = '$zona',
        secao =  '$secao',
        telefone = '$telefone',
        cep = '$cep',
        logradouro = '$logradouro', 
        complemento = '$complemento', 
        bairro = '$bairro', 
        numero_endereco = '$numero_endereco', 
        id_municipio = '$id_municipio', 
        foto = '$foto'
        
        where id_eleitor = '$id_eleitor";

        return $conexao->executar($sql);
    }

    public function excluir($id_partido)
    {
        $conexao = new Conexao();

        $sql = "delete from eleitor where id_eleitor = $id_eleitor";
        return $conexao->executar($sql);
    }
}