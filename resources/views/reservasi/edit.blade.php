<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Reservasi</title>

    <!-- Link to external CSS file or add styles here -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7fafc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .form-container:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
            color: #4C51BF;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-size: 16px;
            color: #4A5568;
            margin-bottom: 8px;
        }
        input[type="text"], input[type="datetime-local"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #E2E8F0;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus, input[type="datetime-local"]:focus {
            border-color: #4C51BF;
        }
        button {
            background-color: #4C51BF;
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 16px;
            width: 100%;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #434190;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Form Reservasi</h2>
            <form action="{{ route('storeReservasi') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" required>
                </div>

                <div class="form-group">
                    <label for="nomorwa">Nomor WhatsApp</label>
                    <input type="text" name="nomorwa" id="nomorwa" required>
                </div>

                <div class="form-group">
                    <label for="waktu">Waktu Reservasi</label>
                    <input type="datetime-local" name="waktu" id="waktu" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal Reservasi</label>
                    <input type="date" name="tanggal" id="tanggal" required>
                </div>

                <button type="submit">Kirim Reservasi</button>
            </form>
        </div>
    </div>
</body>
</html>
