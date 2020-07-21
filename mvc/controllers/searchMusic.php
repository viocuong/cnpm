<?php
    class searchMusic extends Controller{
        function getSongByKeyword(){
            $kw=$_POST['ct'];
            $data=song::getSongByKeyword($kw);
            $this->viewUser('listsong',['data'=>$data]);

        }
    }
?>