<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public $kategori;
    public function __construct()
    {
        $this->kategori = new Kategori();
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data = Kategori::all();
        return view('kategori.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $existingKategori = Kategori::where('kategori', $request->nama_kategori)->first();

        if ($existingKategori) {
            return redirect()->route('kategori.create');
        } else {
            $kategori = new Kategori;
            $kategori->kategori = $request->nama_kategori;
            $kategori->save();
            return redirect()->route('kategori');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori, $id)
    {
        $kategori = Kategori::findOrFail($id);
        return view("kategori.edit", compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategor, $id)
    {
        $kategori = Kategori::findOrFail($id);

        $kategori->kategori = $request->nama_kategori;
        if ($kategori->isDirty()) {
            $rules = [
                'nama_kategori' => 'required|min:3|max:20|unique:kategori,kategori',
            ];

            // Pesan error validasi
            $messages = [
                'required' => ':attribute tidak boleh kosong',
                'min' => ':attribute minimal harus 3 karakter',
                'max' => ':attribute maksimal harus 20 karakter',
                'unique' => ':attribute sudah ada, silahkan gunakan yang lain',
            ];

            $this->validate($request, $rules, $messages);

            $kategori->kategori = $request->nama_kategori;

            $kategori->save();
            return redirect()->route('kategori');
        } else {
            return redirect()->route('kategori');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori');
    }
}
