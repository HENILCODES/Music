<?php
include "/opt/lampp/htdocs/Music/database/connection.php";

class User extends connection
{
    function ChechkValue($fild, $value)
    {
        $query = "select * from users where $fild = '$value'";
        return mysqli_query($this->StartConnection(), $query);
    }
    function Login($fild, $value)
    {
        $query = "select * from users where $fild[0] = '$value[0]' AND $fild[1] = '$value[1]'";
        return mysqli_query($this->StartConnection(), $query);
    }
    function Signup($field, $value)
    {
        $query = "insert into users ($field[0],$field[1],$field[2]) values ('$value[0]','$value[1]','$value[2]')";
        echo $query;
        return mysqli_query($this->StartConnection(), $query);
    }
}
