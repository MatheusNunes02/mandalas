<?php
	//Sample Database Connection Syntax for PHP and MySQL.
	
	//Connect To Database
class DbConnection{

	
	private $hostname="localhost:3307";
	private $username="root";
	private $password="";
	private $dbname="mandala_database";
    
    public function connect(){
        try{
            $connect = new PDO("mysql:host={$this->hostname};dbname={$this->dbname}",
                                "{$this->username}",
                                "{$this->password}");

            $connect->exec('SET CHARACTER SET utf8mb4');

            return $connect;
        }catch(PDOException $e){
            echo 'Não foi possível carregar as informações do banco de dados <br>';

            echo 'Código de erro:'.$e->getCode().'<br> Mensagem de erro:'.$e->getMessage();
        }
    }


}


?>