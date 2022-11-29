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

    //fungsi reject data
    //ketika di posisi manapun dan direject, akan kembali ke posisi operator
    public function reject(Request $request){

        $reject = Aset::findOrFail($id);
        if ($statusPosisi != 1 ) {
            # code...
            $reject -> ket_reject = $request->revisi;
            $reject -> save();
            //ket_reject belum dibuat atribut nya di db
        } else {
            # code...

            return ;
        }
        
        /**public function kasi_reject(Request $request) {
        $data = $request->tma_ids;
        foreach( $data as $val) {
            $reject = DataTMATebu::find($val);
            $reject->posisi_id = 10;
            $reject->ket_revisi = $request->revisi;
            $reject->status_reject = 1;
            $reject->save();
        }
        return response()->json(['success' => true], 200);
        }*/   
                
    }
}
