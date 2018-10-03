<?php

include_once '../Conexao.php';

class Candidato{

    protected $id_cadidato;
    protected $nome;
    protected $numero_cadidato;
    protected $telefone;
    protected $data_nascimento;
    protected $sexo;
    protected $cep;
    protected $logradouro;
    protected $complemento;
    protected $bairro;
    protected $numero_endereco;
    protected $id_municipio;
    protected $id_partido;
    protected $id_cargo;
    protected $foto;

    /**
     * @return mixed
     */
    public function getIdCadidato()
    {
        return $this->id_cadidato;
    }

    /**
     * @param mixed $id_cadidato
     */
    public function setIdCadidato($id_cadidato)
    {
        $this->id_cadidato = $id_cadidato;
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
    public function getNumeroCadidato()
    {
        return $this->numero_cadidato;
    }

    /**
     * @param mixed $numero_cadidato
     */
    public function setNumeroCadidato($numero_cadidato)
    {
        $this->numero_cadidato = $numero_cadidato;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @param mixed $data_nascimento
     */
    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @param mixed $logradouro
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getNumeroEndereco()
    {
        return $this->numero_endereco;
    }

    /**
     * @param mixed $numero_endereco
     */
    public function setNumeroEndereco($numero_endereco)
    {
        $this->numero_endereco = $numero_endereco;
    }

    /**
     * @return mixed
     */
    public function getIdMunicipio()
    {
        return $this->id_municipio;
    }

    /**
     * @param mixed $id_municipio
     */
    public function setIdMunicipio($id_municipio)
    {
        $this->id_municipio = $id_municipio;
    }

    /**
     * @return mixed
     */
    public function getIdPartido()
    {
        return $this->id_partido;
    }

    /**
     * @param mixed $id_partido
     */
    public function setIdPartido($id_partido)
    {
        $this->id_partido = $id_partido;
    }

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
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }




    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM candidato ORDER BY nome";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_cadidato)
    {

        $conexao = new Conexao();

        $sql = "SELECT * FROM candidato WHERE id_candidato = '$id_cadidato'";
        $dados = $conexao->recuperarDados($sql);

        $this->id_cadidato = $dados[0]['id_cadidato'];
        $this->nome = $dados[0]['nome'];
        $this->numero_cadidato = $dados[0]['numero_cadidato'];
        $this->telefone = $dados[0]['telefone'];
        $this->data_nascimento = $dados[0]['data_nascimento'];
        $this->sexo = $dados[0]['sexo'];
        $this->cep = $dados[0]['cep'];
        $this->logradouro = $dados[0]['logradouro'];
        $this->complemento = $dados[0]['complemento'];
        $this->bairro = $dados[0]['bairro'];
        $this->numero_endereco = $dados[0]['numero_endereco'];
        $this->id_municipio = $dados[0]['id_municipio'];
        $this->id_partido = $dados[0]['id_partido'];
        $this->id_cargo = $dados[0]['id_cargo'];
        $this->foto = $dados[0]['foto'];

    }

    public function inserir($dados)
    {

        $id_cadidato = $dados['id_cadidato'];
        $nome = $dados['nome'];
        $numero_cadidato = $dados['numero_cadidato'];
        $telefone = $dados['telefone'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];
        $cep = $dados['cep'];
        $logradouro = $dados['logradouro'];
        $complemento = $dados['complemento'];
        $bairro = $dados['bairro'];
        $numero_endereco = $dados['numero_endereco'];
        $id_municipio = $dados['id_municipio'];
        $id_partido = $dados['id_partido'];
        $id_cargo = $dados['id_cargo'];
        $foto = $dados['foto'];
        /**
         * todo implementar upload de arquivo aqui $foto.
         */
        $conexao = new Conexao();

        $sql = "INSERT INTO candidato (id_candidato, nome, numero_candidato,
                                     telefone, data_nascimento,
                                      sexo, cep,
                                       logradouro, complemento,
                                        bairro, numero_endereco, id_municipio,
                                        id_partido, id_cargo, foto)
                            VALUES ('$id_cadidato','$nome', '$numero_cadidato', '$telefone, 
                            '$data_nascimento', '$sexo', '$cep',
                            '$logradouro', '$complemento', '$bairro', 
                            '$numero_endereco', '$id_municipio', '$id_partido', '$id_cargo', '$foto')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_cadidato = $dados['id_cadidato'];
        $nome = $dados['nome'];
        $numero_cadidato = $dados['numero_cadidato'];
        $telefone = $dados['telefone'];
        $data_nascimento = $dados['data_nascimento'];
        $sexo = $dados['sexo'];
        $cep = $dados['cep'];
        $logradouro = $dados['logradouro'];
        $complemento = $dados['complemento'];
        $bairro = $dados['bairro'];
        $numero_endereco = $dados['numero_endereco'];
        $id_municipio = $dados['id_municipio'];
        $id_partido = $dados['id_partido'];
        $id_cargo = $dados['id_cargo'];
        $foto = $dados['foto'];

        $conexao = new Conexao();

        $sql = "UPDATE candidato
                SET
                    nome = '$nome',
                    numero_cadidato = '$numero_cadidato',
                    telefone = '$telefone',
                    data_nascimento = '$data_nascimento',
                    sexo = '$sexo',
                    cep = '$cep',
                    logradouro = '$logradouro',
                    complemento = '$complemento',
                    bairro = '$bairro',
                    numero_endereco = '$numero_endereco',
                    id_municipio = '$id_municipio',
                    id_partido = '$id_partido',
                    id_cargo = '$id_cargo',
                    foto = '$foto'
                WHERE id_candidato = '$id_cadidato'";

        return $conexao->executar($sql);
    }

    public function excluir($id_cadidato)
    {
        $conexao = new Conexao();

        $sql = "DELETE FROM candidato WHERE id_candidato = '$id_cadidato'";

        return $conexao->executar($sql);
    }


}