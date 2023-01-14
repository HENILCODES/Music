<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Music/css/error.css">
    <title>signup......</title>
</head>

<body>
    <?php
    include "User.php";
    $signup = new User();
    $ErrorDetail = false;

    if (isset($_POST['Sign_Up'])) {
        $name = $_POST['Uname'];
        $password = $_POST['Upassword'];
        $email = $_POST['Uemail'];

        $QueryCheckName = $signup->ChechkOneValue('name', $name);
        $QueryCheckEmail = $signup->ChechkOneValue('email', $email);

        if (mysqli_num_rows($QueryCheckName) > 0) {
            $ErrorDetail = "User Name" . " ' " . $name . " '";
        } else if (mysqli_num_rows($QueryCheckEmail) > 0) {
            $ErrorDetail = "Email Address" . " ' " . $email . " '";
        } else {
            $value = array("name" => $name, "password" => $password, "email" => $email);

            $ResultQuery = $signup->Signup($value);
            if ($ResultQuery) {
                header("location: /Music/html/user/login/");
            }
        }
    }
    ?>


    <div class="mainE">
        <?php
        if ($ErrorDetail) {
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