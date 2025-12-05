<?php
$conn = mysqli_connect("localhost", "root", "", "projekdb");

if (!$conn) {
    die("Gagal sambung database: " . mysqli_connect_error());
}
?>