<?php

namespace App\Http\Controllers;

use App\Models\dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\klien;

class TampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $klien=klien::all()
                    ->sortby('nama');
        return view('index', compact('klien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userIndex()
    {
        $dokumen_surat = count(dokumen::where('jns_dokumen_id', '=', 1)
                        ->get());        
        $dokumen_aset = count(dokumen::where('jns_dokumen_id', '=', 2)
                        ->get());
        $dokumen_keuangan = count(dokumen::where('jns_dokumen_id', '=', 3)
                            ->get());
        $dl = count(dokumen::where('jns_dokumen_id', '!=', 1)
                            ->where('jns_dokumen_id', '!=', 2)
                            ->where('jns_dokumen_id', '!=', 3)
                            ->get());
        // dd($dl); 

        return view('user.index', compact('dokumen_surat', 'dokumen_aset', 'dokumen_keuangan', 'dl'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
