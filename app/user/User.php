<?php
include "/opt/lampp/htdocs/Music/database/connection.php";

class User extends connection
{
    function ChechkOneValue($fild, $value)
    {
        $query = "select * from users where $fild = '$value'";
        return mysqli_query($this->StartConnection(), $query);
    }
    function Login($value)
    {
        $query = "select * from users where name = '$value[name]' AND password = '$value[password]'";
        return mysqli_query($this->StartConnection(), $query);
    }
    function Signup($value)
    {
        $query = "insert into users (name,email,password) values ('$value[name]','$value[email]','$value[password]')";
        echo $query;
        return mysqli_query($this->StartConnection(), $query);
    }
    function Delete($id)
    {
        $Querys = "delete from users where id = $id";
        return mysqli_query($this->StartConnection(), $Querys);
    }
}
