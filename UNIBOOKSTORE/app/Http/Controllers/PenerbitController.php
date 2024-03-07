<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use Illuminate\Http\Request;

class PenerbitController extends Controller
{
    public $penerbit;
    public function __construct()
    {
        $this->penerbit = new Penerbit();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Penerbit::all();
        return view('penerbit.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $existingPenerbit = penerbit::where('penerbit', $request->nama)->first();
        $existingPenerbit = penerbit::where('penerbit', $request->nama)->first();

        $existingPenerbit = penerbit::where('penerbit', $request->nama)->first();

        // Jika data sudah ada, tampilkan pesan alert dan redirect kembali
        if ($existingPenerbit) {
            return redirect()->route('penerbit.create');
        }

        // Jika data belum ada, tambahkan data baru
        else {
            $penerbit = new Penerbit;
            $penerbit->kode = $request->kode;
            $penerbit->nama = $request->nama;
            $penerbit->alamat = $request->alamat;
            $penerbit->kota = $request->kota;
            $penerbit->telepon = $request->telepon;
            $penerbit->save();

            // Tampilkan pesan sukses dan redirect ke halaman utama
            return redirect()->route('penerbit');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Penerbit $penerbit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerbit $penerbit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penerbit $penerbit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerbit $penerbit)
    {
        //
    }
}
