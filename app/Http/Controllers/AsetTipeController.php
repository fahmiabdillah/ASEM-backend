<?php

namespace App\Http\Controllers;

use App\Models\AsetTipe;
use Illuminate\Http\Request;

class AsetTipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asetTipe = AsetTipe::all();

        return $asetTipe;
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
     * @param  \App\Models\AsetTipe  $asetTipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asetTipe = AsetTipe::FindOrFail();

        return $asetTipe;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AsetTipe  $asetTipe
     * @return \Illuminate\Http\Response
     */
    public function edit(AsetTipe $asetTipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AsetTipe  $asetTipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsetTipe $asetTipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AsetTipe  $asetTipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(AsetTipe $asetTipe)
    {
        //
    }
}
