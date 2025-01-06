<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Aku Bisa</title>
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
    include 'config.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'] ?? '';
        $email = $_POST['email'] ?? '';
        $no_telp = $_POST['no_telp'] ?? '';
        $password = $_POST['password'] ?? '';
        $konfirmasi_password = $_POST['konfirmasi_password'] ?? '';

        // Validasi password dan konfirmasi password
        if ($password !== $konfirmasi_password) {
            echo '<script>alert("Password dan Konfirmasi Password tidak cocok!");</script>';
        } else {
            // Hash password
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Cek apakah email sudah terdaftar
            $cek = mysqli_query($koneksi, "SELECT * FROM akun WHERE email='$email'");
            if (mysqli_num_rows($cek) > 0) {
                echo '<script>alert("Email sudah terdaftar!");</script>';
            } else {
                // Simpan data ke database
                $sql = mysqli_query($koneksi, "INSERT INTO akun(nama, email, no_telp, password, konfirmasi_password) VALUES('$nama', '$email', '$no_telp', '$hashed_password', '$konfirmasi_password')");
                if ($sql) {
                    echo '<script>alert("Registrasi berhasil! Silakan login."); document.location="utama.php?page=login";</script>';
                } else {
                    echo '<script>alert("Gagal melakukan registrasi!");</script>';
                }
            }
        }
    }
    ?>

    <div class="container">
        <div class="logo">
            <img src="gambar/logo akubisa.jpg" alt="Logo Aku Bisa">
        </div>
        <div class="form-container">
            <h2 class="form-title">Register</h2>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" placeholder="Masukkan Email Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'enter your email'" class="form-control" required type="email" style="text-transform: none;">
                </div>
                <div class="form-group">
                <label for="no_telp">No. Telepon</label>
                <input name="no_telp" placeholder="Masukkan No. Telepon Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone number'" class="common-input mb-20 form-control" pattern="[0-9]+" required type="text" inputmode="numeric"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                            </div>   
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Buat Password" required>
                </div>
                <div class="form-group">
                    <label for="konfirmasi_password">Konfirmasi Password</label>
                    <input type="password" id="konfirmasi_password" name="konfirmasi_password" placeholder="Konfirmasi Password" required>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                    <button type="button" class="btn btn-secondary">
                        <a href="utama.php?page=login">Sudah Punya Akun?</a>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
