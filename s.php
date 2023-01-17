<?php

include "../Music/app/music/Music.php";

$musics = new Music();

// while ($rows = mysqli_fetch_array($musics->selectMusic())) {
//     print_r($rows);
//     echo "<br>";
// }

$row = $musics->selectMusic();

while ($r = mysqli_fetch_assoc($row)) {
    print_r($r);
    echo "<br>";
}
?>
<div id="loading-center-absolute">
    <div class="object"></div>
    <div class="object"></div>
    <div class="object"></div>
    <div class="object"></div>
    <div class="object"></div>
    <div class="object"></div>
    <div class="object"></div>
    <div class="object"></div>
    <div class="object"></div>
    <div class="object"></div>
</div>
