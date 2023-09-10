<?php 

if(isset($_POST['simpan'])){
    $nilai = $_POST['nilai'];
    if($nilai > 90){
        echo "Grade A";
    }elseif($nilai > 80){
        echo "Grade B";
    }elseif($nilai >= 75){
        echo "Grade C";
    }else{
        echo "Anda tidak lulus";
    }
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Kebatinan</title>
</head>
<body>
    <form method="post">
        <label for="">Nilai</label>
        <input type="number" name="nilai">
        <button type="submit" value="simpan" name="simpan">Simpan</button>
    </form>
</body>
</html>