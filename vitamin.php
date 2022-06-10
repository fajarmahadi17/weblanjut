<?php
require 'koneksi.php';

$vitamin = query("SELECT * FROM vitamin");

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
      <th scope="col">Nama Vitamin</th>
      <th scope="col">Harga Vitamin</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($vitamin as $row) : ?>
    <tr>
      <th scope="row"><?= $row['id_vitamin'] ?></th>
      <td><?= $row['nama_vitamin'] ?></td>
      <td><?= $row['harga_vitamin'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>