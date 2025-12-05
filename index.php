<?php include "config.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Projek PHP</title>
</head>
<body>

<h2>Tambah Pelajar</h2>

<form method="POST">
    <input type="text" name="nama" placeholder="Masukkan nama" required>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
// Bila user klik 'Simpan'
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    mysqli_query($conn, "INSERT INTO pelajar (nama) VALUES ('$nama')");
    echo "<p>✔ Data berjaya disimpan!</p>";
}
?>

<hr>

<h3>Senarai Pelajar:</h3>

<?php
$result = mysqli_query($conn, "SELECT * FROM pelajar ORDER BY id DESC");

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id'] . " - " . $row['nama'] . "<br>";
}
?>

</body>
</html>