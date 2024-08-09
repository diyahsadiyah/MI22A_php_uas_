<?php
/**
* NIM : 2257401021
* Nama : Sadiyah
* Kelas : MI22A
*/
?>
<?php
// Memulai sesi
session_start();

// Koneksi database
include 'koneksi.php';

// Menangkap data dari form
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    
    if ($username == '' || $password == '') {
        $err = "<li>Silakan masukkan semua data yang diperlukan.</li>";
    } else {
        // Cek apakah username sudah ada
        $sql1 = "SELECT * FROM user WHERE username = '$username'";
        $q1 = mysqli_query($koneksi, $sql1);
        $r1 = mysqli_fetch_array($q1);

        if ($r1['username'] != '') {
            $err .= "<li>Username <b>$username</b> sudah terdaftar.</li>";
        } else {
            // Insert data ke database
            $sql2 = "INSERT INTO user (username, password ) VALUES ('$username', '".md5($password)."')";
            $q2 = mysqli_query($koneksi, $sql2);

            if ($q2) {
                $_SESSION['session_username'] = $username;
                header("Location: index.php");
                exit();
            } else {
                $err .= "<li>Registrasi gagal, silakan coba lagi.</li>";
            }
        }
    }
}
// Menutup koneksi
mysqli_close($koneksi);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="register-container">
    <h2>Register</h2>
    <form method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        
        <button type="submit" name="register" class="btn">Register</button>
    </form>
</div>
</body>
</html>
