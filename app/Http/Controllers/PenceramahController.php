<?php

namespace App\Http\Controllers;

use App\Models\Penceramah;
use Illuminate\Http\Request;

class PenceramahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('penceramah.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penceramah.create');
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
     * @param  \App\Models\Penceramah  $penceramah
     * @return \Illuminate\Http\Response
     */
    public function show(Penceramah $penceramah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penceramah  $penceramah
     * @return \Illuminate\Http\Response
     */
    public function edit(Penceramah $penceramah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penceramah  $penceramah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penceramah $penceramah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penceramah  $penceramah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penceramah $penceramah)
    {
        //
    }
}
