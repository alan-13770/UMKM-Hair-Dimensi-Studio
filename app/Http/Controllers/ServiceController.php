<?php

namespace App\Http\Controllers;

use App\Models\Service;  // Menggunakan model Service
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'layanan' => 'required|string|max:255',
            'harga' => 'required|integer',
        ]);

        $service = new Service();
        $service->nama = $request->nama;
        $service->layanan = $request->layanan;
        $service->harga = $request->harga;

        try {
            $service->save();
            return redirect()->route('service.index')->with('success', 'Service berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan service: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        // Menampilkan form untuk mengedit data service
        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        // Validasi input untuk update data service
        $request->validate([
            'nama' => 'required|string|max:255',
            'layanan' => 'required|string|max:255',
            'harga' => 'required|integer',
        ]);

        $service->nama = $request->nama;
        $service->layanan = $request->layanan;
        $service->harga = $request->harga;

        $service->save();

        return redirect()->route('service.index')->with('success', 'Service berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect()->route('service.index')->with('success', 'Service berhasil dihapus!');
    }
}
