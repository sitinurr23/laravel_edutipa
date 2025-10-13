<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku | Edutipa</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #e9ecef, #f8f9fa);
            color: #2c3e50;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            width: 90%;
            max-width: 500px;
            background: #fff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        h2 { text-align: center; color: #1a2942; margin-bottom: 20px; }
        label { display: block; margin-top: 10px; font-weight: 500; }
        input, textarea {
            width: 100%; padding: 10px;
            border: 1px solid #adb5bd; border-radius: 8px;
            margin-top: 5px;
        }
        button {
            margin-top: 20px; width: 100%;
            background-color: #1a2942; color: #fff;
            border: none; padding: 10px;
            border-radius: 8px;
            cursor: pointer;
        }
        button:hover { background-color: #16233a; }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Edit Buku</h2>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Judul</label>
            <input type="text" name="judul" value="{{ $book->judul }}" required>

            <label>Penulis</label>
            <input type="text" name="penulis" value="{{ $book->penulis }}" required>

            <label>Tahun</label>
            <input type="number" name="tahun" value="{{ $book->tahun }}" required>

            <label>Kategori</label>
            <input type="text" name="kategori" value="{{ $book->kategori }}" required>

            <label>Deskripsi</label>
            <textarea name="deskripsi" rows="3">{{ $book->deskripsi }}</textarea>

            <button type="submit">Update Buku</button>
        </form>
    </div>
</body>
</html>
