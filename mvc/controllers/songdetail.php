<?php
    class songdetail extends Controller{
        function default(){
            $song=song::getSong($_POST['id']);
            $this->viewUser('songdetail',['data'=>$song]);
        }
    }
?>