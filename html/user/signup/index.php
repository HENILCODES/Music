<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Music/css/user.css">
    <title>Music | Sign Up</title>
</head>

<body>
    <div class="mov center">
        <h2 class="log_name"><a href="/Music/">Music Site</a></h2>
    </div>
    <div class="Ma">
        <div class="container">
            <div class="top">
                <h1 style="color: gold;">Sign up</h1>
            </div>
            <form class="form center" method="post" autocomplete="off" action="/Music/app/user/signup.php">
                <div class="box">
                    <div class="bi bi-person"></div>
                    <input type="text" name="Uname" placeholder="User Name" required>
                </div>
                <div class="box">
                    <div class="bi bi-envelope"></div>
                    <input type="email" name="Uemail" placeholder="email Address" required="required">
                </div>
                <div class="box">
                    <div class="bi bi-key"></div>
                    <input type="password" name="Upassword" placeholder="Password" required>
                </div>
                <button type="submit" name="Sign_Up" class="logB">
                    Check <i class="bi bi-box-arrow-in-right"></i>
                </button>
            </form>
            <h3>Alredy have Account <a href="../login/">Log in</a></h3>
        </div>
    </div>
</body>
</html>