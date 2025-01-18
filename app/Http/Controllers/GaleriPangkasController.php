<?php

namespace App\Http\Controllers;

use App\Models\Galeripangkas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class GaleripangkasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galeripangkas = Galeripangkas::all();
        return view('galeripangkas.index', compact('galeripangkas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galeripangkas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Log::info('Memulai proses penyimpanan data Galeri Pangkas.');

            $validated = $request->validate([
                'jenis_pangkas' => 'required|string|max:255',
                'penjelasan' => 'nullable|string',
                'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            Log::info('Validasi berhasil.');

            if ($request->hasFile('gambar')) {
                $imagePath = $request->file('gambar')->store('galeripangkas', 'public');
                $validated['gambar'] = $imagePath;
            }

            Galeripangkas::create($validated);

            Log::info('Data Galeri Pangkas berhasil disimpan.');

            return redirect()->route('galeripangkas.index')->with('success', 'Galeri Pangkas berhasil ditambahkan.');
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan data Galeri Pangkas: ' . $e->getMessage());
            return back()->withErrors('Terjadi kesalahan saat menyimpan data.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeripangkas $galeripangkas)
    {
        return view('galeripangkas.show', compact('galeripangkas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galeripangkas = Galeripangkas::findOrFail($id);
        return view('galeripangkas.edit', compact('galeripangkas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            Log::info('Memulai proses update data Galeri Pangkas.');

            $galeripangkas = Galeripangkas::findOrFail($id);

            $validated = $request->validate([
                'jenis_pangkas' => 'required|string|max:255',
                'penjelasan' => 'nullable|string',
                'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($request->hasFile('gambar')) {
                // Hapus gambar lama jika ada
                if ($galeripangkas->gambar && Storage::disk('public')->exists($galeripangkas->gambar)) {
                    Storage::disk('public')->delete($galeripangkas->gambar);
                }

                $imagePath = $request->file('gambar')->store('galeripangkas', 'public');
                $validated['gambar'] = $imagePath;
            }

            // Update data
            $galeripangkas->update($validated);

            Log::info('Data Galeri Pangkas berhasil diperbarui.');

            return redirect()->route('galeripangkas.index')->with('success', 'Galeri Pangkas berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error('Error saat memperbarui data Galeri Pangkas: ' . $e->getMessage());
            return back()->withErrors('Terjadi kesalahan saat memperbarui data.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Log::info('Memulai proses penghapusan data Galeri Pangkas.');

            $galeripangkas = Galeripangkas::findOrFail($id);

            // Hapus gambar terkait jika ada
            if ($galeripangkas->gambar && Storage::disk('public')->exists($galeripangkas->gambar)) {
                Storage::disk('public')->delete($galeripangkas->gambar);
            } else {
                Log::warning('File gambar tidak ditemukan untuk dihapus: ' . $galeripangkas->gambar);
            }

            // Hapus Galeri Pangkas dari database
            $galeripangkas->delete();

            Log::info('Data Galeri Pangkas berhasil dihapus.');

            return redirect()->route('galeripangkas.index')->with('success', 'Galeri Pangkas berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error('Error saat menghapus data Galeri Pangkas: ' . $e->getMessage());
            return back()->withErrors('Terjadi kesalahan saat menghapus data.');
        }
    }
}
