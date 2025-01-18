<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Hero Section</title>
</head>

<body>
    <x-app-layout>
        <div class="max-w-4xl mx-auto py-6">
            <h1 class="text-2xl font-bold mb-4">Tambah Hero Section</h1>
            <form action="{{ route('hero.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-medium">Judul</label>
                    <input type="text" name="judul" value="{{ old('judul') }}" class="mt-1 block w-full border-gray-300 rounded-md" required>
                    @error('judul')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium">Penjelasan</label>
                    <textarea name="penjelasan" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ old('penjelasan') }}</textarea>
                    @error('penjelasan')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium">Gambar (Opsional)</label>
                    <input type="file" name="gambar" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md">
                    @error('gambar')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Hero Section</button>
            </form>
        </div>
    </x-app-layout>
</body>

</html>