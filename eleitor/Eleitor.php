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
     
    
    /**
     * Get the value of foto
     */ 
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set the value of foto
     *
     * @return  self
     */ 
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get the value of id_municipio
     */ 
    public function getId_municipio()
    {
        return $this->id_municipio;
    }

    /**
     * Set the value of id_municipio
     *
     * @return  self
     */ 
    public function setId_municipio($id_municipio)
    {
        $this->id_municipio = $id_municipio;

        return $this;
    }

    /**
     * Get the value of numero_endereco
     */ 
    public function getNumero_endereco()
    {
        return $this->numero_endereco;
    }

    /**
     * Set the value of numero_endereco
     *
     * @return  self
     */ 
    public function setNumero_endereco($numero_endereco)
    {
        $this->numero_endereco = $numero_endereco;

        return $this;
    }

    /**
     * Get the value of bairro
     */ 
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set the value of bairro
     *
     * @return  self
     */ 
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get the value of complemento
     */ 
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set the value of complemento
     *
     * @return  self
     */ 
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get the value of logradouro
     */ 
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set the value of logradouro
     *
     * @return  self
     */ 
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get the value of cep
     */ 
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     *
     * @return  self
     */ 
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of secao
     */ 
    public function getSecao()
    {
        return $this->secao;
    }

    /**
     * Set the value of secao
     *
     * @return  self
     */ 
    public function setSecao($secao)
    {
        $this->secao = $secao;

        return $this;
    }

    /**
     * Get the value of zona
     */ 
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set the value of zona
     *
     * @return  self
     */ 
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of id_eleitor
     */ 
    public function getId_eleitor()
    {
        return $this->id_eleitor;
    }

    /**
     * Set the value of id_eleitor
     *
     * @return  self
     */ 
    public function setId_eleitor($id_eleitor)
    {
        $this->id_eleitor = $id_eleitor;

        return $this;
    }


    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "select * from eleitor order by nome";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_eleitor)
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
        // Falta realizar a implementação de municipio
        $id_municipio  = $dados['id_municipio'];
        $foto  = $dados['foto'];

        $conexao = new Conexao();

        $sql = "insert into eleitor (nome, titulo, zona,
                                     secao, telefone, cep,
                                      logradouro, complemento,
                                       bairro, numero_endereco,
                                        id_municipio, foto)
                            values ('$nome', '$titulo', '$zona', 
                            '$secao', '$telefone', '$cep',
                            '$logradouro', '$complemento', '$bairro', 
                            '$numero_endereco', '$id_municipio', '$foto')";
                            print_r($sql);die;

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

    public function excluir($id_eleitor)
    {
        $conexao = new Conexao();

        $sql = "delete from eleitor where id_eleitor = $id_eleitor";
        return $conexao->executar($sql);
    }

    public function existeTitulo($titulo)
    {
        $conexao = new Conexao();

        $sql = "SELECT COUNT(*) qtd FROM eleitor WHERE titulo ='$titulo';";
        $dados = $conexao->recuperarDados($sql);


        return $dados[0]['qtd'];
    }

    public function existeNome($nome)
    {
        $conexao = new Conexao();

        $sql = "SELECT COUNT(*) qtd FROM eleitor WHERE nome ='$nome';";
        $dados = $conexao->recuperarDados($sql);


        return $dados[0]['qtd'];
    }


}