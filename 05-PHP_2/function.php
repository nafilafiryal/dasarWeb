<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapkanSalam = "Selamat pagi";


perkenalan($saya);
?>