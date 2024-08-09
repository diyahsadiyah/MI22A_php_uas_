<?php
/**
* NIM : 2257401021
* Nama : Sadiyah
* Kelas : MI22A
*/
?>
<?php
// Koneksi database
include 'koneksi.php';

// Menangkap data dari form
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"]; // Menggunakan hashing untuk password

    // Menginput data ke database
    $sql = "INSERT INTO user (username,password ) VALUES ('$username', '$password')";

    if (mysqli_query($koneksi, $sql)) {
        // Mengalihkan halaman kembali ke halaman pengguna
        header("Location: user.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "Semua field harus diisi!";
}

// Menutup koneksi
mysqli_close($koneksi);
?>
