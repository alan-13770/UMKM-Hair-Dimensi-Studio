<x-app-layout>
    <div class="max-w-2xl mx-auto p-4">
        <form method="POST" action="{{ route('pesan_saran.store') }}">
            @csrf
            <input type="text" name="nama" placeholder="Masukkan nama anda"
                class="block w-full mt-4 border-gray-300 rounded-md">{{ old('nama') }}
            <x-input-error :messages="$errors->get('nama')" class="mt-2" />

            <input type="text" name="email" placeholder="Masukkan email Anda"
                class="block w-full mt-4 border-gray-300 rounded-" value="{{ old('email') }}" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <textarea name="pesan" placeholder="Masukkan pesan anda" class="block w-full mt-4 border-gray-300 rounded-md">{{ old('pesan') }}</textarea>
            <x-input-error :messages="$errors->get('pesan')" class="mt-2" />

            <x-primary-button class="mt-4">Kirim Pesan</x-primary-button>
        </form>

        <div class="mt-6">
            @foreach ($pesansaran as $pesan)
                <div class="p-4 mb-4 bg-white rounded shadow">
                    <p>{{ $pesan->pesan }}</p>
                    @if ($pesan->email)
                        <p><strong>email:</strong> {{ $pesan->email }}</p>
                    @endif
                    <p><small>Ditulis oleh: {{ $pesan->nama }}</small></p>
                    <a href="{{ route('pesan_saran.edit', $pesan) }}"
                        class="inline-flex items-center px-4 py-2 bg-blue-500 text-white text-sm font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition">
                        <!-- Ikon Heroicons (Pencil Icon) -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5h2M7 7h10l-1 14H8L7 7z" />
                        </svg>

                            </button>
                        </form>

                        Edit
                    </a>
                    <form action="{{ route('pesan_saran.destroy', $pesan) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition">
                            <!-- Ikon Trash -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-7 7-7-7" />
                            </svg>
                            Delete

                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
