<?php 
    class editInfor extends Controller{
        protected $user;
        protected $md;
        function __construct()
        {
            
            if(empty($_SESSION['user'])){
                header('Location:./login');
            }
            else{
                $user=$_SESSION['user'];
                $this->user=$user;
                //print_r($user);
            }
        }
        function default($param){
            $data= userfree::getUserFree($this->user);
            
            //echo $data->getName();
            //print_r($data);
            $this->view('layout',['page'=>'editinformation','data'=>$data]);
        
        }
        function proceedEdit(){
            $username=$_POST['username'];
            $name=$_POST['name'];
            $mail=$_POST['email'];
            $country=$_POST['country'];
            $pass=md5($_POST['pass']);
            $check=user::checkUser($username,$pass);
            if(!$check){
                echo "
                    <div class='container-fluid' p-5 justify-content-center> 
                        <h1 style='color:red;'>Xác thực thất bại, tạm biệt hacker</h1>
                    </div>
                ";
            }
            else{
                userfree::editUser($username,$name,$mail,$country);
                $user=userfree::getUserFree($username);
                $this->viewPage('detailinfor',['data'=>$user]);

            }
        }
        
    }
?>
