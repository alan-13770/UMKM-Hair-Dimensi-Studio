<x-app-layout>
    <div class="max-w-4xl py-6 mx-auto">
        <h1 class="mb-4 text-2xl font-bold">Daftar Layanan</h1>

        @if (session('success'))
            <div class="p-3 mb-4 text-white bg-green-500">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="p-3 mb-4 text-white bg-red-500">
                {{ session('error') }}
            </div>
        @endif

        <a href="{{ route('service.create') }}" class="inline-block px-4 py-2 mb-4 text-white bg-blue-500 rounded">
            Tambahkan Layanan
        </a>

        <div class="overflow-hidden bg-white rounded-lg shadow-md">
            <table class="w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 text-left border">Jenis Layanan</th>
                        <th class="px-4 py-2 text-left border">Detail</th>
                        <th class="px-4 py-2 text-left border">Harga</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($service as $services)
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2 border">{{ $services->jenis_service }}</td>
                            <td class="px-4 py-2 border">{!! Str::limit($services->detail, 100) !!}</td>
                            <td class="px-4 py-2 border">{{ $services->harga }}</td>
                            <td class="px-4 py-2 border">
                                <a href="{{ route('service.edit', $services->id) }}" class="text-blue-500 hover:underline">Edit</a>
                                <form action="{{ route('service.destroy', $services->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-2 text-red-500 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>