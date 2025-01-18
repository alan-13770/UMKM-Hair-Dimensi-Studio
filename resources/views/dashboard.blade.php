<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg sm:rounded-lg">
                <div class="p-8">
                    <div class="text-center mb-8">
                        <h3 class="text-4xl font-semibold text-indigo-600 mb-4">Welcome to the Admin Dashboard</h3>
                        <p class="text-xl text-gray-600 mb-6">You can manage your website content here.</p>
                    </div>

                    <div class="py-12 bg-gray-50">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white shadow-lg sm:rounded-lg">
                                <div class="p-8">
                                    <div class="text-center mb-8">
                                        <h3 class="text-4xl font-semibold text-indigo-600 mb-4">Daftar Reservasi</h3>
                                        <p class="text-xl text-gray-600 mb-6">Berikut adalah daftar reservasi yang telah dibuat</p>
                                    </div>

                                    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                                        <thead>
                                            <tr>
                                                <th class="py-3 px-4 border-b text-left text-lg text-gray-700">Nama</th>
                                                <th class="py-3 px-4 border-b text-left text-lg text-gray-700">Nomor WhatsApp</th>
                                                <th class="py-3 px-4 border-b text-left text-lg text-gray-700">Jam</th>
                                                <th class="py-3 px-4 border-b text-left text-lg text-gray-700">Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($reservasi as $item)
                                            <tr>
                                                <td class="py-3 px-4 border-b text-lg text-gray-600">{{ $item->nama }}</td>
                                                <td class="py-3 px-4 border-b text-lg text-gray-600">{{ $item->nomorwa }}</td>
                                                <td class="py-3 px-4 border-b text-lg text-gray-600">{{ $item->jam }}</td>
                                                <td class="py-3 px-4 border-b text-lg text-gray-600">{{ $item->tanggal }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                        <!-- Service Index -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('service.index') }}" class="w-full text-center py-6 px-8 bg-indigo-600 text-white rounded-lg shadow-lg transform transition-all hover:scale-105">
                                <h4 class="text-2xl font-semibold">Service Index</h4>
                                <p class="text-lg mt-2">Manage your services here</p>
                            </a>
                        </div>

                        <!-- Hero Index -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('hero.index') }}" class="w-full text-center py-6 px-8 bg-green-600 text-white rounded-lg shadow-lg transform transition-all hover:scale-105">
                                <h4 class="text-2xl font-semibold">Hero Index</h4>
                                <p class="text-lg mt-2">Control the hero section of the homepage</p>
                            </a>
                        </div>

                        <!-- Galeri Pangkas Index -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('galeripangkas.index') }}" class="w-full text-center py-6 px-8 bg-yellow-600 text-white rounded-lg shadow-lg transform transition-all hover:scale-105">
                                <h4 class="text-2xl font-semibold">Galeri Pangkas Index</h4>
                                <p class="text-lg mt-2">Manage your gallery images here</p>
                            </a>
                        </div>

                        <!-- About Us Index -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('aboutus.index') }}" class="w-full text-center py-6 px-8 bg-blue-600 text-white rounded-lg shadow-lg transform transition-all hover:scale-105">
                                <h4 class="text-2xl font-semibold">About Us Index</h4>
                                <p class="text-lg mt-2">Edit your About Us page content</p>
                            </a>
                        </div>

                        <!-- Informasi Index -->
                        <div class="flex justify-center items-center">
                            <a href="{{ route('informasi.index') }}" class="w-full text-center py-6 px-8 bg-red-600 text-white rounded-lg shadow-lg transform transition-all hover:scale-105">
                                <h4 class="text-2xl font-semibold">Informasi Index</h4>
                                <p class="text-lg mt-2">Manage your website's general information</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>