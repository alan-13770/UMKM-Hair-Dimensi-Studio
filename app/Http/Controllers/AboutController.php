<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\About;  // Menggunakan model About

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all(); // Mengambil semua data dari tabel About
        return view('about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,webp,png|max:3072',
        ]);

        // Membuat instance model About
        $about = new About();
        $about->judul = $validatedData['judul'];
        $about->deskripsi = $validatedData['deskripsi'];

        // Menyimpan gambar jika ada
        if ($request->hasFile('gambar')) {
            $about->gambar = $request->file('gambar')->store('images/about', 'public');
        }

        // Menyimpan data ke dalam database
        $about->save();

        // Redirect dengan pesan sukses
        return redirect()->route('about.index')->with('success', 'About berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        // Validasi input untuk update
        $validatedData = $request->validate([
            'judul'     => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,webp,png|max:3072',
        ]);

        // Update data tanpa mengubah gambar jika tidak ada gambar baru
        $about->judul = $validatedData['judul'];
        $about->deskripsi = $validatedData['deskripsi'];

        // Jika ada gambar baru, hapus gambar lama dan simpan gambar baru
        if ($request->hasFile('gambar')) {
            if ($about->gambar && Storage::disk('public')->exists($about->gambar)) {
                Storage::disk('public')->delete($about->gambar);
            }
            $about->gambar = $request->file('gambar')->store('images/about', 'public');
        }

        // Simpan data yang telah diperbarui
        $about->save();

        return redirect()->route('about.index')->with('success', 'About berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        // Hapus gambar jika ada
        if ($about->gambar && Storage::disk('public')->exists($about->gambar)) {
            Storage::disk('public')->delete($about->gambar);
        }

        // Hapus data about
        $about->delete();

        return redirect()->route('about.index')->with('success', 'About berhasil dihapus!');
    }
}
