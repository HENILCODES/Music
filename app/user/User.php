<?php
include "/opt/lampp/htdocs/Music/database/connection.php";

class User
{
    use connection;
    function chechkOneValue($fild, $value)
    {
        $query = "select * from users where $fild = '$value'";
        return mysqli_query($this->startConnection(), $query);
    }
    function login($value)
    {
        $query = "select * from users where name = '$value[name]' AND password = '$value[password]'";
        return mysqli_query($this->startConnection(), $query);
    }
    function signup($value)
    {
        $query = "insert into users (name,email,password) values ('$value[name]','$value[email]','$value[password]')";
        echo $query;
        return mysqli_query($this->startConnection(), $query);
    }
    function delete($id)
    {
        $music = "delete from musics where users_id =$id ";
        mysqli_query($this->startConnection(), $music);
        
        $Querys = "delete from users where id = $id";
        return mysqli_query($this->startConnection(), $Querys);
    }
}
