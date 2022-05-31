<?php
class Conexao {
	private $host = 'localhost';
	private $dbname = 'avaliacao3';
	private $user = 'root';
	private $pass = 'YP7L1QDE';

	public function conectar(){
		try{
			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);
			return $conexao;
		} catch (PDOException $e) {
			echo '<p>'.$e->getMessage().'</p>';
		}
	}
}
?>