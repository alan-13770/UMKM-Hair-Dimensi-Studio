<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroSection = HeroSection::all();
        return view('hero.index', compact('heroSection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Log::info('Memulai proses penyimpanan data.');

            $validated = $request->validate([
                'judul' => 'required|string|max:255',
                'penjelasan' => 'required|string|max:500',
                'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            Log::info('Validasi berhasil.');

            if ($request->hasFile('gambar')) {
                $imagePath = $request->file('gambar')->store('hero_images', 'public');
                $validated['gambar'] = $imagePath;
            }

            HeroSection::create($validated);

            Log::info('Data berhasil disimpan.');

            return redirect()->route('hero.index')->with('success', 'Hero Section berhasil ditambahkan');
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan data: ' . $e->getMessage());
            return back()->withErrors('Terjadi kesalahan saat menyimpan data.');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(HeroSection $heroSection)
    {
        return view('hero.show', compact('heroSection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $heroSection = HeroSection::findOrFail($id);
        return view('hero.edit', compact('heroSection'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $heroSection = HeroSection::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'penjelasan' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $heroSection->update([
            'judul' => $validated['judul'],
            'penjelasan' => $validated['penjelasan'],
            'gambar' => $request->file('gambar') ? $request->file('gambar')->store('public/hero') : $heroSection->gambar,
        ]);

        return redirect()->route('hero.index')->with('success', 'Hero Section updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Cari Hero Section berdasarkan ID
        $heroSection = HeroSection::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($heroSection->gambar) {
            // Path relatif dalam storage public
            $path = $heroSection->gambar;

            // Periksa apakah file ada sebelum dihapus
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            } else {
                Log::warning('File tidak ditemukan untuk dihapus: ' . $path);
            }
        }

        // Hapus Hero Section dari database
        $heroSection->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('hero.index')->with('success', 'Hero Section berhasil dihapus');
    }
}
