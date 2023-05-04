<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <link rel="stylesheet" href="/Music/css/music.css">
</head>
<style>
    .music {
        border-bottom: 4px double red;
        text-decoration: double;
    }
</style>

<body>
    <?php
    // session_start();
    include "../../app/music/Music.php";
    include_once "../master/nav.php";
    ?>
    <div class="head">
        <h1>Music Album</h1>
    </div>

    <div class="top">
        <h2><i class="bi bi-star-fill"></i> Verifide Music</h2>
    </div>
    <div class="Mcontainer" id="Hindi">
        <div class="main_box">
            <div class="audio_box">
                <div class="Auimg">
                    <img src="/Music/storage/images/audio.jpg">
                </div>
                <div class="audio">
                    <audio src="/Music/storage/Audios/168316696116736048711666354678Money heist ringtone.mp3" controls preload="metadata"></audio>
                </div>
                <div class="audio_Detail">
                    <h1>Deva Shree Ganesha Song</h1>
                    <div class="user_U">
                        <span class="user"><i class="bi bi-person"> Henil Code</i></span>
                        <span class="Date"><i class="bi bi-calendar3"></i>28-May-2022<i class="bi bi-clock"></i>1:00 pm</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_box">
            <div class="audio_box">
                <div class="Auimg">
                    <img src="/Music/storage/images/audio.jpg">
                </div>
                <div class="audio">
                    <audio src="Audios/Naacho Naacho.mp3" controls preload="auto"></audio>
                </div>
                <div class="audio_Detail">
                    <h1>RRR | Naacho Naacho Song</h1>
                    <div class="user_U">
                        <span class="user"><i class="bi bi-person"> Henil Code</i></span>
                        <span class="Date"><i class="bi bi-calendar3"></i>28-May-2022<i class="bi bi-clock"></i>1:00 pm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top">
        <h2># Hindi Music</h2>
    </div>
    <div class="Mcontainer" id="Hindi">
        <?php
        $musics = new Music();
        $Result_select = $musics->selectMusic('Hindi');
        while ($rows = mysqli_fetch_assoc($Result_select)) {
        ?>
            <div class="main_box">
                <div class="audio_box">
                    <div class="Auimg">
                        <img src="/Music/storage/images/audio.jpg">
                    </div>
                    <div class="audio">
                        <audio src="/Music/storage/Audios/<?php echo $rows['file'] ?>" controls preload="auto"></audio>
                    </div>
                    <div class="audio_Detail">
                        <h1><?php echo $rows['music_name'] ?></h1>
                        <div class="user_U">
                            <span class="user"><i class="bi bi-person"></i><?php echo $rows['user_name'] ?></span>
                            <span class="Date"><i class="bi bi-calendar3"></i><?php echo $rows['timestamp'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="top">
        <h2># English Music</h2>
    </div>
    <div class="Mcontainer" id="Hindi">
        <?php
        $musics = new Music();
        $Result_select = $musics->selectMusic('English');
        while ($rows = mysqli_fetch_assoc($Result_select)) {
        ?>
            <div class="main_box">
                <div class="audio_box">
                    <div class="Auimg">
                        <img src="/Music/storage/images/audio.jpg">
                    </div>
                    <div class="audio">
                        <audio src="/Music/storage/Audios/<?php echo $rows['file'] ?>" controls preload="auto"></audio>
                    </div>
                    <div class="audio_Detail">
                        <h1><?php echo $rows['music_name'] ?></h1>
                        <div class="user_U">
                            <span class="user"><i class="bi bi-person"></i><?php echo $rows['user_name'] ?></span>
                            <span class="Date"><i class="bi bi-calendar3"></i><?php echo $rows['timestamp'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="top">
        <h2># Other Music</h2>
    </div>
    <div class="Mcontainer" id="Hindi">
        <?php
        $musics = new Music();
        $Result_select = $musics->selectMusic('Other');
        while ($rows = mysqli_fetch_assoc($Result_select)) {
        ?>
            <div class="main_box">
                <div class="audio_box">
                    <div class="Auimg">
                        <img src="/Music/storage/images/audio.jpg">
                    </div>
                    <div class="audio">
                        <audio src="/Music/storage/Audios/<?php echo $rows['file'] ?>" controls preload="auto"></audio>
                    </div>
                    <div class="audio_Detail">
                        <h1><?php echo $rows['music_name'] ?></h1>
                        <div class="user_U">
                            <span class="user"><i class="bi bi-person"></i><?php echo $rows['user_name'] ?></span>
                            <span class="Date"><i class="bi bi-calendar3"></i><?php echo $rows['timestamp'] ?></span>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>
<?php
include "../master/footer.php";
?>

</html>