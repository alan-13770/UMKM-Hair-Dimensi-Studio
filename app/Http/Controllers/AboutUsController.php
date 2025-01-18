<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutus = AboutUs::all();
        return view('aboutus.index', compact('aboutus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aboutus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Log::info('Memulai proses penyimpanan data About Us.');

            // Validasi input
            $validated = $request->validate([
                'penjelasan' => 'required|string',
            ]);

            // Debug log untuk melihat data yang diterima
            Log::info('Data yang diterima: ', $validated);

            // Simpan data
            AboutUs::create($validated);

            Log::info('Data About Us berhasil disimpan.');

            return redirect()->route('aboutus.index')->with('success', 'Berhasil Dikirim');
        } catch (\Exception $e) {
            Log::error('Error saat menyimpan data About Us: ' . $e->getMessage());
            return back()->withErrors('Terjadi kesalahan saat menyimpan data.');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(AboutUs $aboutus)
    {
        return view('aboutus.show', compact('aboutus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            Log::info('Memulai proses pengeditan data About Us.');

            $aboutus = AboutUs::findOrFail($id);

            return view('aboutus.edit', compact('aboutus'));
        } catch (\Exception $e) {
            Log::error('Error saat membuka halaman edit About Us: ' . $e->getMessage());
            return redirect()->route('aboutus.index')->withErrors('Data tidak ditemukan.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            Log::info('Memulai proses update data About Us.');

            $request->validate([
                'penjelasan' => 'required|string',
            ]);

            // Cari data yang akan diperbarui
            $aboutus = AboutUs::findOrFail($id);

            // Perbarui data
            $aboutus->penjelasan = $request->penjelasan;
            $aboutus->save();

            Log::info('Data About Us berhasil diperbarui.');

            return redirect()->route('aboutus.index')->with('success', 'Data berhasil diperbarui.');
        } catch (\Exception $e) {
            Log::error('Error saat memperbarui data About Us: ' . $e->getMessage());
            return back()->withErrors('Terjadi kesalahan saat memperbarui data.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Log::info('Memulai proses penghapusan data About Us.');

            $aboutus = AboutUs::findOrFail($id);

            // Hapus data
            $aboutus->delete();

            Log::info('Data About Us berhasil dihapus.');

            return redirect()->route('aboutus.index')->with('success', 'Data berhasil dihapus!');
        } catch (\Exception $e) {
            Log::error('Error saat menghapus data About Us: ' . $e->getMessage());
            return back()->withErrors('Terjadi kesalahan saat menghapus data.');
        }
    }
}
