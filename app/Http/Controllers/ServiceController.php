<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all(); // Mengambil semua data layanan
        return view('service.index', compact('services')); // Menampilkan halaman daftar layanan di home dashboard
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.create'); // Menampilkan form tambah layanan
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'jenis_service' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'detail' => 'nullable|string',
        ]);

        // Simpan data layanan ke database
        Service::create($validated);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('service.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('service.show', compact('service')); // Menampilkan detail layanan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('service.edit', compact('service'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'jenis_service' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'detail' => 'nullable|string',
        ]);

        // Cari dan update data layanan
        $service = Service::findOrFail($id);
        $service->update($validated); // Memperbarui data layanan

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('service.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        // Menghapus layanan
        $service->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('service.index')->with('success', 'Layanan berhasil dihapus.');
    }
}
