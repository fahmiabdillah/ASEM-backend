<?php

namespace App\Http\Controllers;

use App\StatusPosisi;
use Illuminate\Http\Request;

class StatusPosisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statusPosisi = StatusPosisi::all();


        $response = [
            "status" => "success",
            "code" => 200,
            "data" => $statusPosisi
        ];

        return response()->json($response);
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
        $statusPosisi = StatusPosisi::FindOrFail($id);


        $response = [
            "status" => "success",
            "code" => 200,
            "data" => $statusPosisi
        ];

        return response()->json($statusPosisi);
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
