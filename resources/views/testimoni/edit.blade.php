<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <x-app-layout>
        <div class="max-w-4xl mx-auto py-6">
            <h1 class="text-2xl font-bold mb-4">Edit Testimoni</h1>
            <form action="{{ route('testimoni.update', $testimoni->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block text-sm font-medium">Nama</label>
                    <input type="text" name="nama" value="{{ old('nama', $testimoni->nama) }}" class="mt-1 block w-full border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium">Pesan/Saran</label>
                    <textarea name="pesansaran" class="mt-1 block w-full border-gray-300 rounded-md" required>{{ old('pesansaran', $testimoni->pesansaran) }}</textarea> <!-- Ganti pesan_saran menjadi pesansaran -->
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium">Gambar (Opsional)</label>
                    <input type="file" name="gambar" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md">
                    @if($testimoni->gambar)
                    <img src="{{ asset('storage/' . $testimoni->gambar) }}" alt="Gambar Testimoni" class="mt-2" width="150">
                    @endif
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Testimoni</button>
            </form>

        </div>

        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    </x-app-layout>

</body>

</html>