<?php
session_start();
if (!$_SESSION['ActiveUserId']) {
    header("location: /Music/html/user/login/");
}
?>