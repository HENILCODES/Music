<?php
include "/opt/lampp/htdocs/Music/database/connection.php";
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
<link rel="stylesheet" href="/Music/css/index.css">
<link rel="stylesheet" href="/Music/css/phone.css" media="screen and (max-width: 1000px)">
<link rel="stylesheet" href="/Music/css/spiner.css">
<link rel="stylesheet" href="/Music/css/scrol.css">

<div>
    <div id="spiner">
        <div class="loader_main">
            <div class="loader">
                <div class="loader loader3"></div>
            </div>
        </div>
        <div class="load_title">
            <h1>Please Wait Few Seconds...</h1>
        </div>
    </div>
    <div class="mov center">
        <h2 class="log_name"><a href="/Music/html/home/" >Music Site</a></h2>
        <h2 class="aer"><i class="bi bi-list xl"></i></h2>
    </div>
    <div class="nav center" id="nav">
        <h3 class="xl"><i class="bi bi-x-lg"></i></h3>
        <div class="nav_logo center">
            <img src="/Music/storage/images/logo.jpg" class="imageP" alt="logo">
        </div>
        <div class="logo_name center">
            <h1><a href="/Music/html/home/" class="active">Music Site </a></h1>
        </div>
        <div class="nav_link">
            <ul class="center">
                <li><a href="/Music/html/home/" class="home link">Home</a></li>
                <li><a href="/Music/html/music/" class="music link">Music</a></li>
                <li><a href="/Music/html/music/upload/" class="upload link">Upload</a></li>
                <?php
                if (isset($_SESSION['ActiveUserId'])) {
                ?>
                    <li><a href="/Music/app/user/logout.php?logout=true" name="logout" class="link">Logout</a></li>
                <?php
                } else {
                ?>
                    <li><a href="/Music/html/user/login/" class="link">Login</a></li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="FoT">
            <div class="footer">
                <h2><a href="https://www.instagram.com/henil_v_p/" class="bi bi-instagram"></a></h2>
                <h2><a href="https://www.facebook.com/henil.prajapati.376" class="bi bi-facebook"></a></h2>
            </div>
            <div class="CoB">
                <span class="botF">Copyright &copy; 2022 <a href="https://henil.rf.gd">Henil Code</a> , All Rights Reserved.</span>
            </div>
        </div>
    </div>
</div>
<script src="/Music/js/jquery-3.6.0.js"></script>
<script src="/Music/js/script.js"></script>