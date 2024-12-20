<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Layanan</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
</head>
<body>
    <x-app-layout>
        <div class="max-w-4xl py-6 mx-auto">
            <h1 class="mb-4 text-2xl font-bold">Tambah Layanan</h1>

            @if ($errors->any())
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Ada yang salah!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Sukses!</strong> {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('service.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium">Jenis Layanan</label>
                    <input type="text" name="jenis_service" class="block w-full mt-1 border-gray-300 rounded-md" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Detail</label>
                    <textarea name="detail" id="editor" rows="5" class="block w-full mt-1 border-gray-300 rounded-md" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Harga</label>
                    <input type="text" name="harga" class="block w-full mt-1 border-gray-300 rounded-md" required />
                </div>
                <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Simpan</button>
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