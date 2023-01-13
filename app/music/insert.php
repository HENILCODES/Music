<?php
include "/opt/lampp/htdocs/Music/database/connection.php";
?>

<?php
if (isset($_POST['Audio_upload'])) {
    date_default_timezone_set("Asia/Calcutta");

    $AUser_name = $_POST['username'];
    $AD_name = "$_POST[Music_Name]";
    $AD_file = time() . $_FILES["Audio_file"]["name"];
    $AD_language = "$_POST[Audio_language]";
    $AD_date = date('d-M-Y');
    $AD_time = date('g:i a');

    if (($_FILES["Audio_file"]["type"] == "audio/mpeg") || ($_FILES["Audio_file"]["type"] == "audio/wv")
        || ($_FILES["Audio_file"]["type"] == "audio/mp3") || ($_FILES["Audio_file"]["type"] == "audio/mpeg-4")
    ) {
        try {
            //code...
            $AddMusic = move_uploaded_file($_FILES["Audio_file"]["tmp_name"], "Audios/" . $AD_file);
            if ($AddMusic) {
                $Upload_Query = "INSERT INTO audio_detail(USER_NAME, AUDIO_NAME, AUDIO_FILE, AUDIO_LANGUAGE, UPLOAD_DATE, UPLOAD_TIME) VALUES ('$AUser_name','$AD_name','$AD_file','$AD_language','$AD_date','$AD_time')";
                $Query_exicut = mysqli_query($DB_CON, $Upload_Query);
                if ($Query_exicut) {
                    header("location:music.php");
                } else {
                    echo "Eror";
                }
            } else {
                echo $AUser_name;
            }
        } catch (\Throwable $th) {
            //throw $th;
            echo $th;
        }
    } else {
        echo "<center><h1> Upload File Not Valid </h1>";
        echo "<h2> You Upload File " . $_FILES["Audio_file"]["name"] . "</h2>";
        echo "<h3> File Formate <u style='color:red;'>" . $_FILES["Audio_file"]["type"]  . "  </u> Not Valid";
        echo "<p> Please Select File Type mp3 , mpeg-4  , wv ,.....</p>";
    }
}
?>