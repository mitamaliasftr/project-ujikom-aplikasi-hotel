<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Http\Requests\StoreKamarRequest;
use App\Http\Requests\UpdateKamarRequest;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use App\Exports\KamarExport;
use App\Imports\KamarImport;
use Maatwebsite\Excel\Facades\Excel;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kamar'] = Kamar::get();
        return view('kamar.index')->with($data);
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
     * @param  \App\Http\Requests\StoreKamarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKamarRequest $request)
    {
        // DB::beginTransaction(); 
        // try {
        //     Kamar::create($request->all());

        //     DB::commit();
        //     return redirect('kamar')->with('success', 'Kamar Berhasil ditambahkan!');
        // } catch (QueryException $e) {
        //     DB::rollback();
        //     return redirect('kamar')->with('error', 'Data tidak boleh kosong!');
        // }

        Kamar::create($request->all());
        return redirect('kamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function show(Kamar $kamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Kamar $kamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKamarRequest  $request
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKamarRequest $request, Kamar $kamar)
    {
        // DB::beginTransaction(); 
        // try {
        // $kamar->update($request->all());

        // DB::commit();
        // return redirect('kamar')->with('success', 'Data Berhasil Diupdate!');
        // } catch (QueryException $e) {
        // DB::rollback();
        // return redirect('kamar')->with('error', 'Terjadi Kesalahan pada query!');
        // }

        $kamar->update($request->all());

        return redirect('kamar')->with('success', 'Data Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kamar  $kamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kamar $kamar)
    {
        $kamar->delete();

        return redirect('kamar')->with('success', 'Data berhasil dihapus!');
    }

    // EXPORT
    public function export() 
    {
        return Excel::download(new KamarExport, 'kamar.xlsx');
    }

    // IMPORT
    public function importData()
    {
        Excel::import(new KamarImport, request()->file('import'));

        return redirect('kamar')->with('success', 'Import Data Kamar Berhasil!');
    }
}
