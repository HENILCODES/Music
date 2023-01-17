<?php
include "User.php";

if (isset($_REQUEST['User_id'])) {
    
    $User = new User();

    if ($User->delete($_REQUEST['User_id'])) {
        header("location: /Music/html/Admin/users/");
    }
}
