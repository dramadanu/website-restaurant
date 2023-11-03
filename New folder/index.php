<?php

$conn = mysqli_connect("localhost", "root", "", "website-restaurant");
$result = mysqli_query($conn, "SELECT * FROM produk");
if(!$result) {
    echo mysqli_error($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<!-- favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
		<!-- animate scss -->
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- bootstarp css -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- icofont -->
		<link rel="stylesheet" href="assets/css/icofont.min.css">
		<link rel="stylesheet" href="assets/css/all.min.css">
		<!-- lightcase css -->
		<link rel="stylesheet" href="assets/css/lightcase.css">
		<!-- swiper css -->
		<link rel="stylesheet" href="assets/css/swiper.min.css">
		<!-- cusyom scss -->
        <link rel="stylesheet" href="assets/css/style.css">
        
		<title>FoodBuzz</title>
	</head>
<body>
    <h1>Daftar Menu</h1>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Kategori</th>
    </tr>

    <?php $i = 1; ?>
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a>
            <a href="">hapus</a>
        </td>
        <td><img src="assets/img/<?= $row["gambar"];?>" width="50"></td>
        <td><?=  $row["nama"];?></td>
        <td>Rp <?=  $row["harga"];?></td>
        <td><?=  $row["deskripsi"];?></td>
        <td><?=  $row["kategori"];?></td>
    </tr>
    <? php $i++; ?>
    <?php endwhile; ?>

    </table>
    
</body>
</html>
