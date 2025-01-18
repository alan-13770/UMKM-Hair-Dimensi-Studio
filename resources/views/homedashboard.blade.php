<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>


    <!-- Navbar -->
    <nav class="bg-blue-500 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Brand Name -->
                <div class="text-lg font-bold">
                    <a href="#" class="hover:text-blue-300">MyWebsite</a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex space-x-6">
                    <a href="#hero" class="hover:text-blue-300">Hero Section</a>
                    <a href="#service" class="hover:text-blue-300">Service</a>
                    <a href="#testimoni" class="hover:text-blue-300">Testimoni</a>
                    <a href="#aboutus" class="hover:text-blue-300">About Us</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="menu-toggle" class="text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-blue-500">
            <a href="#hero" class="block px-4 py-2 hover:bg-blue-600">Hero Section</a>
            <a href="#service" class="block px-4 py-2 hover:bg-blue-600">Service</a>
            <a href="#testimoni" class="block px-4 py-2 hover:bg-blue-600">Testimoni</a>
            <a href="#aboutus" class="block px-4 py-2 hover:bg-blue-600">About Us</a>
        </div>
    </nav>

    <!-- Content Sections -->

    <div id="aboutus" class="py-20 bg-white text-center">
        <h2 class="text-3xl font-bold">About Us</h2>

        <body class="bg-gray-100">
            <div class="max-w-4xl mx-auto py-6">
                <h1 class="text-2xl font-bold mb-6">Daftar About Us</h1>

                @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
                @endif

                <!-- Tombol untuk menambah About Us -->
                <div class="mb-4">
                    <a href="{{ route('aboutus.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600">
                        Tambah About Us
                    </a>
                </div>

                <!-- Tabel untuk menampilkan data About Us -->
                <div class="overflow-x-auto">
                    <table class="table-auto w-full border-collapse border border-gray-300 bg-white shadow rounded">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Penjelasan</th>
                                <th class="border border-gray-300 px-4 py-2 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aboutus as $index => $item)
                            <tr class="{{ $loop->even ? 'bg-gray-100' : 'bg-white' }}">
                                <td class="border border-gray-300 px-4 py-2 text-center">{{ $index + 1 }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $item->penjelasan }}</td>
                                <td class="border border-gray-300 px-4 py-2 text-center">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('aboutus.edit', $item->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
                                        Edit
                                    </a>

                                    <!-- Form untuk Hapus -->
                                    <form action="{{ route('aboutus.destroy', $item->id) }}" method="POST" class="inline-block">
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