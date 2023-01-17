<?php
class Admin {
    use connection;
    function getAll($table){
        return mysqli_query($this->startConnection(), "select * from $table");
    }
    function countTotlaRecored($table){
        return mysqli_query($this->startConnection(), "select count(id) as total from $table");
    }
}
?>