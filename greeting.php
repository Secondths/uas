<?php
$jam = date('H');

if ($jam >= 0 && $jam < 10) {
    echo "Selamat pagi!";
} elseif ($jam >= 10 && $jam < 15) {
    echo "Selamat siang!";
} elseif ($jam >= 15 && $jam < 18) {
    echo "Selamat sore!";
} else {
    echo "Selamat malam!";
}
?>