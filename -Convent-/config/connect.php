<?php 
    class Conect {
        protected $connection;
        
        function __construct() {
            $this->connectDatabase();
        }

        function connectDatabase() {
            try {
                $this->connection = new PDO("mysql:host=localhost:3306;dbname=db_convent","root","");
                return $this->connection; //adicone uma linha para retornar a conexão
        } catch(PDOExpection $e) {
            echo 'Error! => '.$e->getMenssage();
            die();
        }        
    }
}
?>