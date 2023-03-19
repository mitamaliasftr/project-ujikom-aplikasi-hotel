<?php

namespace App\Http\Controllers;

use App\Models\Pemesan;
use App\Http\Requests\StorePemesanRequest;
use App\Http\Requests\UpdatePemesanRequest;

class PemesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePemesanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePemesanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pemesan  $pemesan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemesan $pemesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pemesan  $pemesan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemesan $pemesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePemesanRequest  $request
     * @param  \App\Models\Pemesan  $pemesan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePemesanRequest $request, Pemesan $pemesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pemesan  $pemesan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemesan $pemesan)
    {
        //
    }
}
