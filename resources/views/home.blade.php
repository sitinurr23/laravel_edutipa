<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Edutipa</title>

    <style>
        /* Reset & Font */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", "Segoe UI", sans-serif;
        }

        body {
            background-color: #f4f6f9;
            color: #1e293b;
        }

        header {
            background-color: #2563eb;
            color: #fff;
            padding: 18px 60px;
            text-align: left;
            font-size: 20px;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 100px);
            padding: 40px 20px;
        }

        .content {
            background: #fff;
            padding: 40px 60px;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            width: 600px;
            animation: fadeIn 0.8s ease;
        }

        h1 {
            font-size: 26px;
            font-weight: 600;
            color: #1e3a8a;
            margin-bottom: 15px;
        }

        p {
            font-size: 15px;
            color: #475569;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            background: #2563eb;
            color: #fff;
            text-decoration: none;
            padding: 12px 28px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }

        footer {
            text-align: center;
            padding: 15px;
            background: #f1f5f9;
            color: #64748b;
            font-size: 13px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <header>Edutipa — Sistem Informasi Pembelajaran</header>

    <main>
        <div class="content">
            <h1>Selamat Datang</h1>
            <p>
                Aplikasi ini dikembangkan menggunakan <strong>Laravel</strong> sebagai bagian dari proyek pembelajaran.
                Tujuannya adalah untuk mempermudah pengelolaan data, administrasi, dan proses belajar mengajar secara digital.
            </p>
            <a href="/" class="btn">Masuk ke Halaman Utama</a>
        </div>
    </main>

    <footer>© 2025 Edutipa | Dibuat oleh Siti Nur, Siswa PKL</footer>

</body>
</html>
