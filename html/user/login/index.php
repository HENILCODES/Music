<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Music/css/user.css">
    <title>Music | Log in</title>
</head>

<body>
    <div class="mov center">
        <h2 class="log_name"><a href="/Music/">Music Site</a></h2>
    </div>
    <div class="Ma">
        <div class="container">
            <div class="top">
                <h1 style="color: gold;">Log in</h1>
            </div>
            <form class="form center" method="post" action="/Music/app/user/login.php">
                <div class="box">
                    <div class="bi bi-person"></div>
                    <input type="text" name="Uname" placeholder="User Name" required>
                </div>
                <div class="box">
                    <div class="bi bi-key"></div>
                    <input type="password" name="Upassword" placeholder="Password" required>
                </div>
                <button type="submit" name="Login_User" class="logB">
                    Check <i class="bi bi-box-arrow-in-right"></i>
                </button>
            </form>
            <h3>Don't have accout <a href="../signup/"> Sign up</a> </h3>
        </div>
    </div>
</body>
</html>