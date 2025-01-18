<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Galeri Pangkas</h1>
        <form action="{{ route('galeripangkas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Jenis Pangkas</label>
                <input type="text" name="jenis_pangkas" class="block w-full border-gray-300 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Penjelasan</label>
                <textarea name="penjelasan" class="block w-full border-gray-300 rounded"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" class="block w-full">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>