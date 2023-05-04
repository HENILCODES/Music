<?php
include_once "/opt/lampp/htdocs/Music/database/connection.php";
class Music 
{
    use connection; 

    function upload($Values)
    {
        $Querys = "insert into musics (name,language,file,users_id,timestamp) values ('$Values[name]','$Values[language]','$Values[file]',$Values[user_id],'$Values[timestamp]')";
        echo $Querys;
        return mysqli_query($this->startConnection(), $Querys);
    }
    function selectMusic($type=null)
    {
        $Querys = "SELECT users.name AS user_name,musics.name AS music_name,musics.language,musics.file,musics.timestamp FROM musics INNER JOIN users ON musics.users_id = users.id where musics.language='$type' order by musics.id desc";
        return mysqli_query($this->startConnection(), $Querys);
    }
    function delete($id)
    {
        $Querys = "delete from musics where id = $id";
        return mysqli_query($this->startConnection(), $Querys);
    }
}
