<?php

include "../Music/app/music/Music.php";

$musics = new Music();

// while ($rows = mysqli_fetch_array($musics->SelectMusic())) {
//     print_r($rows);
//     echo "<br>";
// }

$row = $musics->SelectMusic();

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
width: 8px;
height: 50px;
margin-right: 5px;
background-color: #d91f26;
-webkit-animation: animate 1s infinite;
animation: animate 1s infinite;
float: left;


position: absolute;
left: 50%;
top: 50%;
height: 50px;
width: 150px;
margin-top: -25px;
margin-left: -75px;