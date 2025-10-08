<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <style>
        body {
            background: #f8f6f1;
            font-family: 'Poppins', sans-serif;
            color: #3b3b3b;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            background: #fff;
            padding: 50px;
            border-radius: 18px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.1);
            text-align: center;
            width: 500px;
        }
        h1 {
            color: #5c5047;
            margin-bottom: 20px;
        }
        .message {
            background: #f3ede7;
            border: 1px solid #d6ccc2;
            border-radius: 10px;
            padding: 15px 20px;
            margin-top: 10px;
        }
        a {
            display: inline-block;
            margin-top: 25px;
            text-decoration: none;
            background: #8b7b6f;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            transition: 0.3s;
        }
        a:hover {
            background: #6f6258;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Selamat Datang di Halaman Home</h1>

        @if(isset($message))
            <div class="message">
                <strong>Pesan:</strong> {{ $message }}
            </div>
        @else
            <p>Belum ada pesan yang dikirim.</p>
        @endif

        <a href="/form">Kirim Pesan Baru</a>
    </div>
</body>
</html>
