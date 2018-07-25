<?php

class Conexao {
	protected $conexao;

	public function conectar()
	{
		$this->conexao = new PDO('mysql:host=localhost;dbname=eleicoes;charset=utf8', 'root', '');
	}
	
	public function desconectar()
	{
		$this->conexao = null;
	}
	
	public function executar($sql)
	{
		$this->conectar();
		$this->conexao->query($sql);
        $lastId = $this->conexao->lastInsertId();
		$this->desconectar();
        return $lastId;
	}
	
	public function recuperarDados($sql)
	{
		$this->conectar();

        $retorno = $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

		$this->desconectar();
		return $retorno;
	}
}