<?php
include "Music.php";

if (isset($_REQUEST['Audio_id'])) {
    $audio = new Music();
    if ($audio->delete($_REQUEST['Audio_id'])){
        header("location: /Music/html/Admin/music/");
    }
}   

?>