<?php
include "Music.php";

if (isset($_REQUEST['Audio_id'])) {
    $audio = new Music();
    if ($audio->Delete($_REQUEST['Audio_id'])){
        header("location: /Music/html/Admin/music/");
    }
}   

?>