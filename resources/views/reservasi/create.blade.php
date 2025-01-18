<!-- resources/views/reservasi/create.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-semibold text-center mb-6">Form Reservasi</h1>
        <form action="{{ route('storeReservasi') }}" method="POST" class="bg-white p-6 rounded-lg shadow-xl">
            @csrf
            <div class="mb-4">
                <label for="nama" class="text-lg">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control mt-2 p-3 border border-gray-300 rounded-lg w-full" required>
            </div>

            <div class="mb-4">
                <label for="nomorwa" class="text-lg">Nomor WhatsApp</label>
                <input type="text" name="nomorwa" id="nomorwa" class="form-control mt-2 p-3 border border-gray-300 rounded-lg w-full" required>
            </div>

            <div class="mb-4">
                <label for="jam" class="text-lg">Jam</label>
                <input type="text" name="jam" id="jam" placeholder="Masukkan Jam (contoh: 14:00)" class="form-control mt-2 p-3 border border-gray-300 rounded-lg w-full" required>
            </div>

            <div class="mb-4">
                <label for="tanggal" class="text-lg">Tanggal</label>
                <input type="text" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal (contoh: 2025-01-20)" class="form-control mt-2 p-3 border border-gray-300 rounded-lg w-full" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-700 w-full">Kirim Reservasi</button>
        </form>
    </div>
</body>

</html>