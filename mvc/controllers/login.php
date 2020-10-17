<?php
    class login extends Controller{
        protected $user;
        protected $password;
        function default(){
            $error="";
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST)){
                    $error="";
                    $username=$_POST['user'];
                    $password=md5(Functions::filter($_POST['pass']));
                   // $md=$this->requireModel("accountModel");
                    $isUser=user::checkUser($username,$password);
                    //$resutl=$md->getAccount($username,$password);
                    if($isUser){
                        $user=user::getUser($username);
                        $vip=$user->getVip();
                        $_SESSION['vip']=$vip;
                        $_SESSION['user']=$username;
                        
                        header('Location: homepage');    
                    }
                    else $error="Thông tin tài khoản hoặc mật khẩu không chính xác";
                }

            }
            $this->view("layout",['page'=>'login','error'=>$error]);
            
        }
    }
