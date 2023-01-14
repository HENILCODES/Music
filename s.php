<?php

include "../Music/app/music/Music.php";

$musics = new Music();

// while ($rows = mysqli_fetch_array($musics->SelectMusic())) {
//     print_r($rows);
//     echo "<br>";
// }

$row = $musics->SelectMusic();

while($r = mysqli_fetch_assoc($row)){
    print_r($r);
    echo "<br>";
}