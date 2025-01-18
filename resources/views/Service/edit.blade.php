<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Layanan</title>
</head>
<body>
    <x-app-layout>
        <div class="max-w-4xl mx-auto py-6">
            <h1 class="text-2xl font-bold mb-4">Edit Layanan</h1>
            <form action="{{ route('service.update', $service->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-sm font-medium">Jenis Service</label>
                    <input type="text" name="jenis_service" value="{{ $service->jenis_service }}" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium">Harga</label>
                    <input type="number" name="harga" value="{{ $service->harga }}" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium">Detail</label>
                    <textarea name="detail" class="mt-1 block w-full border-gray-300 rounded-md">{{ $service->detail }}</textarea>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            </form>
        </div>
    </x-app-layout>
</body>
</html>
