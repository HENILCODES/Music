<?php
// session_start();
if (!$_SESSION['ActiveAdminID']) {
    header("location: /Music/html/user/login/");
}
?>