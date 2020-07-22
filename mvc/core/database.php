<?php
    class DataBase{
        protected static $conn;
        protected static $servername="localhost";
        protected static $username="cuongnguyen";
        protected static $password="cuong28021999";
        protected static $dbname="cnpm";
        // function __construct()
        // {
        //     if(!isset($conn)){
        //         $this->conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        //     }
        //     $this->conn->query("SET names 'utf8'");
        // }
        public static function getConnection(){
            self::$conn= new mysqli(self::$servername,self::$username,self::$password,self::$dbname);
            return self::$conn;
        }
    }
?>
