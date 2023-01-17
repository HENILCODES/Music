<?php
session_start();
trait connection{
    function startConnection(){
        return mysqli_connect("localhost","root","","project");
    }
}