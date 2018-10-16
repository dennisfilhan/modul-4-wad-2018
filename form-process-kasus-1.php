<?php
$nama=$_GET['nama'];
$tanggalLahir=$_GET['tanggal_lahir'];
$jenisKelamin=$_GET['jenis_kelamin'];
$agama=$_GET['agama'];

// Process Input
$tanggalLahir = date('D, d M Y',strtotime($tanggalLahir));
$jenisKelamin = ['L'=>'Laki-Laki', 'P'=>'Perempuan'][strtoupper($jenisKelamin)];
$agama = ucfirst($agama);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Process Kasus 1</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
</head>
<body>
<div style="height:5vh;"></div>
<div class="row">
    <div class="column column-33 column-offset-33">
        <div>
            <label>Nama</label>
            <p><?= $nama ?></p>
        </div>
        <div>
            <label>Tanggal Lahir</label>
            <p><?= $tanggalLahir ?></p>
        </div>
        <div>
            <label>Jenis Kelamin</label>
            <p><?= $jenisKelamin ?></p>
        </div>
        <div>
            <label>Agama</label>
            <p><?= $agama ?></p>
        </div>

        <div>
            <a href="form-input-kasus-1.html" class="button button-outline">< Kembali</a>
        </div>
    </div>
</div>
</body>
</html>
