<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informasi = Informasi::all();
        return view('informasi.index', compact('informasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('informasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input data
        $request->validate([
            'email' => 'required|email',
            'nomor' => 'required',
            'alamat' => 'required',
            'hari' => 'required',
            'jam' => 'required',
        ]);

        // Menyimpan data ke dalam database
        Informasi::create($request->all());

        // Redirect ke halaman index setelah sukses menambahkan data
        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Informasi $informasi)
    {
        return view('informasi.show', compact('informasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $informasi = Informasi::findOrFail($id);
        return view('informasi.edit', compact('informasi'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input data
        $request->validate([
            'email' => 'required|email',
            'nomor' => 'required',
            'alamat' => 'required',
            'hari' => 'required',
            'jam' => 'required',
        ]);

        // Update data
        $informasi = Informasi::findOrFail($id);
        $informasi->update($request->all());

        // Redirect kembali ke halaman index setelah update
        return redirect()->route('informasi.index')->with('success', 'Informasi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Log::info('Memulai proses penghapusan data informasi.');

            $informasi = Informasi::findOrFail($id);

            // Hapus informasi dari database
            $informasi->delete();

            Log::info('Data informasi berhasil dihapus.');

            return redirect()->route('informasi.index')->with('success', 'Informasi berhasil dihapus.');
        } catch (\Exception $e) {
            Log::error('Error saat menghapus data informasi: ' . $e->getMessage());
            return back()->withErrors('Terjadi kesalahan saat menghapus data.');
        }
    }
}
