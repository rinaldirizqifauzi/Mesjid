<?php

namespace App\Http\Controllers;

use App\Models\Jeniskegiatan;
use Illuminate\Http\Request;

class JeniskegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jenis-kegiatan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis-kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jeniskegiatan  $jeniskegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jeniskegiatan $jeniskegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jeniskegiatan  $jeniskegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jeniskegiatan $jeniskegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jeniskegiatan  $jeniskegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jeniskegiatan $jeniskegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jeniskegiatan  $jeniskegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jeniskegiatan $jeniskegiatan)
    {
        //
    }
}
