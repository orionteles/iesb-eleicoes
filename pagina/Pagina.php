<?php

include_once '../Conexao.php';

class Pagina
{

    protected $id_pagina;
    protected $nome;
    protected $caminho;
    protected $publica;

    /**
     * @return mixed
     */
    public function getIdPagina()
    {
        return $this->id_pagina;
    }

    /**
     * @param mixed $id_pagina
     */
    public function setIdPagina($id_pagina)
    {
        $this->id_pagina = $id_pagina;
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
    public function getCaminho()
    {
        return $this->caminho;
    }

    /**
     * @param mixed $caminho
     */
    public function setCaminho($caminho)
    {
        $this->caminho = $caminho;
    }

    /**
     * @return mixed
     */
    public function getPublica()
    {
        return $this->publica;
    }

    /**
     * @param mixed $publica
     */
    public function setPublica($publica)
    {
        $this->publica = $publica;
    }


    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "select * from pagina order by nome";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_pagina)
    {

        $conexao = new Conexao();


        $sql = "select * from pagina where id_pagina = '$id_pagina'";

        $dados = $conexao->recuperarDados($sql);

        $this->id_pagina = $dados[0]['id_pagina'];
        $this->nome = $dados[0]['nome'];
        $this->caminho = $dados[0]['caminho'];
        $this->publica = $dados[0]['publica'];

        return $conexao->executar($sql);
    }

    public function inserir($dados)
    {
        $nome = $dados['nome'];
        $caminho = $dados['caminho'];
        $publica = !empty($dados['publica']) ? 1 : 0;

        $conexao = new Conexao();

        $sql = "insert into pagina (nome, caminho, publica) 
                            values ('$nome', '$caminho', '$publica')";

        $id_pagina = $conexao->executar($sql);

        $this->vincularPerfil($id_pagina, $dados);

        return $id_pagina;
    }

    public function vincularPerfil($id_pagina, $dados)
    {
        include_once '../permissao/Permissao.php';

        $permissao = new Permissao();

        if(isset($dados['id_perfil'])){

            foreach ($dados['id_perfil'] as $perfil) {

                $aDados = [
                    'id_pagina' => $id_pagina,
                    'id_perfil' => $perfil,
                ];

                $permissao->inserir($aDados);
            }
        }

    }

    public function alterar($dados)
    {
        $id_pagina = $dados['id_pagina'];
        $nome = $dados['nome'];
        $caminho = $dados['caminho'];
        $publica = !empty($dados['publica']) ? 1 : 0;

        $conexao = new Conexao();

        $sql = "update pagina set
                  nome = '$nome',
                  caminho = '$caminho',
                  publica = '$publica'
                where id_pagina = '$id_pagina'";
//print_r($sql);die;
        return $conexao->executar($sql);
    }

    public function excluir($id_pagina)
    {
        $conexao = new Conexao();

        $sql = "delete from pagina where id_pagina = '$id_pagina'";
        return $conexao->executar($sql);
    }
}