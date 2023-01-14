<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Music</title>
    <link rel="stylesheet" href="/Music/css/upload.css">
    <link rel="stylesheet" href="/Music/css/smolespin.css">
</head>
<style>
    .upload {
        border-bottom: 4px double red;
        text-decoration: double;
    }
</style>
<body>
    <?php
    include "../../master/nav.php";
    include "/opt/lampp/htdocs/Music/database/security.php";
    ?>
    <div class="Ma">
        <div class="Music_container">
            <div class="top">
                <h1 style="color:#d86be7;"> Upload Music </h1>
            </div>
            <form class="form center" enctype="multipart/form-data" method="post" onsubmit="MusicUpload()" action="/Music/app/music/insert.php">
                <div class="box">
                    <label for="SongName" class="bi bi-hash"></label>
                    <input type="text" id="SongName" maxlength="25" name="Music_Name" placeholder="Music Name" autocomplete="off" required>
                </div>
                <div class="box">
                    <label for="AuDfile" class="bi bi-music-note"></label>
                    <input type="file" name="Audio_file" id="AuDfile" required accept="audio/*">
                </div>
                <div class="Bsel">
                    <label for="language">Music Language </label>
                    <select id="language" name="Audio_language">
                        <option value="Hindi">Hindi</option>
                        <option value="English">English</option>
                        <option value="Other" selected>Other</option>
                    </select>
                </div>
                <div id="spinID">
                    <div class="smoleSpin">
                        <div class="spin"></div>
                        <div class="spin"></div>
                        <div class="spin"></div>
                        <span>Audio Uploading...</span>
                    </div>
                </div>
                <button type="submit" name="Audio_upload" id="SubD" class="logB">
                    <i class="bi bi-cloud-arrow-up-fill"></i> Upload <i class="bi bi-cloud-arrow-up-fill"></i>
                </button>
            </form>
        </div>
    </div>
</body>
<?php
include "../../master/footer.php";
?>
<script>
    function MusicUpload(){
        var FN = document.getElementById("SongName").value;
        var AD = document.getElementById("AuDfile").value;
        if (FN == "" || AD == "") {
            console.log("Required All Fild");
        } else {
            document.getElementById("spinID").style.display = "block";
        }   
    }
</script>

</html>