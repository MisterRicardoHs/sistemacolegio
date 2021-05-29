<?php 
	
	class Conexion extends \PDO{
		
		private $type = "mysql";
		private $host = "localhost";
		private $dbname = "parcial";
		private $user = "root";
		private $pass = "";
		
		 function __construct(){
			try{
			parent::__construct("$this->type:host=$this->host;dbname=$this->dbname",$this->user,$this->pass);
			$this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

		}catch(exception $e){

			echo "Error de base de datos ".$e->getMessage();

		}

	 }

	 


	}
    $objeto = new Conexion();
	
 ?>