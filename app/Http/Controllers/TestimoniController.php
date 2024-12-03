<?php

namespace App\Http\Controllers;

use App\Models\testimoni;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pesansaran' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $testimoni = new Testimoni();
        $testimoni -> nama = $request->nama;
        $testimoni -> pesansaran = $request -> pesansaran;

        if ($request->hasFile('gambar')){
            $testimoni -> gambar = $request -> file('gambar') -> store('images', 'public');
        }

        $testimoni -> save();

        return redirect()->route('testimoni.index') -> with('success', 'Saran anda berhasil ditambahkan');
        
       
    }

 
    public function show(testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testimoni $testimoni)
    {
        return view('testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, testimoni $testimoni)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pesansaran' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $testimoni -> nama = $request -> nama;
        $testimoni -> pesansaran = $request -> pesansaran;

        if ($request ->hasFile('gambar')){
            if ($testimoni -> gambar){
                Storage::delete('public/'. $testimoni -> gambar);
            }
            $testimoni -> gambar = $request -> file('gambar') -> store('images', 'public');
        }

        $testimoni -> save();

        return redirect() -> route('testimoni.index') -> with('success', 'Testimoni berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(testimoni $testimoni)
    {
        if ($testimoni -> gambar){
            Storage::delete('public/'.$testimoni -> gambar);
        }

        $testimoni -> delete();
        return redirect() -> route('testimoni.index') -> with('success', 'Testimoni anda berhasil di hapus');
    }
}
