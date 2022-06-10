<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>UBAH TAMBAH PEMBELI</title>
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

	<div class="container-fluid">
        <div class="row mt-5">
			<h1>Form Tambah</h1>
            <div class="col mt-5">
                <figure class="text-center">
                    <form action="simpan.php" method="POST" class="row g-3">
  						<div class="col-auto">
    						<label for="" class="visually-hidden">Makanan</label>
    						<input type="text" name="txtmakanan" placeholder="Makanan" required="true" class="form-control" placeholder="Makanan">
  						</div>
  						<div class="col-auto">
    						<label for=""  class="visually-hidden">Vitamin</label>
    						<input type="text" name="txtvitamin" placeholder="Vitamin" required="true" class="form-control" placeholder="Vitamin">
  						</div>
  						<div class="col-auto">
    						<label for=""  class="visually-hidden">Grooming</label>
    						<input type="text" name="txtgrooming" placeholder="Grooming" required="true" class="form-control" placeholder="Grooming">
  						</div>
  						<div class="col-auto">
    						<button type="submit" class="btn btn-secondary mb-3">SIMPAN</button>
  						</div>
					</form>
                </figure>
            </div>
           
        </div>
    </div>



</body>
</html>