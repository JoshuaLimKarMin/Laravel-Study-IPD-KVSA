<?php

namespace App\Http\Controllers;

use App\Models\Ebuku;
use Illuminate\Http\Request;

class EbukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ebuku = Ebuku::all();
        return view('main', compact('ebuku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah_rekod');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "judul" => "required|string",
            "nama_penulis" => "required|string",
            "nama_peminjam" => "required|string",
            "tarikh_pinjaman" => "required|date",
            "tarikh_pulangan" => "required|date",
            "status" => "required|string",
        ]);

        Ebuku::create([
            "judul" => $validated["judul"],
            "nama_penulis" => $validated["nama_penulis"],
            "nama_peminjam" => $validated["nama_peminjam"],
            "tarikh_pinjaman" => $validated["tarikh_pinjaman"],
            "tarikh_pulangan" => $validated["tarikh_pulangan"],
            "status" => $validated["status"],
        ]);

        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(Ebuku $ebuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ebuku = Ebuku::find($id);
        return view('edit', compact('ebuku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            "judul" => "required|string",
            "nama_penulis" => "required|string",
            "nama_peminjam" => "required|string",
            "tarikh_pinjaman" => "required|date",
            "tarikh_pulangan" => "required|date",
            "status" => "required|string",
        ]);

        $ebuku = Ebuku::find($id);

        $ebuku->judul = $validated["judul"];
        $ebuku->nama_penulis = $validated["nama_penulis"];
        $ebuku->nama_peminjam = $validated["nama_peminjam"];
        $ebuku->tarikh_pinjaman = $validated["tarikh_pinjaman"];
        $ebuku->tarikh_pulangan = $validated["tarikh_pulangan"];
        $ebuku->status = $validated["status"];

        $ebuku->save();

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Ebuku::find($id)->delete();
        return redirect('/');
    }
}
