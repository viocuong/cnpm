<?php
    class register extends Controller{
        function default(){
            //$md=$this->requireModel('loginModel');
            $errors=['erroruser'=>'','errorpass'=>'','errorfullname'=>'','errorrepass'=>'','erroremail'=>''];
            $dataUser=[];
            $check=$check1=1;
            $user=$pass=$email=$name=$gender=$country="";
            if($_SERVER['REQUEST_METHOD']=="POST"){
                $check1=0;
                $dataUser['user']=$user=$_POST['user'];
                $result = DataBase::getConnection()->query("select * from tbl_account where userName='{$user}'");
                $dataUser['pass']=$pass=$_POST['pass'];
                $repass=$_POST['repass'];
                $name=$_POST['fullname'];
                $gender=$_POST['inlineRadioOptions'];
                $country=$_POST['country'];
                //$phone=$_POST['numPhone'];
                $dataUser['email']=$email=$_POST['email'];

                if($user==""){$errors['erroruser']="không được để trống";$check=0;}
                else $errors['erroruser']='';
                if($user==""){$errors['errorfullname']="không được để trống";$check=0;}
                else $errors['errorfullname']='';
                if($pass=="") { $errors['errorpass']="không được để trống"; $check=0;}
                else $errors['errorpass']='';
                if($repass=="") {$errors['errorrepass']="không được để trống";$check=0;}
                else $errors['errorrepass']='';
                if($email=="") {$errors['erroremail']="không được để trống";$chekc=0;}
                else $errors['erroremail']='';
                if($result->num_rows>0 ) {$errors['erroruser']="tài khoản đã tồn tại";$check=0;}
                if($pass !== $repass) {$errors['errorrepass']='mật khẩu nhập lại không đúng';$check=0;}
            }
            if($check==1&& $check1==0){
                $pass=md5($pass);
                
                $userfree=new userfree($name,$user,$pass,0,$email,$gender,$country,"Vietcombank");
                
///////////////// Dang ki tai khoan //////////////////////////
                $userfree->register();
                //print_r($userfree);
                //$md->excute("insert into tbl_account(userName,passWord,email,vip,name) values('{$user}','{$pass}','{$email}',0,'{$name}')");
                echo "<script>alert('Đăng ký thành công')</script>";
                echo "<script>setTimeout(function(){
                    window.location = 'login';
                }, 1000);</script>";
            }
            $this->view("layout",['page'=>'register','error'=>$errors]);
        }
    }
?>