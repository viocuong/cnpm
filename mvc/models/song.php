<?php
class song
{
    protected $name;
    protected $cagetories;
    protected $issue;
    protected $artist;
    protected $idSong;
    protected $src;
    function __construct($name,$cagetories,$issue,$artist,$idSong,$src)
    {
        $this->name=$name;
        $this->cagetories=$cagetories;
        $this->issue=$issue;
        $this->artis=$artist;
        $this->idSong=$idSong;
        $this->src=$src;
        
    }
    static function getAllSong()
    {
        $res=DataBase::getConnection()->query("select tbl_song.*,tbl_account.name as nameartist from tbl_song,tbl_account where tbl_song.userNameArtist=tbl_account.userName");

        //$res = $this->conn->query("select tbl_song.*,tbl_account.name as nameartist from tbl_song,tbl_account where tbl_song.userNameArtist=tbl_account.userName");
        $data = [];
        $i = 0;
        if ($res->num_rows > 0) {
            while ($song = $res->fetch_assoc()) {
                array_push($data,new song($song['name'],$song['cagetories'],$song['issue'],$song['userNameArtist'],$song['idSong'],$song['src']));
            }
        }
        return $data;
    }
    static function getSong($id)
    {
        $res=DataBase::getConnection()->query("select * from tbl_song where idSong={$id}");
        $data=$res->fetch_array();
        if ($res->num_rows > 0) return new song($data['name'],$data['cagetories'],$data['issue'],$data['userNameArtist'],$data['idSong'],$data['src']); 
    }
    static function getSongByKeyword($keyword)
    {

        $res = DataBase::getConnection()->query("select tbl_song.*,tbl_account.name as nameartist from tbl_song,tbl_account where (tbl_song.userNameArtist=tbl_account.userName) and (tbl_song.name like '%{$keyword}%' or tbl_account.name like '%{$keyword}%')");
        $data = [];
        
        if ($res->num_rows > 0) {
            while ($song = $res->fetch_assoc()) {
                array_push($data,new song($song['name'],$song['cagetories'],$song['issue'],$song['userNameArtist'],$song['idSong'],$song['src']));
            }
        }
        return $data;
    }
    function getId(){return $this->idSong;}
    function getName(){return $this->name;}
    function getCagetories(){return $this->cagetories;}
    function getIssue(){return $this->issue;}
    function getSrc(){return $this->src;}
    function getArtist(){return $this->artis;}
}
