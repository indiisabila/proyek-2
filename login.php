<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aku Bisa</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            max-width: 1100px;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .logo img {
            max-width: 80%;
            height: auto;
        }

        .form-container {
            flex: 1;
            padding: 20px;
        }

        .form-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 14px;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .form-group input:focus {
            border-color: #007bff;
        }

        .form-actions {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            gap: 15px;
        }

        .btn {
            flex: 1;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            font-family: 'Poppins', Arial, sans-serif;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary:hover {
            background-color: #495057;
        }

        .btn a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
<?php
include "config.php";
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = md5($_POST['password']); 

    // Query untuk mengecek email dan password
    $query = "SELECT * FROM akun WHERE email='$email' AND password='$password'";
    $login = mysqli_query($koneksi, $query);
    $hasil = mysqli_num_rows($login);

    if ($hasil > 0) {
        session_start();
        $r = mysqli_fetch_assoc($login);
        $_SESSION["email"] = $r["email"];
        $_SESSION["nama"] = $r["nama"];

        echo "<script>
            alert('Login Berhasil, " . $r["nama"] . "!');
            window.location.href='utama.php?page=list';
        </script>";
    } else {
        echo "<script>
            alert('Username atau Password salah!');
            window.location.href='utama.php?page=login';
        </script>";
    }
}
?>

<div class="container">
        <div class="logo">
            <img src="gambar/logo akubisa.jpg" alt="Logo Aku Bisa">
        </div>
        <div class="form-container">
            <h2 class="form-title">Login</h2>
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan Email Anda" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                </div>
                <div class="form-actions">
                    <button type="submit" name="submit" class="btn btn-primary">Masuk</button>
                    <button type="button" class="btn btn-secondary">
                        <a href="utama.php?page=register">Belum Punya Akun?</a>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

