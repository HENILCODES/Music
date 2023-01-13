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
    <div>
        <div class="head">
            <h1>Music Album</h1>
        </div>

        <div class="top">
            <h2># Hindi </h2>
        </div>
        <div class="Mcontainer" id="Hindi">
            <?php
            $HAD_Select_Qu = "SELECT * FROM audio_detail WHERE AUDIO_LANGUAGE = 'Hindi' ORDER BY `audio_detail`.`AID` DESC";
            $HAcT_Query = mysqli_query($DB_CON, $HAD_Select_Qu);
            while ($HAD = mysqli_fetch_array($HAcT_Query)) {
            ?>
                <div class="main_box">
                    <div class="audio_box">
                        <div class="Auimg">
                            <img src="/Music/storage/images/audio.jpg">
                        </div>
                        <div class="audio">
                            <audio src="/Music/storage/Audios/<?php echo $HAD['AUDIO_FILE'] ?>" controls preload="auto"></audio>
                        </div>
                        <div class="audio_Detail">
                            <h1><?php echo $HAD['AUDIO_NAME'] ?></h1>
                            <div class="user_U">
                                <span class="user"><i class="bi bi-person"></i><?php echo $HAD['USER_NAME'] ?></span>
                                <span class="Date"><i class="bi bi-calendar3"></i><?php echo $HAD['UPLOAD_DATE'] ?> <i class="bi bi-clock"></i><?php echo $HAD['UPLOAD_TIME'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="top">
            <h2># English </h2>
        </div>
        <div class="Mcontainer" id="English">
            <?php
            $EAD_Select_Qu = "SELECT * FROM audio_detail WHERE AUDIO_LANGUAGE = 'English' ORDER BY `audio_detail`.`AID` DESC";
            $EAcT_Query = mysqli_query($DB_CON, $EAD_Select_Qu);
            while ($EAD = mysqli_fetch_array($EAcT_Query)) {
            ?>
                <div class="main_box">
                    <div class="audio_box">
                        <div class="Auimg">
                            <img src="/Music/storage/images/audio.jpg">
                        </div>
                        <div class="audio">
                            <audio src="/Music/storage/Audios/<?php echo $EAD['AUDIO_FILE'] ?>" controls preload="auto"></audio>
                        </div>
                        <div class="audio_Detail">
                            <h1><?php echo $EAD['AUDIO_NAME'] ?></h1>
                            <div class="user_U">
                                <span class="user"><i class="bi bi-person"></i><?php echo $EAD['USER_NAME'] ?></span>
                                <span class="Date"><i class="bi bi-calendar3"></i><?php echo $EAD['UPLOAD_DATE'] ?> <i class="bi bi-clock"></i><?php echo $EAD['UPLOAD_TIME'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="top">
            <h2># Other</h2>
        </div>
        <div class="Mcontainer" id="other">
            <?php
            $OAD_Select_Qu = "SELECT * FROM audio_detail WHERE AUDIO_LANGUAGE = 'Other' ORDER BY `audio_detail`.`AID` DESC";
            $OAcT_Query = mysqli_query($DB_CON, $OAD_Select_Qu);
            while ($OAD = mysqli_fetch_array($OAcT_Query)) {
            ?>
                <div class="main_box">
                    <div class="audio_box">
                        <div class="Auimg">
                            <img src="/Music/storage/images/audio.jpg">
                        </div>
                        <div class="audio">
                            <audio src="/Music/storage/Audios/<?php echo $OAD['AUDIO_FILE'] ?>" controls preload="metadata"></audio>
                        </div>
                        <div class="audio_Detail">
                            <h1><?php echo $OAD['AUDIO_NAME'] ?></h1>
                            <div class="user_U">
                                <span class="user"><i class="bi bi-person"></i><?php echo $OAD['USER_NAME'] ?></span>
                                <span class="Date"><i class="bi bi-calendar3"></i><?php echo $OAD['UPLOAD_DATE'] ?> <i class="bi bi-clock"></i><?php echo $OAD['UPLOAD_TIME'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
<?php
include "../master/footer.php";
?>

</html>