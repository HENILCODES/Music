<?php
include "/opt/lampp/htdocs/Music/database/connection.php";

class user extends connection
{
    function ChechkValue($fild, $value)
    {
        $query = "select * from user_detail where $fild = '$value'";
        return mysqli_query($this->StartConnection(), $query);
    }
    function Login($fild, $value)
    {
        $query = "select * from user_detail where $fild[0] = '$value[0]' AND $fild[1] = '$value[1]'";
        return mysqli_query($this->StartConnection(), $query);
    }
    function Insert($field, $value)
    {
        $query = "insert into user_detail ($field[0],$field[1],$field[2]) values ('$value[0]','$value[1]','$value[2]')";
        echo $query;
        return mysqli_query($this->StartConnection(), $query);
    }
}
