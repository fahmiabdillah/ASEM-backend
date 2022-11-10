<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use DateTime;

class AsetController extends Controller
{

    function monthToYear(int $month)
    {
        $year = 0;
        $status = true;
        while (true) {

            $month -= 12;

            if ($month <= 0) {
                break;
            }

            $year++;
        }

        return $year;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aset = Aset::findOrFail($id);

        $now = date_create()->format('Y-m-d H:i:s');
        $date2 = new DateTime($now);
        $date = new DateTime($aset->tgl_input);

        $interval_m = $date->diff($date2)->m;
        $interval_y = $date->diff($date2)->y;
        $umur_ekonomis_in_month =($aset->masa_susut*12)-(($interval_y*12)+$interval_m);
        
        $aset["umur_ekonomis_in_month"] = $umur_ekonomis_in_month;

        $response = [
            "status" => "success",
            "code" => 200,
            "data" => $aset
        ];

        return response()->json($response);
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
        $validate = Validator::make($request->all(), [
            'aset_name' => 'required',
            'aset_tipe' => 'required',
            'aset_jenis' => 'required|numeric',
            'aset_kondisi' => 'required|numeric',
            'aset_sub_unit' => 'required|numeric',
            'aset_kode' => 'required',
            'nomor_sap' => 'required',
            'foto_aset1' => 'required',
            'foto_aset2' => 'required',
            'foto_aset3' => 'required',
            'foto_aset4' => 'required',
            'geo_tag1' => 'required',
            'geo_tag2' => 'required',
            'geo_tag3' => 'required',
            'geo_tag4' => 'required',
            'aset_luas' => 'required',
            'tgl_input' => 'required',
            'tgl_oleh' => 'required',
            'nomor_bast' => 'required',
            'masa_susut' => 'required',
            'keterangan' => 'required',
            'foto_qr' => 'required',
            'no_inv' => 'required',
            'foto_aset_qr' => 'required',
            'status_posisi' => 'required',
        ]);

        $response = [
            "status" => "error",
            "code" => 200,
            "data" => "validation errors"
        ];

        if ($validate->fails()) {
            return response()->json($response);
        }

        $aset = Aset::findOrFail($id);
        $aset->aset_name = $request->aset_name;
        $aset->aset_tipe = $request->aset_tipe;
        $aset->aset_jenis = $request->aset_jenis;
        $aset->aset_kondisi = $request->aset_kondisi;
        $aset->aset_sub_unit = $request->aset_sub_unit;
        $aset->aset_kode = $request->aset_kode;
        $aset->nomor_sap = $request->nomor_sap;
        
        $aset->geo_tag1 = $request->geo_tag1;
        $aset->geo_tag2 = $request->geo_tag2;
        $aset->geo_tag3 = $request->geo_tag3;
        $aset->geo_tag4 = $request->geo_tag4;
        $aset->aset_luas = $request->aset_luas;
        $aset->tgl_input = $request->tgl_input;
        $aset->tgl_oleh = $request->tgl_oleh;
        $aset->nilai_residu = $request->nilai_residu;
        $aset->nilai_oleh = $request->nilai_oleh;
        $aset->nomor_bast = $request->nomor_bast;
        $aset->masa_susut = $request->masa_susut;
        $aset->keterangan = $request->keterangan;
        $aset->foto_qr = $request->foto_qr;
        $aset->no_inv = $request->no_inv;
        $aset->foto_aset_qr = $request->foto_aset_qr;
        $aset->status_posisi = $request->status_posisi;
        $aset->unit_id = $request->unit_id;
        $aset->afdeling_id = $request->afdeling_id;
        $aset->afdeling_id = $request->afdeling_id;
        $aset->user_input_id = $request->user_input_id;


        // uploud foto
        $uploudedFolder = "aset";
        $foto1 = $request->file('foto_aset1');
        $path_foto1 = $foto1->store($uploudedFolder, 'public');
        
        $foto2 = $request->file('foto_aset2');
        $path_foto2 = $foto2->store($uploudedFolder, 'public');
        $foto3 = $request->file('foto_aset3');
        $path_foto3 = $foto3->store($uploudedFolder, 'public');
        $foto4 = $request->file('foto_aset4');
        $path_foto4 = $foto4->store($uploudedFolder, 'public');
        
        $aset->foto_aset1 = Storage::url($path_foto1);
        $aset->foto_aset2 = Storage::url($path_foto2);
        $aset->foto_aset3 = Storage::url($path_foto3);
        $aset->foto_aset4 = Storage::url($path_foto4);

        

        $aset->save();

        $response = [
            "status" => "success",
            "code" => 200,
            "data" => $aset
        ];

        return response()->json($response);
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
