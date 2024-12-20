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
        $service = Service::all();
        return view('service.index', compact('service'));
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
        $request->validate([
            'jenis_service' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'detail' => 'nullable|string',
        ]);

        $service = new Service();
        $service -> jenis_service = $request->jenis_Sevice;
        $service -> harga = $request -> harga;
        $service -> detail = $request -> detail;

        $service -> save();

        return redirect()->route('service.index') -> with('success', 'Layanan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
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
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'jenis_service' => 'required|string|max:255',
            'harga' => 'required|string|max:255',
            'detail' => 'nullable|string',
        ]);

        $service -> jenis_harga = $request -> jenis_harga;
        $service -> harga = $request -> harga;
        $service -> detail = $request -> detail;


        $service -> save();

        return redirect() -> route('service.index') -> with('success', 'Layanan berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service -> delete();
        return redirect() -> route('service.index') -> with('success', 'Layanan anda berhasil di hapus');
    }
}
