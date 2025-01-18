<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{

    public function showDashboard()
    {
        $testimoni = Testimoni::all();
        return view('testimoni.index', compact('testimoni')); // Menggunakan view yang sama dengan dashboard reservasi
    }
    // Menampilkan semua testimoni (halaman index)
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('adminhome', compact('testimoni'));
    }

    // Menampilkan form untuk membuat testimoni baru (halaman create)
    public function create()
    {
        return view('testimoni.create');
    }

    // Menyimpan testimoni yang dibuat

    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);

        // Menghapus gambar yang terkait
        if ($testimoni->gambar) {
            Storage::delete('public/' . $testimoni->gambar);
        }

        $testimoni->delete();

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil dihapus');
    }
}
