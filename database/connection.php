<?php
$DB_CON = mysqli_connect("localhost", "root", "", "music");

if (!$DB_CON) {
    echo "Not Connect";
}
