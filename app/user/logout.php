<?php
echo "S";
session_start();
if (isset($_REQUEST['logout'])) {
    unset($_SESSION['ActiveUserId']);
    header("location: /Music/html/user/login/");

}