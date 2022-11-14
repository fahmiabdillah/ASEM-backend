<?php

namespace App\Http\Controllers;

use App\Models\AsetKondisi;
use Illuminate\Http\Request;

class AsetKondisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asetKondisi = AsetKondisi::all();
        
        return $asetKondisi;
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
     * @param  \App\Models\AsetKondisi  $asetKondisi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asetKondisi = AsetKondisi::FindOrFail();

        return $asetKondisi;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AsetKondisi  $asetKondisi
     * @return \Illuminate\Http\Response
     */
    public function edit(AsetKondisi $asetKondisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AsetKondisi  $asetKondisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsetKondisi $asetKondisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AsetKondisi  $asetKondisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(AsetKondisi $asetKondisi)
    {
        //
    }
}
