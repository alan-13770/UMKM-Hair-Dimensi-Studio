<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight">
            {{ __('Reservasi') }}
        </h2>
    </x-slot>

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

                    <!-- Tombol untuk kembali ke dashboard -->
                    <div class="mt-8 text-center">
                        <a href="{{ route('dashboard') }}" class="px-6 py-3 bg-indigo-600 text-white text-xl font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            Kembali ke Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>