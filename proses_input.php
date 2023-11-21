<?php
// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "2106004_dika"; // Change this to your actual database name

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$no = $_POST['no'];
$nama = $_POST['nama'];
$warna = $_POST['warna'];
$ukuran = $_POST['ukuran'];
$jumlah = $_POST['jumlah'];

// Query untuk menyimpan data ke database
$query = "INSERT INTO jersey (no, nama, warna_kaos, ukuran_kaos, jumlah) 
          VALUES ('$no', '$nama', '$warna', '$ukuran', '$jumlah')";

// Eksekusi query
if ($conn->query($query) === TRUE) {
    echo "Data berhasil disimpan. Silakan kembali ke <a href='index.php'>Formulir</a>.";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
