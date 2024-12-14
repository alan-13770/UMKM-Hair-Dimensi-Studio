<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('pesan_saran.update', $pesanSaran->id) }}">
            @csrf
            @method('PUT')

            <!-- Nama -->
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $pesanSaran->nama) }}"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <x-input-error :messages="$errors->get('nama')" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $pesanSaran->email) }}"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Pesan -->
            <div class="mt-4">
                <label for="pesan" class="block text-sm font-medium text-gray-700">Pesan</label>
                <textarea name="pesan" id="pesan" rows="4"
                    class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('pesan', $pesanSaran->pesan) }}</textarea>
                <x-input-error :messages="$errors->get('pesan')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-primary-button class="mt-4">
                    Simpan Perubahan
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
