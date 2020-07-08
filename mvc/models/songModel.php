<?php
class songModel extends DataBase
{
    function getAllSong()
    {
        $res = $this->conn->query("select tbl_song.*,tbl_account.name as nameartist from tbl_song,tbl_account where tbl_song.userNameArtist=tbl_account.userName");
        $data = [];
        $i = 0;
        if ($res->num_rows > 0) {
            while ($song = $res->fetch_assoc()) {
                $data[$i++] = $song;
            }
        }
        return $data;
    }
    function getSong($id)
    {
        $res = $this->conn->query("select * from tbl_song where idSong={$id}");
        if ($res->num_rows > 0) return $res->fetch_array();
    }
    function getsongbysearch($ct)
    {

        $res = $this->conn->query("select tbl_song.*,tbl_account.name as nameartist from tbl_song,tbl_account where (tbl_song.userNameArtist=tbl_account.userName) and (tbl_song.name like '%{$ct}%' or tbl_account.name like '%{$ct}%')");
        $data = [];
        $i = 0;
        if ($res->num_rows > 0) {
            while ($song = $res->fetch_assoc()) {
                $data[$i++] = $song;
            }
        }
        return $data;
    }
}
