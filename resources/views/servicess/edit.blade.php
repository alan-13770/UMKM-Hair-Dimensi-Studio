<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Layanan</h1>
        <form action="{{ route('service.update', $service->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-medium">Nama Layanan</label>
                <input type="text" name="nama" value="{{ $service->nama }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Harga</label>
                <input type="text" name="harga" value="{{ $service->harga }}" class="mt-1 block w-full border-gray-300 rounded-md" step="0.01" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Jenis Layanan</label>
                <input type="text" name="layanan" value="{{ $service->layanan }}" class="mt-1 block w-full border-gray-300 rounded-md" required />
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar</label>
                <input type="file" name="gambar" class="mt-1 block w-full" accept="image/*" />
                @if ($service->gambar)
                    <img src="{{ Storage::url($service->gambar) }}" class="h-48 mt-2" alt="Gambar Berita" />
                @endif
            </div>


            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
