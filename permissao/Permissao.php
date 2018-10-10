<?php

include_once '../Conexao.php';

class Permissao
{

    protected $id_permissao;
    protected $id_pagina;
    protected $id_perfil;


    public function inserir($dados)
    {
        $id_pagina = $dados['id_pagina'];
        $id_perfil = $dados['id_perfil'];

        $conexao = new Conexao();

        $sql = "insert into permissao (id_pagina, id_perfil) 
                               values ('$id_pagina', '$id_perfil')";
//        print_r($sql); die;
        return $conexao->executar($sql);
    }

    public function excluir($id_permissao)
    {
        $conexao = new Conexao();

        $sql = "delete from permissao where id_permissao = '$id_permissao'";
        return $conexao->executar($sql);
    }
}