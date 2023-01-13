<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("PHP/DataBaseCon.php");
?>
<!-- sign up -->
<?php
if (isset($_POST['Sign_Up'])) {
    $u_n = $_POST['Uname'];
    $u_p = $_POST['Upassword'];
    $u_e = $_POST['Uemail'];

    $Check_User = "SELECT * FROM user_detail WHERE USER = '$u_n'";
    $query_check_User = mysqli_query($DB_CON, $Check_User);

    $Check_Email = "SELECT * FROM user_detail WHERE EMAIL ='$u_e'";
    $query_check_Email = mysqli_query($DB_CON, $Check_Email);

    if (mysqli_num_rows($query_check_User) > 0) {
        $err_D = "User Name";
        $err = true;
        $err_DL = false;
    } else if (mysqli_num_rows($query_check_Email) > 0) {
        $err_D = "Email Address";
        $err = true;
        $err_DL = false;
    } else {
        $New_User_insert = "INSERT INTO user_detail (USER, PASSWORD, EMAIL) VALUES ('$u_n','$u_p','$u_e')";
        $New_query_acept = mysqli_query($DB_CON, $New_User_insert);
        if ($New_query_acept) {
            header("location: UserLog.html");
        }
    }
}
?>

<!-- Log in -->
<?php
if (isset($_POST['Login_User'])) {
    $Lu_n = $_POST['Uname'];
    $Lu_p = $_POST['Upassword'];
    
    $Log_Check_User = "SELECT * FROM user_detail WHERE USER = '$Lu_n' AND PASSWORD = '$Lu_p'";
    $log_Query_check = mysqli_query($DB_CON, $Log_Check_User);
    
    if (mysqli_num_rows($log_Query_check) > 0) {
        session_start();
        $_SESSION['AUD_User'] = $Lu_n;
        header("location: upload.php");
    } else {
        $err = false;
        $err_DL = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Henil Code</title>
    <link rel="stylesheet" href="CSS/error.css">
</head>

<body>
    <div class="mainE">
        <?php
        if ($err) {
        ?>
            <h1><i class="bi bi-exclamation-triangle"></i> Sign Up Faild <i class="bi bi-exclamation-triangle"></i></h1>
            <div class="Da">
                <h2> Your <span><?php echo $err_D ?></span> is Alredy Use. Please Enter different <span><?php echo $err_D ?></span>.</h2>
                <a href="Usersign.html">Re Sign Up</a>
            </div>
        <?php
        }
        ?>

        <?php
        if ($err_DL) {
        ?>
            <h1><i class="bi bi-exclamation-triangle"></i>Log in Faild <i class="bi bi-exclamation-triangle"></i></h1>
            <div class="Da">
                <h2> Your <span>Detail</span> can't Match to Database. Please Check <span>User Name & Password</span> and Log in Again.</h2>
                <a href="UserLog.html">Re Log in</a>
            </div>
        <?php
        }
        ?>

    </div>
</body>

</html>
</body>
</html>