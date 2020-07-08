<?php
    class login extends Controller{
        protected $user;
        protected $password;
        function default(){
            $error="";
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST)){
                    $error="";
                    $username=Functions::filter($_POST['user']);
                    $password=md5(Functions::filter($_POST['pass']));
                    $md=$this->requireModel("accountModel");
                    $resutl=$md->getAccount($username,$password);
                    if(!empty($resutl)){
                        $arr=$md->getData($username,$password);
                        $vip=$arr['vip'];
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
