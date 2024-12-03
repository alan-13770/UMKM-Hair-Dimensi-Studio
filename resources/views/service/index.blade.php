<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Layanan</h1>

        @if (session('success'))
            <div class="bg-green-500 text-white p-3 mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-500 text-white p-3 mb-4">
                {{ session('error') }}
            </div>
        @endif

        <a href="{{ route('service.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded mb-4">
            Tambah Layanan
        </a>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($services as $service)
                <div class="bg-white shadow-md rounded-lg p-4">
                    <h2 class="text-lg font-bold">{{ $service->nama }}</h2>
                    <p class="text-gray-600 mt-2">Jenis: {{ $service->layanan }}</p>
                    <p class="text-gray-600 mt-2">Harga: Rp {{ number_format($service->harga, 0, ',', '.') }}</p>

                    <p class="text-gray-600 mt-2">{!! Str::limit($service->deskripsi, 100) !!}</p>

                    <div class="mt-4">
                        <a href="{{ route('service.edit', $service->id) }}" class="text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('service.destroy', $service->id) }}" method="POST" class="inline"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus layanan ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline ml-2">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
