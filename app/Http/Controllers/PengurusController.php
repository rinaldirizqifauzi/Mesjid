<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengurus = Pengurus::all();
        return view('kepengurusan.index', compact('pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('kepengurusan.create', compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'id_jabatan' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
        ],[
            'nama.required' => 'Nama wajib diisi !!',
            'id_jabatan.required' => 'Jabatan wajib dipilih !!',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi !!',
            'umur.required' => 'Umur wajib diisi !!',
        ]);

        Pengurus::create($validatedData);
        return redirect()->route('pengurus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function show(Pengurus $pengurus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengurus $penguru)
    {
        return view('kepengurusan.edit', [
            'pengurus' => $penguru,
            'jabatan' => Jabatan::all(),
            'jabatanSelected' => $penguru->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengurus $penguru)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'id_jabatan' => 'required',
            'jenis_kelamin' => 'required',
            'umur' => 'required',
        ],[
            'nama.required' => 'Nama wajib diisi !!',
            'id_jabatan.required' => 'Jabatan wajib dipilih !!',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi !!',
            'umur.required' => 'Umur wajib diisi !!',
        ]);

        $penguru->update($validatedData);
        return redirect()->route('pengurus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengurus $penguru)
    {
        Pengurus::destroy($penguru->id);
        return redirect()->route('pengurus.index');
    }
}
