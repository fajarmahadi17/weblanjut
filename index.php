<?php require 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
	<title>DATA MAHASISWA</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	<style>
    body {
        background-image: url(img/pet.jpg);
        background-size: cover;
        height: 600px;
    }
    </style>
    
    
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-transparent shadow d-flex justify-content-center">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Msptr petShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        </li>
           <a class="nav-link active" aria-current="page" href="index.php"></a>
       <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="grooming.php#">Grooming</a>
        </li>
       <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="makanan.php">Makanan</a>
        </li><li class="nav-item">
          <a class="nav-link active" aria-current="page" href="vitamin.php">Vitamin</a>   
        </li>
      </ul>
    </div>
  </div>
</nav> 

<div class="container-fluid">
    <div class="row mt-5">
        <div class="col mt-5">
<table class="table table-bordered">
    <h2>Data Pembeli</h2>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Makanan</th>
      <th scope="col">Vitamin</th>
      <th scope="col">Grooming</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
    <tbody>
			<?php 
				$sql = 'SELECT * FROM petshop';
				$data = mysqli_query($conn, $sql);
				$no=(int)1;
				foreach ($data as $rows): ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $rows['makanan'] ?></td>
					<td><?php echo $rows['vitamin'] ?></td>
					<td><?php echo $rows['grooming'] ?></td>
					<td>
						<a href="form_ubah.php?id=<?php echo $rows['id']?>">Ubah</a>
						<a href="hapus.php?id=<?php echo $rows['id']?>">Hapus</a>
					</td>
				</tr>
			<?php endforeach?>
		</tbody>
		</table>
		<a href="form_tambah.php" class="btn btn-secondary">TAMBAH</a>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
  

</body>
</html>