<?php
session_start();

$DB_CON = mysqli_connect("localhost", "root", "", "music");

if (!$DB_CON) {
    echo "Not Connect";
}

class connection{
    function StartConnection(){
        return mysqli_connect("localhost","root","","music");
    }
}