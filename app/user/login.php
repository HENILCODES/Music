<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Music/css/error.css">
    <title>Checking.....</title>
</head>
<?php
include "user.php";
$login = new user();

if (isset($_POST['Login_User'])) {
    $UserName = $_POST['Uname'];
    $UserPassword = $_POST['Upassword'];

    $field = array('USER', 'PASSWORD');
    $value = array($UserName, $UserPassword);

    $CheckQuery = $login->Login($field, $value);

    if (mysqli_num_rows($CheckQuery) > 0) {
        session_start();
        $_SESSION['ActiveUserId'] = $UserName;
        header("location: /Music/html/music/upload/");
    } else {
        $Error = true;
    }
}
?>

<body>
    <div class="mainE">
        <?php
        if ($Error) {
        ?>
            <h1><i class="bi bi-exclamation-triangle"></i>Log in Faild <i class="bi bi-exclamation-triangle"></i></h1>
            <div class="Da">
                <h2> Your <span>Detail</span> can't Match to Database. Please Check <span>User Name & Password</span> and Log in Again.</h2>
                <a href="/Music/html/user/login/">Re Log in</a>
            </div>
        <?php
        }
        ?>

    </div>
</body>

</html>