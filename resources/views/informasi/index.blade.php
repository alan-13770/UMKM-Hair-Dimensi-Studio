<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Informasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100">

    <!-- Content Section for Services -->
    <div id="service" class="py-20 bg-white text-center">
        <div class="mb-4">
            <a href="{{ route('dashboard') }}" class="inline-block bg-gray-500 text-white px-4 py-2 rounded shadow hover:bg-gray-600">
                Kembali ke Dashboard
            </a>
        </div>
        <h2 class="text-3xl font-bold">Daftar Informasi</h2>

        <div class="max-w-4xl mx-auto py-6">
            <h1 class="text-2xl font-bold mb-6">Daftar Informasi</h1>

            @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
            @endif

            <!-- Tombol untuk menambah informasi -->
            <div class="mb-4">
                <a href="{{ route('informasi.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                    Tambah Informasi
                </a>
            </div>

            <!-- Tabel untuk menampilkan data informasi -->
            <div class="overflow-x-auto">
                <table class="table-auto w-full border-collapse border border-gray-300 bg-white shadow rounded">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Nomor</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Alamat</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Hari</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Jam</th>
                            <th class="border border-gray-300 px-4 py-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($informasi as $index => $item)
                        <tr class="{{ $loop->even ? 'bg-gray-100' : 'bg-white' }}">
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $index + 1 }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $item->email }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $item->nomor }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $item->alamat }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $item->hari }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $item->jam }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <!-- Tombol Edit -->
                                <a href="{{ route('informasi.edit', $item->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                                    Edit
                                </a>

                                <!-- Form untuk Hapus -->
                                <form action="{{ route('informasi.destroy', $item->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-2"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus informasi ini?');">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>