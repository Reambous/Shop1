<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;

class bukucontrol extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = buku::all();
        return view('buku.index', compact('buku'));
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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|min:3',
            'pengarang' => 'required|min:3',
            'tahun_terbit' => 'required',
        ]);
        buku::create($validated);
        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buku = buku::all();
        $bukudetail = buku::findOrFail($id);
        return view('buku.index', compact('buku', 'bukudetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'judul' => 'required|min:3',
            'pengarang' => 'required|min:3',
            'tahun_terbit' => 'required',
        ]);
        buku::where('id', $id)->update($validated);
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bukudetail = buku::findOrFail($id);
        $bukudetail->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}
