<?php
    class DataBase{
        protected static $conn;
        protected static $servername="localhost";
        protected static $username="phpmyadmin";
        protected static $password="cuong280299";
        protected static $dbname="test";
        //function __construct(){
        // {
        //     if(!isset($conn)){
        //         $this->conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        //     }
             
        // }
        public static function getConnection(){
            self::$conn= new mysqli(self::$servername,self::$username,self::$password,self::$dbname);
            self::$conn->query("SET names 'utf8'");
            return self::$conn;
        }
    }
?>
