<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku | Edutipa</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #e9ecef, #f8f9fa);
            color: #2c3e50;
            min-height: 100vh;
            padding: 30px;
        }
        .container {
            width: 90%;
            max-width: 900px;
            margin: auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #1a2942;
            text-align: center;
            margin-bottom: 20px;
        }
        a {
            text-decoration: none;
        }
        .btn {
            padding: 8px 14px;
            border-radius: 8px;
            border: none;
            color: #fff;
            background-color: #1a2942;
            transition: 0.2s;
            cursor: pointer;
        }
        .btn:hover { background-color: #16233a; }
        .btn-edit { background-color: #28a745; }
        .btn-delete { background-color: #dc3545; }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
            text-align: left;
        }
        th {
            background: #1a2942;
            color: #fff;
        }
        .message {
            background-color: #d1e7dd;
            color: #0f5132;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        td:last-child {
            white-space: nowrap;
            text-align: center;
        }
        .btn + form {
            display: inline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Daftar Buku</h1>

        @if (session('success'))
            <div class="message">{{ session('success') }}</div>
        @endif

        <a href="{{ route('books.create') }}" class="btn">+ Tambah Buku</a>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $index => $book)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $book->judul }}</td>
                        <td>{{ $book->penulis }}</td>
                        <td>{{ $book->tahun }}</td>
                        <td>{{ $book->kategori }}</td>
                        <td>{{ $book->deskripsi }}</td>
                        <td>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-edit">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
