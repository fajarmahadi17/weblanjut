<?php
require 'koneksi.php';
$id = $_REQUEST['id'];
$sql = mysqli_query($conn, "DELETE FROM petshop WHERE id='$id'");
header("Location:index.php");
?>