<?php
    class DataBase{
        protected $conn;
        protected $servername="localhost";
        protected $username="root";
        protected $password="";
        protected $dbname="cnpm";
        function __construct()
        {
            if(!isset($conn)){
                $this->conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname);
            }
            $this->conn->query("SET names 'utf8'");
        }
        function query($stringQuery){
            
        }
    }
?>
