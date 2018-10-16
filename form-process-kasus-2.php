<?php
$nama=$_GET['nama'];
$hobi=$_GET['hobi'];
$skill=$_GET['skill'];

// Process Input
$hobbies = [
    'A'=>['nama'=>'Yoga','deskripsi'=>'Banyak profesional yang meyakini bahwa yoga memberikan efek yang positif dalam bekerja, yaitu cara mereka dalam menghadapi tekanan.'],
    'B'=>['nama'=>'Bermain Musik','deskripsi'=>'Musik juga dianggap dapat meningkatkan kreatifitas dan meningkatkan mood dalam bekerja'],
    'C'=>['nama'=>'Belajar Bahasa Asing','deskripsi'=>'peluang untuk bekerja di luar negeri juga terbuka karena bahasa merupakan awal untuk memahami suatu negara'],
    'D'=>['nama'=>'Membaca','deskripsi'=>'Membaca dapat menambah pengetahuan dan membuka pikiran terhadap berbagai hal-hal baru. Untuk menunjang karir, tidak perlu harus selalu membaca buku yang berkaitan dengan pekerjaan'],
    'E'=>['nama'=>'Gadget','deskripsi'=>'orang yang memiliki hobi untuk mengamati atau mengutak-atik gadget atau perangkat elektronik lainnya. Tanpa disadari, hal ini sebenarnya cukup membantu dalam menunjang karir.'],
    'F'=>['nama'=>'Menulis','deskripsi'=>'Meskipun terkesan serius, tetapi menulis amat bermanfaat karena Anda dapat menuangkan pikiran, ide, dan isi hati dengan baik sehingga dapat menjadi sarana ekspresi diri.'],
    'G'=>['nama'=>'Fotografi','deskripsi'=>'-'],
    'H'=>['nama'=>'Olahraga','deskripsi'=>'olahraga tim membawa manfaat lebih karena dapat mengasah keterampilan dalam berkomunikasi dan menyusun strategi bersama.']
];
$skills = [
    'A'=>['nama'=>'Profesionalitas','deskripsi'=>'Berkompeten dan Punya Passion pada Bidang yang Ditekuni'],
    'B'=>['nama'=>'Public Speaking','deskripsi'=>'skill ini akan diperlukan ketika Anda mempresentasikan hasil karya, laporan, atau apa pun kepada atasan dan seluruh staff. Apalagi Anda menjadi brand ambassador yang memiliki posisi sebagai wakil dari perusahaan untuk memperkenalkan produk baru kepada mitra kerja atau khalayak umum.'],
    'C'=>['nama'=>'Problem Solver','deskripsi'=>'Dengan bekal pola pikir kritis, sikap keterbukaan, dan lapang dada, kita sangat mungkin bisa menjadi seorang problem solver atau pemecah masalah. Seorang problem solver sangat dibutuhkan di dunia kerja yang kompleks'],
    'D'=>['nama'=>'Open Minded','deskripsi'=>'Berbeda dengan pola pikir kritis, sikap terbuka ataupun memiliki pikiran yang terbuka akan mengarahkan kita kepada pembaruan-pembaruan yang membuat kita cepat untuk menyesuaikan diri dengan perubahan, membuat resolusi, dan melakukan revolusi terhadap suatu hal.'],
];
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
    <div class="column column-50 column-offset-25">
        <div>
            <label>Nama</label>
            <p><?= $nama ?></p>
        </div>
        <hr>
        <div>
            <label><h3>Hobi</h3></label>
            <div>
                <?php
                $i = 1;
                    foreach($hobi as $item){
                        echo "<h5 style='margin-bottom: 0;'>".($i++).". ".$hobbies[$item]['nama']."</h5>";
                        echo "<p style='margin-top: 0; text-align: justify;'>".$hobbies[$item]['deskripsi']."</p>";
                    }
                ?>
            </div>
        </div>
        <hr>
        <div>
            <label><h3>Skill</h3></label><div>
                <?php
                $i = 1;
                foreach($skill as $item){
                    echo "<h5 style='margin-bottom: 0;'>".($i++).". ".$skills[$item]['nama']."</h5>";
                    echo "<p style='margin-top: 0; text-align: justify;'>".$skills[$item]['deskripsi']."</p>";
                }
                ?>
            </div>
        </div>

        <br>
        <div>
            <a href="form-input-kasus-2.html" class="button button-outline">< Kembali</a>
        </div>
    </div>
</div>
</body>
</html>
