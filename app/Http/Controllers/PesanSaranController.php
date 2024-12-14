<?php

namespace App\Http\Controllers;

use App\Models\PesanSaran;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PesanSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pesansaran = PesanSaran::all();
        return view('pesansaran.index', compact('pesansaran'));
    }

    // Method untuk menyimpan data yang diinput ke database
    public function store(Request $request): RedirectResponse
    {
        // Validasi data yang diinput oleh pengguna
        $validated = $request->validate([
            'nama'  => 'required|string|max:255', //Nama harus diisi dan tidak lebih dari 255 karakter
            'email' => 'required|email|max:255', //Email harus diisi dan valid serta tak lebih dari 255 karakter
            'pesan' => 'required|string', // Pesan harus diisi
        ]);
        $request->user()->pesansaran()->create($validated);

        // Menyimpan data yang telah divalidasi ke tabel 'pesan_sarans'
      //

        // Redirect kembali ke halaman form dan menampilkan pesan sukses
        return redirect()->route('pesan_saran.index')->with('success', 'Pesan saran berhasil dikirim!');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    /**
     *
     * Display the specified resource.
     */
    public function show(PesanSaran $pesanSaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PesanSaran $pesanSaran)
    {
        $pesanSaran = PesanSaran::findOrfail($pesanSaran->id);
        return view('pesansaran.edit', compact('pesanSaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PesanSaran $pesanSaran)
    {
        $validated = $request->validate([
            'nama'  => 'required|string|max:255', //Nama harus diisi dan tidak lebih dari 255 karakter
            'email' => 'required|email|max:255', //Email harus diisi dan valid serta tak lebih dari 255 karakter
            'pesan' => 'required|string', // Pesan harus diisi
        ]);

        $pesansaran = PesanSaran::findOrfail($pesanSaran->id);
        $pesansaran->update($validated);

        return redirect()->route('pesan_saran.index')->with('sucses', 'pesan saran berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PesanSaran $pesanSaran)
    {

            // Otorisasi jika diperlukan
            //$this->authorize('delete', $pesanSaran);

            // Hapus pesan saran
            $pesanSaran->delete();

            // Redirect setelah penghapusan
            return redirect()->route('pesan_saran.index')->with('success', 'Pesan saran berhasil dihapus!');
        }
    }
