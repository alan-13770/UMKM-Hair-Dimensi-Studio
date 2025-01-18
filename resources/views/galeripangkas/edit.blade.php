<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Galeri Pangkas</title>
</head>

<body>
    <x-app-layout>
        <div class="max-w-4xl mx-auto py-6">
            <h1 class="text-2xl font-bold mb-4">Edit Galeri Pangkas</h1>
            <form action="{{ route('galeripangkas.update', $galeripangkas->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="jenis_pangkas" class="block text-sm font-medium">Jenis Pangkas</label>
                    <input type="text" name="jenis_pangkas" id="jenis_pangkas" value="{{ $galeripangkas->jenis_pangkas }}" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="penjelasan" class="block text-sm font-medium">Penjelasan</label>
                    <textarea name="penjelasan" id="penjelasan" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ $galeripangkas->penjelasan }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="gambar" class="block text-sm font-medium">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="mt-1 block w-full border-gray-300 rounded-md">
                    @if($galeripangkas->gambar)
                    <img src="{{ asset('storage/' . $galeripangkas->gambar) }}" alt="Gambar saat ini" class="mt-2 w-32 h-32 object-cover">
                    @endif
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
            </form>

        </div>
    </x-app-layout>
</body>

</html>