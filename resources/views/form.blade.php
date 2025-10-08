<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Pesan</title>
    <style>
        body {
            background: #f5f5f0; /* krem muda */
            font-family: 'Poppins', sans-serif;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background: #ffffff;
            padding: 40px 60px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            text-align: center;
        }
        input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-top: 10px;
        }
        button {
            background: #8b7b6f; /* abu kecoklatan */
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 15px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #6f6258;
        }
    </style>
</head>
<body>
    <form action="/submit" method="POST">
        @csrf
        <h2>Kirim Pesan ke Home</h2>
        <input type="text" name="message" placeholder="Tulis pesan kamu..." required>
        <br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
