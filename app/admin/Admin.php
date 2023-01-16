<?php
// include "/opt/lampp/htdocs/Music/database/connection.php";

class Admin extends connection{
    function getAll($table){
        return mysqli_query($this->StartConnection(), "select * from $table");
    }
}
?>