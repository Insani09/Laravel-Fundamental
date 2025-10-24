<?php

namespace App\Http\Controllers;

use App\Models\Nama;
use Illuminate\Http\Request;

class NamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('Nama');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Nama  $nama
     * @return \Illuminate\Http\Response
     */
    public function show(Nama $nama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nama  $nama
     * @return \Illuminate\Http\Response
     */
    public function edit(Nama $nama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nama  $nama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nama $nama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nama  $nama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nama $nama)
    {
        //
    }
}
