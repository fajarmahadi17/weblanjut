<?php
require 'koneksi.php';

$makanan = query("SELECT * FROM makanan");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-image: url(img/pet.jpg);
        background-size: cover;
        height: 600px;
    }
</style>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id </th>
      <th scope="col">Nama Makanan</th>
      <th scope="col">Harga Makanan</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($makanan as $row) : ?>
    <tr>
      <th scope="row"><?= $row['id_makanan'] ?></th>
      <td><?= $row['nama_makanan'] ?></td>
      <td><?= $row['harga_makanan'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>