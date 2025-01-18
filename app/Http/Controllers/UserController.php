<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Testimoni;
use App\Models\galeriPangkas;
use App\Models\heroSection;
use App\Models\aboutus; // Add AboutUs model
use App\Models\reservasi;
use App\Models\Informasi;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data layanan, testimoni, galeri pangkas, hero section, aboutus, reservasi, dan informasi
        $services = Service::all();
        $testimoni = Testimoni::all();
        $galeriPangkas = galeriPangkas::all();
        $heroSections = heroSection::all();
        $aboutus = aboutus::first(); // Assuming only one aboutus record
        $reservasi = Reservasi::all(); // Get all reservasi
        $informasi = Informasi::first(); // Ambil informasi pertama (bukan koleksi)

        // Kirim data ke view 'adminhome'
        return view('adminhome', compact('services', 'testimoni', 'galeriPangkas', 'heroSections', 'aboutus', 'reservasi', 'informasi'));
    }


    /**
     * Store a new reservasi.
     */
    // UserController.php

    public function createReservasi()
    {
        return view('reservasi.create'); // Menampilkan form reservasi
    }

    public function storeReservasi(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'nomorwa' => 'required|string|max:255',
            'jam' => 'required|string', // Ganti jadi string jika menggunakan input text
            'tanggal' => 'required|string', // Ganti jadi string jika menggunakan input text
        ]);

        // Simpan data reservasi ke database
        Reservasi::create([
            'nama' => $validated['nama'],
            'nomorwa' => $validated['nomorwa'],
            'jam' => $validated['jam'],
            'tanggal' => $validated['tanggal'],
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('adminhome')->with('success', 'Reservasi berhasil dibuat');
    }



    public function storeTestimoni(Request $request)
    {
        // Validasi data yang diterima dari form
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'pesansaran' => 'required|string|max:1000',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Menyimpan data testimoni ke database
        Testimoni::create([
            'nama' => $validated['nama'],
            'pesansaran' => $validated['pesansaran'],
            'gambar' => $request->file('gambar') ? $request->file('gambar')->store('public/testimoni') : null,
        ]);

        // Redirect kembali ke halaman adminhome setelah berhasil
        return redirect()->route('adminhome')->with('success', 'Testimoni berhasil ditambahkan');
    }

    public function showAboutUs()
    {
        // Ambil data tentang perusahaan atau informasi lainnya
        $aboutus = Aboutus::first(); // Ambil satu data pertama (jika hanya ada satu record)

        // Kirim data ke view 'aboutus.indexuser'
        return view('aboutus.indexuser', compact('aboutus'));
    }





    /**
     * Show the form for creating a new heroSection.
     */

    // Show the form for creating a new reservasi

}
