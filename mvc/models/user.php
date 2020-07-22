<?php
class user
{
    protected $name;
    protected $username;
    protected $password;
    protected $email;
    protected $vip;
    //protected $conn;
    //protected static $conn=DataBase::getConnection();
    function __construct($name, $username, $password, $vip, $email)
    {
        $this->name = $name;
        $this->username = $username;
        $this->password = $password;
        $this->vip = $vip;
        $this->email = $email;
    }
    public static function checkUser($username, $password)
    {
        $conn = DataBase::getConnection();
        $res = $conn->query("SELECT * FROM tbl_account WHERE userName='{$username}' and passWord='{$password}'");
        if($res->num_rows>0) return true;
        return false;
    }
    public static function getInformation($username)
    {
        $conn = DataBase::getConnection();
        $res = $conn->query("SELECT * FROM tbl_account WHERE userName='{$username}'");
        $data = [];
        $i = 0;
        if ($res->num_rows > 0) {
            
            $data= $res->fetch_assoc();
        }
        return $data;
    }
    public static function updateUser($user)
    {
        $username = $user->username;
        $name = $user->name;
        //$password=$user->password;
        //$vip=$user->vip;
        $email = $user->email;
        $conn = DataBase::getConnection();
        $conn->query("UPDATE tbl_account SET name='{$name}',email='{$email}' WHERE username='{$username}'");
    }
    public static function getUser($username)
    {

        $res = DataBase::getConnection()->query("select * from tbl_account where userName='{$username}'");
        $data = $res->fetch_assoc();
        return new user($data['name'],$data['userName'],$data['passWord'],$data['vip'],$data['email']);

    }
    public function getVip(){
        return $this->vip;
    }
public function getUserName(){
        return $this->username;
    }
    public function getPass(){
        return $this->password;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){return $this->email;}
    public static function getType($username){
        $res=DataBase::getConnection()->query("select vip from tbl_account where userName='{$username}'");
        $ok=0;
        
        if($res->num_rows>0){
            $data=$res->fetch_assoc();
            return $data['vip'];
        }
    }
    
    //public function getVip(){return $this->vip;}
}
