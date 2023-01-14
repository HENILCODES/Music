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
}
