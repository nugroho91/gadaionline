<?php
// Mengambil data dari formulir kontak
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Menyiapkan koneksi ke database
$servername = "localhost"; // Ganti sesuai dengan pengaturan server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "pgigaol"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Menyimpan data ke dalam database
$sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully.";  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
