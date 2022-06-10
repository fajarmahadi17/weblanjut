 <?php 
require 'koneksi.php'; 
$id = $_REQUEST['id'];
$sql = "SELECT * FROM petshop WHERE id='$id'";
$result = mysqli_query($conn,$sql);
foreach ($result as $rows) {
	$id   = $rows['id'];
	$makanan  = $rows['makanan'];
	$vitamin = $rows['vitamin'];
	$grooming = $rows['grooming'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UBAH DATA PEMBELI</title>
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
	

<!-- form ubah bs -->
<div class="container-fluid">
        <div class="row mt-5">
			<h1>Form Ubah</h1>
            <div class="col mt-5">
                <figure class="text-center">
                    <form action="ubah.php" method="POST" class="row g-3">
						<input type="hidden" name="txtid" value="<?php echo $id?>">
  						<div class="col-auto">
    						<label for="inputPassword2" class="visually-hidden">Makanan</label>
    						<input type="text" name="txtmakanan" value="<?php echo $makanan ?>" class="form-control"  placeholder="Makanan">
  						</div>
  						<div class="col-auto">
    						<label for="inputPassword2"  class="visually-hidden">Vitamin</label>
    						<input type="text" class="form-control" name="txtvitamin" value="<?php echo $vitamin ?>" placeholder="Vitamin">
  						</div>
  						<div class="col-auto">
    						<label for="inputPassword2"  class="visually-hidden">Grooming</label>
    						<input type="text" class="form-control" name="txtgrooming" value="<?php echo $grooming ?>" placeholder="Grooming">
  						</div>
  						<div class="col-auto">
    						<button type="submit" class="btn btn-secondary mb-3">UBAH</button>
  						</div>
					</form>
                </figure>
            </div>
           
        </div>
    </div>
</body>
</html>






