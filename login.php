<?php
/**
* NIM : 2257401021
* Nama : Sadiyah
* Kelas : MI22A
*/
?>
<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #b92b27, #1565c0);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

table {
    width: 100%;
    border-collapse: collapse;
}

td {
    padding: 10px;
    text-align: left;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #2ecc71;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #27ae60;
}

a {
    display: inline-block;
    margin-top: 10px;
    color: #3498db;
    text-decoration: none;
    font-size: 14px;
}

a:hover {
    text-decoration: underline;
}

h1 {
    text-align: center;
    color: #333;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
        $_SESSION['user'] = $data;
        echo '<script>alert("Selamat datang, ' . $data['nama'] . '"); 
        location.href="index.php";</script>';
    } else {
        echo '<script>alert("Username/password salah.");</script>';
    }
}
?>

<form method="POST">
    <table align="center">
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Login</button></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="daftar.php">Daftar</a></td>
        </tr>
    </table>
</form>

</body>
</html>
