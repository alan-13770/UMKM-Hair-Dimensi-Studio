<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hero Section</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100">


    <!-- Hero Section Content -->
    <div id="hero" class="py-20 bg-white text-center">
        <div class="mb-4">
            <a href="{{ route('dashboard') }}" class="inline-block bg-gray-500 text-white px-4 py-2 rounded shadow hover:bg-gray-600">
                Kembali ke Dashboard
            </a>
        </div>
        <h2 class="text-3xl font-bold">Hero Section</h2>

        <div class="max-w-4xl mx-auto py-6">
            <h1 class="text-2xl font-bold mb-6">Daftar Hero Section</h1>

            @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
            @endif

            <!-- Tombol untuk menambah Hero Section -->
            <div class="mb-4">
                <a href="{{ route('hero.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                    Tambah Hero Section
                </a>
            </div>

            <!-- Tabel untuk menampilkan data Hero Section -->
            <div class="overflow-x-auto">
                <table class="table-auto w-full border-collapse border border-gray-300 bg-white shadow rounded">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Judul</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Penjelasan</th>
                            <th class="border border-gray-300 px-4 py-2 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($heroSection as $index => $item)
                        <tr class="{{ $loop->even ? 'bg-gray-100' : 'bg-white' }}">
                            <td class="border border-gray-300 px-4 py-2 text-center">{{ $index + 1 }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $item->judul }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $item->penjelasan }}</td>
                            <td class="border border-gray-300 px-4 py-2 text-center">
                                <!-- Tombol Edit -->
                                <a href="{{ route('hero.edit', $item->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                                    Edit
                                </a>

                                <!-- Form untuk Hapus -->
                                <form action="{{ route('hero.destroy', $item->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-2"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
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

    <!-- Script for Mobile Menu -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>