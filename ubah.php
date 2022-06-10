<?php require 'koneksi.php';
$data = array(
	'makanan'  => $_POST['txtmakanan'],
	'vitamin' => $_POST['txtvitamin'],
    'grooming' => $_POST['txtgrooming'],
);
$where = $_POST['txtid'];
$cols = array();

foreach($data as $key=>$val) {
	$cols[] = "$key = '$val'";
}

$sql = "UPDATE petshop SET ". implode(',', $cols). "WHERE id=".$where;
mysqli_query($conn,$sql);
if ($sql) {
   echo 'Data berhasil diubah <br/><a href="index.php">Kembali</a>';
} else {
   echo 'Error cuyy: ' . $sql . '<br>' . mysqli_error($conn);
}

mysqli_close($conn);
?>