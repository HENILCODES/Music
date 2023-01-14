<head>
    <title>Upload Error</title>
</head>
<?php
include "Music.php";

$Upload = new Music();

if (isset($_POST['Audio_upload'])) {
    date_default_timezone_set("Asia/Calcutta");

    $MusicName = $_POST['Music_Name'];
    $MusicFile = time() . $_FILES["Audio_file"]["name"];
    $MusicLanguage = $_POST['Audio_language'];
    $MusicTimeStamp = date('d-M-Y') . " " . date('g:i a');

    if (($_FILES["Audio_file"]["type"] == "audio/mpeg") || ($_FILES["Audio_file"]["type"] == "audio/wv")
        || ($_FILES["Audio_file"]["type"] == "audio/mp3") || ($_FILES["Audio_file"]["type"] == "audio/mpeg-4")
    ) {
        try {
            if (move_uploaded_file($_FILES["Audio_file"]["tmp_name"], "/opt/lampp/htdocs/Music/storage/Audios/" . $MusicFile)) {

                $InsertValue = array("name" => $MusicName, "language" => $MusicLanguage, "file" => $MusicFile, "user_id" => $_SESSION['ActiveUserId'], "timestamp" => $MusicTimeStamp);

                $Query_excute = $Upload->Upload($InsertValue);

                if ($Query_excute) {
                    header("location: /Music/html/music/");
                }
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    } else {
        echo "<center><h1> Upload File Not Valid </h1>";
        echo "<h2> You Upload File " . $_FILES["Audio_file"]["name"] . "</h2>";
        echo "<h3> File Formate <u style='color:red;'>" . $_FILES["Audio_file"]["type"]  . "  </u> Not Valid";
        echo "<p> Please Select File Type mp3 , mpeg-4  , wv ,.....</p></center>";
    }
}
?>