<?php 

// $uts = 10;
// if($uts > 9){
//     echo "anda lulus";
// }else{
//     echo "anda tidak lulus yahahaa hayuk";
// }

// echo "<br>";

// $nilai = 8;
// if($uts > 9){
//     echo "anda mendapat nilai A";
// }elseif($nilai > 8){
//     echo "anda mendapat nilai B";
// }

// $level = 2;
// switch($level){
//     case 1:
//         echo "Anda di level pemula";
//         break;
//     case 2:
//         echo "Anda di level beginer";
//         break;
//     case 3:
//         echo "Anda di level expert";
//         break;
//     default:
//     echo "Anda berada di ruangan Antah Beranta";
// }


// $suka = true;
// echo $suka ? "aku suka makan ayam goreng" : "aku endak suka makan ayam goreng";
$kkm_uas = 80;
$kkm_uts = 75;


if ($kkm_uas >= 85) {
    echo "anda lulus";
}else{
    if($kkm_uts >= 75){
        echo "Anda lulus mendapat bantuan nilai uts";
    }else{
        echo "anda tidak lulus";
    }
}

?>