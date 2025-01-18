<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Testimoni</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* CSS tambahan untuk desain */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f3f4f6;
        }
        .container {
            margin-top: 50px;
        }
        .form-title {
            font-size: 24px;
            font-weight: bold;
            color: #4a4a4a;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: 600;
            color: #4a4a4a;
        }
        .btn-submit {
            background-color: #4f46e5;
            color: white;
            padding: 15px;
            width: 100%;
            border-radius: 8px;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #4338ca;
        }
    </style>
</head>
<body>
    <div class="container mx-auto">
        <form action="{{ route('storeTestimoni') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-xl max-w-lg mx-auto mt-10 transform transition duration-500 hover:scale-105 hover:shadow-2xl">
            @csrf
            <h2 class="form-title">Silahkan Berikan Pesan dan Saran Anda untuk Kami</h2>

            <div class="form-group mb-4">
                <label for="nama" class="text-lg font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control mt-2 p-3 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="form-group mb-4">
                <label for="pesansaran" class="text-lg font-medium text-gray-700">Pesan atau Saran</label>
                <textarea name="pesansaran" id="pesansaran" class="form-control mt-2 p-3 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-indigo-500" rows="4" required></textarea>
            </div>

            <div class="form-group mb-4">
                <label for="gambar" class="text-lg font-medium text-gray-700">Upload Gambar (Optional)</label>
                <input type="file" name="gambar" id="gambar" class="form-control mt-2 p-3 border border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>

            <button type="submit" class="btn-submit hover:bg-indigo-700">
                Kirim Testimoni
            </button>
        </form>
    </div>
</body>
</html>
