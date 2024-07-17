<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Kategori;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        $title = "Delete";
        $text = "Are You Sure?";
        confirmDelete($title, $text);
        return view('kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|min:2',
            'deskripsi' => 'required|min:2',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);
        $kategori = new Kategori;
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi = $request->deskripsi;

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/kategori', $image->hashName());
        $kategori->image = $image->hashName();


        $kategori->save();
        Alert::success('success', 'data berhasil disimpan')->autoClose(1000);
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.show', compact('kategori'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate/form
        $this->validate($request, [
            'nama_kategori' => 'required|min:2',
            'deskripsi' => 'required|min:2',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $kategori = Kategori::FindOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi = $request->deskripsi ?? '';

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/kategori', $image->hashName());
        //delete old image
        Storage::delete('public/kategori' . $kategori->image);
        $kategori->image = $image->hashName();
        $kategori->save();
        Alert::success('success','Data berhasil di Diubah')->autoClose(5000);
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::FindOrFail($id);
        Storage::delete('public/eskul/' . $kategori->image);
        $kategori->delete();
        Alert::success('success','Data berhasil di hapus')->autoClose(5000);
        return redirect()->route('kategori.index');
    }
}
