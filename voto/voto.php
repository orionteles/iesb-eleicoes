<?php
include '../Conexao.php';

class Voto {
	private $id_voto;
	private $id_eleitor;//fk
	private $id_cargo;//fk
	private $id_candidato;//fk
	private $tipo;
	private $data;
	
	public function get_id_voto() {
		return $this->id_voto;
	}
	
	public function get_id_eleitor() {
		return $this->id_eleitor;
	}
	
	public function get_id_cargo() {
		return $this->id_cargo;
	}
	
	public function get_id_candidato() {
		return $this->id_candidato;
	}
	
	public function get_tipo() {
		return $this->tipo;
	}
	
	public function get_data() {
		return $this->data;
	}
	
	public function set_id_voto($temp) {
		$this->id_voto = $temp;
	}
	
	public function set_id_eleitor($temp) {
		$this->id_eleitor = $temp;
	}
	
	public function set_id_cargo($temp) {
		$this->id_cargo = $temp;
	}
	
	public function set_id_candidato($temp) {
		$this->id_candidato = $temp;
	}
	
	public function set_tipo($temp) {
		$this->tipo = $temp;
	}
	
	public function set_data($temp) {
		$this->data = $temp;
	}
	
	public function carregarPorId($temp) {
        $conexao = new Conexao();
		
		$this->set_id_voto($temp['id_voto']);
		$this->set_id_eleitor($temp['id_eleitor']);
		$this->set_id_cargo($temp['id_cargo']);
		$this->set_id_candidato($temp['id_candidato']);
		$this->set_tipo($temp['tipo']);
		$this->set_data($temp['data']);
		
        $sql = "select * from voto where id_evento = '$temp'";
        $dados = $conexao->recuperarDados($sql);
		
		//$this->set_id_voto($dados[0]['id_voto']);
		$this->set_id_eleitor($dados[0]['id_eleitor']);
		$this->set_id_cargo($dados[0]['id_cargo']);
		$this->set_id_candidato($dados[0]['id_candidato']);
		$this->set_tipo($dados[0]['tipo']);
		$this->set_data($dados[0]['data']);
		
		return $dados;
    }
	public function inserir($temp) {
		//$this->set_id_voto($temp['id_voto']);
		$this->set_id_eleitor($temp['id_eleitor']);
		$this->set_id_cargo($temp['id_cargo']);
		$this->set_id_candidato($temp['id_candidato']);
		$this->set_tipo($temp['tipo']);
		$this->set_data($temp['data']);
		
        $conexao = new Conexao();
		
		//$this->get_id_voto();
		$id_eleitor = $this->get_id_eleitor();
		$id_cargo = $this->get_id_cargo();
		$id_candidato = $this->get_id_candidato();
		$tipo = $this->get_tipo();
		$data = $this->get_data();
		
        $sql = "insert into voto (id_eleitor, id_cargo, id_candidato, tipo, data) 
                          values ('$id_eleitor', '$id_cargo', '$id_candidato', '$tipo', '$data')";
        return $conexao->executar($sql);
	}
	
	public function recuperarDados() {
		$conexao = new Conexao();
        $sql = "select * from voto order by id_voto";
        return $conexao->recuperarDados($sql);
	}
	
	public function recuperarDados2() {
		$conexao = new Conexao();
	//TODO : 
	//select from eleitor;
	//select from cargo;
	//select from candidato;
	//retornar um array com uma única tabela 
	//pois no foreach as 'id' estão diferente (no formulário)
        $sql = "select * from voto order by id_voto";
        return $conexao->recuperarDados($sql);
	}
	
	public function alterar($temp){ 
	    $this->set_id_voto($temp['id_voto']);
		$this->set_id_eleitor($temp['id_eleitor']);
		$this->set_id_cargo($temp['id_cargo']);
		$this->set_id_candidato($temp['id_candidato']);
		$this->set_tipo($temp['tipo']);
		$this->set_data($temp['data']);

        $conexao = new Conexao();
		
		$id = $this->get_id_voto();
		$id_eleitor = $this->get_id_eleitor();
		$id_cargo = $this->get_id_cargo();
		$id_candidato = $this->get_id_candidato();
		$tipo = $this->get_tipo();
		$data = $this->get_data();
		
        $sql = "update voto set
				  id_voto = '$id',
				  id_eleitor = '$id_eleitor',
				  id_cargo = '$id_cargo',
				  id_candidato = '$id_candidato',
				  tipo = '$tipo',
				  data = '$data'
                where id_voto = '$id'";
		
		
        return $conexao->executar($sql);
	}
	
	public function excluir($temp) {
		$conexao = new Conexao();
        $sql = "delete from voto where id_voto = '$temp'";
        return $conexao->executar($sql);
	}
}
