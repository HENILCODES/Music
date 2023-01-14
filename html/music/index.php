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
    include "../master/nav.php";
    ?>
    <div class="container">
        <div class="Group">
            <div class="box-group">
                <div class="filter-group">
                    <div class="filter">
                        <div class="search-box">
                            <input class="search" type="search" placeholder="find music ....">
                        </div>
                    </div>
                </div>
                <div class="music-group">
                    <?php
                    include "../../app/music/Music.php";
                    $musics = new Music();
                    $Result_select = $musics->SelectMusic();
                    while ($rows = mysqli_fetch_assoc($Result_select)) {
                    ?>
                        <div class="Music-box">
                            <div class="titel">
                                <div class="music-name">
                                    <span><?php echo $rows['music_name']; ?></span>
                                </div>
                                <div class="author">
                                    <span><?php echo $rows['user_name'] ?></span>
                                </div>
                            </div>
                            <div class="language">
                                <?php echo $rows['language']; ?>
                            </div>
                            <div class="user-details">
                                <span><?php echo $rows['timestamp'] ?></span>
                            </div>
                            <div class="likes">
                                <audio src="/Music/storage/Audios/16736046501666354678Money heist ringtone.mp3" controls></audio>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
include "../master/footer.php";
?>

</html>