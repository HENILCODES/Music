<?php
include "/opt/lampp/htdocs/Music/database/connection.php";
class Music extends connection
{

    function Upload($Values)
    {
        $Querys = "insert into musics (name,language,file,users_id,timestamp) values ('$Values[name]','$Values[language]','$Values[file]',$Values[user_id],'$Values[timestamp]')";
        echo $Querys;
        return mysqli_query($this->StartConnection(), $Querys);
    }
    function SelectMusic()
    {
        $Querys = "SELECT users.name AS user_name,musics.name AS music_name,musics.language,musics.file,musics.timestamp FROM musics INNER JOIN users ON musics.users_id = users.id order by musics.id desc";
        return mysqli_query($this->StartConnection(), $Querys);
    }
    function Delete($id)
    {
        $Querys = "delete from musics where id = $id";
        return mysqli_query($this->StartConnection(), $Querys);
    }
}
