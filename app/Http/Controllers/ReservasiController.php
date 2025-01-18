<?php

namespace App\Http\Controllers;

use App\Models\reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReservasiController extends Controller
{
    // Menampilkan semua testimoni (halaman index)

    public function showDashboard()
    {
        $reservasi = Reservasi::all();
        return view('dashboard', compact('reservasi'));
    }
    public function index()
    {
        $reservasi = reservasi::all();
        return view('reservasi.index', compact('reservasi'));
    }

    // Menampilkan form untuk membuat testimoni baru (halaman create)
    public function create()
    {
        return view('reservasi.create');
    }

    // Menyimpan testimoni yang dibuat

    public function destroy($id)
    {
        $reservasi = Reservasi::findOrFail($id);

        $reservasi->delete();

        return redirect()->route('reservasi.index')->with('success', 'Testimoni berhasil dihapus');
    }
}
