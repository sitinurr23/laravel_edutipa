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
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 90%;
            max-width: 800px;
            background: #ffffff;
            padding: 40px 50px;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #1a2942; /* navy */
            margin-bottom: 10px;
            font-size: 28px;
            letter-spacing: 0.5px;
        }

        p {
            color: #6c757d; /* abu muda */
            margin-bottom: 25px;
            font-size: 15px;
        }

        .search-container {
            margin-bottom: 25px;
        }

        input[type="text"] {
            padding: 10px 15px;
            width: 80%;
            max-width: 350px;
            border: 1.8px solid #adb5bd;
            border-radius: 8px;
            outline: none;
            font-size: 14px;
            transition: 0.2s;
        }

        input[type="text"]:focus {
            border-color: #1a2942;
            box-shadow: 0 0 5px rgba(26, 41, 66, 0.2);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            background: #f8f9fa;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #dee2e6;
            text-align: left;
        }

        th {
            background: #1a2942; /* navy */
            color: #ffffff;
            text-transform: uppercase;
            font-size: 13px;
            letter-spacing: 0.5px;
        }

        tr:hover {
            background-color: #e9ecef;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 13px;
            color: #adb5bd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Daftar Buku</h1>
        <p>Temukan berbagai buku menarik yang bisa menambah wawasanmu!</p>

        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Cari buku berdasarkan judul atau penulis...">
        </div>

        <table id="bukuTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item['judul'] }}</td>
                        <td>{{ $item['penulis'] }}</td>
                        <td>{{ $item['tahun'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <footer>© 2025 Edutipa | Laravel Project</footer>
    </div>

    <script>
        // Fitur Search
        const searchInput = document.getElementById('searchInput');
        const table = document.getElementById('bukuTable');
        const rows = table.getElementsByTagName('tr');

        searchInput.addEventListener('keyup', function() {
            const filter = searchInput.value.toLowerCase();
            for (let i = 1; i < rows.length; i++) {
                const rowText = rows[i].textContent.toLowerCase();
                rows[i].style.display = rowText.includes(filter) ? '' : 'none';
            }
        });
    </script>
</body>
</html>
