<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Music/css/error.css">
    <title>Signup......</title>
</head>

<body>
    <?php
    include "/opt/lampp/htdocs/Music/database/connection.php";
    if (isset($_POST['Sign_Up'])) {
        $name = $_POST['Uname'];
        $password = $_POST['Upassword'];
        $email = $_POST['Uemail'];

        $SelectName = "SELECT * FROM user_detail WHERE USER = '$name'";
        $QueryCheckName = mysqli_query($DB_CON, $SelectName);

        $SelectEmail = "SELECT * FROM user_detail WHERE EMAIL ='$email'";
        $QueryCheckEmail = mysqli_query($DB_CON, $SelectEmail);

        if (mysqli_num_rows($QueryCheckName) > 0) {
            $ErrorDetail = "User Name"." ' ".$name." '";
            $error = true;
        } else if (mysqli_num_rows($QueryCheckEmail) > 0) {
            $ErrorDetail = "Email Address"." ' ".$email." '";
            $error = true;
        } else {
            $New_User_insert = "INSERT INTO user_detail (USER, PASSWORD, EMAIL) VALUES ('$name','$password','$email')";
            $New_query_acept = mysqli_query($DB_CON, $New_User_insert);
            if ($New_query_acept) {
                header("location: /Music/html/user/login/");
            }
        }
    }
    ?>
    <div class="mainE">
        <?php
        if ($error) {
        ?>
            <h1><i class="bi bi-exclamation-triangle"></i> Sign Up Faild <i class="bi bi-exclamation-triangle"></i></h1>
            <div class="Da">
                <h2> Your <span><?php echo $ErrorDetail; ?></span> is Alredy Use. Please Enter different Details.</h2>
                <a href="/Music/html/user/signup/">Re Sign Up</a>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>