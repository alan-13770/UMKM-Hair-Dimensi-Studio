<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\Service;  // Menggunakan model Service

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $service = Service::all();
        return view('servicess.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('servicess.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'layanan' => 'required|string|max:255',
            'gambar' =>  'nullable|image|mimes:jpg,jpeg,webp,png|max:3072',


        ]);

        $service = new Service();
        $service->nama = $request->nama;
        $service->harga = $request->harga;
        $service->layanan = $request->layanan;

        if ($request->hasFile('gambar')) {
            $service->gambar = $request->file('gambar')->store('images', 'public');
        }

        $service->save();
        return redirect()->route('service.index')->with('succes', 'layanan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('servicess.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        // Menampilkan form untuk mengedit data service
        return view('servicess.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        // Validasi input untuk update data service
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'layanan' => 'required|string|max:255',
            'gambar' =>  'nullable|image|mimes:jpg,jpeg,webp,png|max:3072',

        ]);

        $service->nama = $request->nama;
        $service->harga = $request->harga;
        $service->layanan = $request->layanan;


        $service->save();

        return redirect()->route('service.index')->with('success', 'Service berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if ($service->gambar){
            Storage::delete('public/'. $service->gambar);
        }

        $service->delete();
        return redirect()->route('service.index')->with('succes','Berita berhasil dihapus!');
    }
}

