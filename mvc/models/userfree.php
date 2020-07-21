<?php
    class userfree extends user{
        private $gender;
        private $country;
        private $payInfor;
        public function __construct($name, $username, $password, $vip, $email,$gender,$country,$payInfor)
        {
            parent::__construct($name, $username, $password, $vip, $email);
            $this->gender=$gender;
            $this->country=$country;
            $this->payInfor=$payInfor;
        }
        public function register(){
            //$user=$this->gender;
            $conn=DataBase::getConnection()->query("INSERT INTO tbl_ (userName,passWord,email,vip,name) VALUES('{$this->username}','{$this->password}','{$this->email}',0,'{$this->name}')");
            $conn=DataBase::getConnection()->query("INSERT INTO tbl_userfree (userName,country,payInfor,gender) VALUES('{$this->username}','{$this->country}','{$this->payInfor}','{$this->gender}')");
        }
        public static function getUserFree($username){
            $data=DataBase::getConnection()->query("SELECT tbl_account.*,tbl_userfree.userName as userName,tbl_userfree.country,tbl_userfree.payInfor,tbl_userfree.gender FROM tbl_account,tbl_userfree WHERE tbl_account.userName=tbl_userfree.userName and tbl_account.userName='{$username}'");
            if($data->num_rows==0) return false;
            $res=$data->fetch_assoc();
            return new userfree($res['name'], $res['userName'], $res['passWord'], $res['vip'], $res['email'],$res['gender'],$res['country'],$res['payInfor']);

        }
        public static function editUser($username,$name,$mail,$country){
            DataBase::getConnection()->query("UPDATE tbl_account,tbl_userfree SET tbl_account.name='{$name}',tbl_userfree.country='{$country}',tbl_account.email='{$mail}' WHERE tbl_account.userName='{$username}' and tbl_userfree.userName='{$username}'");
            
        }
        public function upgradeUser(){
            
        }
        public function getCountry(){
            return $this->country;
        }
        public function getGender(){
            return $this->gender;
        }
    }
?>