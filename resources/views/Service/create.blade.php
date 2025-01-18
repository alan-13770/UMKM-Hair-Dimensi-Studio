<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Service</title>
</head>
<body>
    <x-app-layout>
        <div class="max-w-4xl mx-auto py-6">
            <h1 class="text-2xl font-bold mb-4">Tambah Layanan</h1>
            <form action="{{ route('service.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium">Jenis Service</label>
                    <input type="text" name="jenis_service" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium">Harga</label>
                    <input type="number" name="harga" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium">Detail</label>
                    <textarea name="detail" class="mt-1 block w-full border-gray-300 rounded-md"></textarea>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            </form>
        </div>
    </x-app-layout>
</body>
</html>
