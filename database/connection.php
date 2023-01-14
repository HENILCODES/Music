<?php
session_start();
class connection{
    function StartConnection(){
        return mysqli_connect("localhost","root","","project");
    }
}