<?php
$server   = 'localhost';
$username = 'root';
$password = '';
$database = 'tugasweb2';

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die('Gagal terhubung: ' . mysqli_connect_error());
}

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>
