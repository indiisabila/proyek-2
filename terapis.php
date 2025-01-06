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
            background-color: #ffffff;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #e0e0e0;
        }

        .header .back-button {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
            font-weight: 500;
        }

        .header .back-button img {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }

        .header .back-button span {
            font-size: 16px;
            font-weight: 700;
            color: #007bff;
        }

        .container {
            width: 100%;
            max-width: 1100px;
            margin: 40px auto;
            padding: 20px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .team-member {
            text-align: center;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            padding: 25px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .team-member img {
            width: 100%;
            max-width: 180px;
            height: auto;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .team-member h3 {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin: 10px 0 5px;
        }

        .team-member p {
            font-size: 14px;
            color: #555;
            margin: 0;
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="utama.php?page=list" class="back-button">
            <img src="https://cdn.animaapp.com/projects/6757021cdec8e05f06cce034/releases/6757038a191b26897c86e1e7/img/bx-left-arrow-alt-1.svg" alt="Back">
            <span>Aku Bisa</span>
        </a>
    </header>
    <div class="container">
        <div class="team-grid">
            <div class="team-member">
                <img src="gambar/3.jpg" alt="Resy Audina">
                <h3>Resy Audina A. Md. Kes</h3>
                <p>D III Fisioterapi Universitas Abdurrab</p>
            </div>
            <div class="team-member">
                <img src="gambar/4.jpg" alt="Niken Wulansari">
                <h3>Niken Wulansari A. Md. Kes</h3>
                <p>D III Fisioterapi Universitas Abdurrab</p>
            </div>
            <div class="team-member">
                <img src="gambar/5.jpg" alt="Putri Sakinah">
                <h3>Putri Sakinah KS S. Kes</h3>
                <p>S1 Fisioterapi Universitas Muhammadiyah Surakarta</p>
            </div>
            <div class="team-member">
                <img src="gambar/6.jpg" alt="Olivia Mahfudzah">
                <h3>Olivia Mahfudzah A. Md. Kes</h3>
                <p>D III Fisioterapi Universitas Abdurrab</p>
            </div>
        </div>
    </div>
</body>
</html>
