<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Layanan</h1>

        @if($errors->any())
            <div class="bg-red-600 text-white p-3 mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('service.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-medium">Nama Layanan</label>
                <input type="text" name="nama" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Jenis Layanan</label>
                <input type="text" name="layanan" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Harga</label>
                <input type="number" name="harga" class="mt-1 block w-full border-gray-300 rounded-md" step="0.01" required />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium">Tanggal Dibuat</label>
                <input type="text" name="created_at" class="mt-1 block w-full border-gray-300 rounded-md" value="{{ now()->toDateTimeString() }}" readonly />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Tanggal Terakhir Diperbarui</label>
                <input type="text" name="updated_at" class="mt-1 block w-full border-gray-300 rounded-md" value="{{ now()->toDateTimeString() }}" readonly />
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>
