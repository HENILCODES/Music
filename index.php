<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>

.home {
    border-bottom: 4px double red;
    text-decoration: double;
}
</style>
<body>
    <?php
    session_start();
        include "html/master/nav.php";
    ?>
    <div class="invite">
        <a href="whatsapp://send?text= Let's listen Music on Music Site http://henil.42web.io/music_site/   And also Upload Your Music  Web-Site."
            class="bi bi-whatsapp i"></a>
    </div>

    <div class="container center">
        <div class="imgBox">
            <div class="image1 image">
                <div class="imgData">
                    <h1 class="h1" style="color: gold ;"> You can listen to music on that Web-Site.</h1>
                    <a href="/Music/html/music/"><button class="ImBut">Let's Go</button></a>
                </div>
            </div>
        </div>
        <div class="imgBox">
            <div class="image2 image">
                <div class="imgData">
                    <h1 class="h1">You Can also Upload Your Music on That Web-Site.</h1>
                    <a href="/Music/html/music/upload/"><button class="ImBut">Upload Music</button></a>
                </div>
            </div>
        </div>
        <div class="imgBox">
            <div class="image3 image">
                <div class="imgData">
                    <h1 class="h1"> That Web-Site has some music. <br> You can also Download Music.</h1>
                    <a href="/Music/html/user/signup/"><button class="ImBut">Sign Up</button></a>
                </div>
            </div>
        </div>
    </div>
    <?php
        include "html/master/footer.php";
    ?>
</body>
</html>