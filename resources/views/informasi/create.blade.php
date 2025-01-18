<!-- resources/views/informasi/create.blade.php -->

<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Informasi</h1>
        <form action="{{ route('informasi.store') }}" method="POST">
            @csrf

            <!-- Input untuk Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md" required>
            </div>

            <!-- Input untuk Nomor -->
            <div class="mb-4">
                <label for="nomor" class="block text-sm font-medium">Nomor</label>
                <input type="text" name="nomor" id="nomor" class="mt-1 block w-full border-gray-300 rounded-md" required>
            </div>

            <!-- Input untuk Alamat -->
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="mt-1 block w-full border-gray-300 rounded-md" required>
            </div>

            <!-- Input untuk Hari -->
            <div class="mb-4">
                <label for="hari" class="block text-sm font-medium">Hari</label>
                <input type="text" name="hari" id="hari" class="mt-1 block w-full border-gray-300 rounded-md" required>
            </div>

            <!-- Input untuk Jam -->
            <div class="mb-4">
                <label for="jam" class="block text-sm font-medium">Jam</label>
                <input type="text" name="jam" id="jam" class="mt-1 block w-full border-gray-300 rounded-md" required>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>