<?php
$servername = "localhost";  
$username = "root";         
$password = "root";         
$dbname = "akademik";       
$port = "8889";            

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$Nama = $_POST['Nama'];
$Email = $_POST['Email'];
$Umur = $_POST['Umur'];

// Persiapkan query untuk memasukkan data ke database
$stmt = $conn->prepare("INSERT INTO users (Nama, Email, Umur) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $Nama, $Email, $Umur); // "sss" berarti semua parameter adalah string

// jalankan query
if ($stmt->execute()) {
    // Redirect ke halaman collected
    header("Location: collected.html"); // Halaman yang menampilkan pesan "Collected!"
} else {
    echo "Error: " . $stmt->error;
}

// Tutup statement dan koneksi
$stmt->close();
$conn->close();
?>
