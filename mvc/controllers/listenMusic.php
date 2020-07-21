<?php
    include_once './mvc/models/song.php';
    class listenMusic extends Controller{
        protected $md;
        function __construct()
        {
            //$this->md=$this->requireModel('song');
        }
        function default(){
 //////////// lấy dữ liệu tất cả bài hát //////////////////
            $data=song::getAllSong();
            $this->viewUser('listsong',['data'=>$data]);          
        }
        function play(){
            $idsong=$_POST['id'];
//////////// Lấy bài hát trong csdl ///////////////////////
            $song=song::getSong($idsong);
            //$data=$this->md->getSong($idsong);
            $name=$song->getName();
            $src=$song->getSrc();
            
            echo "
            <div class='pl-5 bg-light clblack rounded-top font-weight-bold w-50 justify-content-center'>
                {$name}
            </div>
            <audio id={$song->getId()} controls class='w-100'>
                <source src='./public/upload/{$src}' type='audio/ogg'>
                <source src='horse.mp3' type='audio/mpeg'>
            </audio>
            ";
        }
        
    }
?>