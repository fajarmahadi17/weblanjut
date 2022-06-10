<?php
require 'koneksi.php';

$grooming = query("SELECT * FROM grooming");

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
      <th scope="col">Jenis Grooming</th>
      <th scope="col">Harga Grooming</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($grooming as $row) : ?>
    <tr>
      <th scope="row"><?= $row['id_grooming'] ?></th>
      <td><?= $row['jenis_grooming'] ?></td>
      <td><?= $row['harga_grooming'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>