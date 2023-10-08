<?php 

$koneksi = mysqli_connect('localhost', 'root', '', 'wdcxi');
if ($koneksi) {
    echo "ada sambungan";
}else{
    echo "anak anda hilang";
}


?>