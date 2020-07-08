<?php
    class song extends Controller{
        protected $md;
        function __construct()
        {
            $this->md=$this->requireModel('songModel');
        }
        function default(){
 //////////// lấy dữ liệu tất cả bài hát //////////////////
            $data=$this->md->getAllSong();
            $this->viewUser('listsong',['data'=>$data]);          
        }
        function play(){
            $idsong=$_POST['id'];
            $data=$this->md->getSong($idsong);
            $name=$data['name'];
            $src=$data['src'];
            
            echo "
            <div class='pl-5 bg-light clblack rounded-top font-weight-bold w-50 justify-content-center'>
                {$name}
            </div>
            <audio id={$idsong} controls class='w-100'>
                <source src='./public/upload/{$src}' type='audio/ogg'>
                <source src='horse.mp3' type='audio/mpeg'>
            </audio>
            ";
        }
        function getsongbysearch(){
            $content=$_POST['ct'];
            $data=$this->md->getsongbysearch($content);
            $this->viewUser('listsong',['data'=>$data]);

        }
    }
?>