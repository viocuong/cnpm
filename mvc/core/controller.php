<?php
    class Controller{
        public function requireModel($model){
            require_once './mvc/models/'.$model.'.php';
            return new $model();
        }
        public function view($view,$arr=[]){
            require_once './mvc/views/'.$view.'.php';    
        }
        
        public function viewPage($view,$arr=[]){
            require_once './mvc/views/pages/'.$view.'.php';  
        }
        public function viewAjax($view,$arr=[]){
            require_once './mvc/views/viewajax/'.$view.'.php';
        }
        public function viewUser($view,$arr=[]){
            require_once './mvc/views/user/'.$view.'.php';
        }
        public function viewArtist($view,$arr=[]){
            require_once './mvc/views/artist/'.$view.'.php';
        }
        public function include($model){
            include_once './mvc/models/'.$model.'.php';
        }

    }
?>