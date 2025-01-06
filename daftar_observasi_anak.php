<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Observasi Anak</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #ffffff;
        }

        .header {
            background-color: #f8f9fa;
            padding: 15px 30px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header img {
            width: 40px;
            height: auto;
            margin-right: 10px;
        }

        .header h1 {
            font-size: 20px;
            font-weight: 500;
            color: #333;
            margin: 0;
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
            margin: 40px auto;
        }

        .image-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .image-section img {
            max-width: 90%;
            border-radius: 8px;
        }

        .form-container {
            flex: 1;
            padding: 20px;
        }

        .form-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #333;
        }

        .form-subtitle {
            font-size: 14px;
            font-weight: 400;
            margin-bottom: 20px;
            color: #555;
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
            justify-content: flex-start;
        }

        .btn {
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #007bff;
            color: #fff;
        }

        .btn:hover {
            background-color: #0056b3;
        }

    </style>
</head>
<body>
    <header class="header">
        <img src="https://via.placeholder.com/40" alt="Icon">
        <h1>Aku Bisa</h1>
    </header>
    <div class="container">
        <div class="image-section">
            <img src="gambar/2.jpg" alt="Observasi Anak">
        </div>
        <div class="form-container">
            <h2 class="form-title">Pendaftaran Observasi Anak</h2>
            <p class="form-subtitle">Mohon isi data dengan benar.</p>
            <form>
                <div class="form-group">
                    <label for="parent-name">Nama Orang Tua</label>
                    <input type="text" id="parent-name" placeholder="Masukkan Nama Orang Tua">
                </div>
                <div class="form-group">
                    <label for="child-name">Nama Lengkap Anak</label>
                    <input type="text" id="child-name" placeholder="Masukkan Nama Lengkap Anak">
                </div>
                <div class="form-group">
                    <label for="phone">No. Telepon</label>
                    <input type="tel" id="phone" placeholder="Masukkan No. Telepon">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Masukkan Email Anda">
                </div>
                <div class="form-group">
                    <label for="date">Isi Tanggal Observasi</label>
                    <input type="date" id="date">
                </div>
                <div class="form-group">
                    <label for="comments">Komentar</label>
                    <input type="text" id="comments" placeholder="Masukkan Komentar">
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
