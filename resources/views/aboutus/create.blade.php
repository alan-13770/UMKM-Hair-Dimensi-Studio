<x-app-layout>
    <div class="max-w-4xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Tambah Penjelasan About Us</h1>

        <!-- Menampilkan Error jika ada -->
        @if ($errors->any())
        <div class="bg-red-500 text-white p-4 mb-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('aboutus.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="penjelasan" class="block text-sm font-medium">Penjelasan</label>
                <textarea name="penjelasan" id="penjelasan" class="block w-full border-gray-300 rounded" required>{{ old('penjelasan') }}</textarea>
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </div>
</x-app-layout>