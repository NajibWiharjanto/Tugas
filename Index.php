<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Detail</title>

</head>

<body>
<?php
    if (isset($_GET['submit'])) {
        $nama = $_GET['Nama'];
        $penulis = $_GET['Penulis'];
        $Tahun = $_GET['Tahun'];
        $eps = $_GET['Eps'];
    }

    ?>
    <div class="container_comic">
        <h3>Komik</h3>
        <div class="gambar_komik">
            <img src="one piece.webp" alt="gambar one piece" width="250" height="250">
        </div>
        <div class="detail_komik">
            <span>Nama Komik</span>
            <h3><?php echo $nama  ?></h3>
            
            <span>Penulis</span>
            <h3><?php echo $penulis  ?></h3>


            <span>Tahun Keluar</span>
            <h3><?php echo $Tahun  ?></h3>


            <span>Episode </span>
            <h3><?php echo $eps  ?></h3>

        </div>
    </div>


</body>

</html>
