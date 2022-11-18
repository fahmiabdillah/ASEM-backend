<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aset;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use DateTime;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;

class AsetController extends Controller
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
        $umur_ekonomis_in_month = ($aset->masa_susut * 12) - (($interval_y * 12) + $interval_m);

        $aset["umur_ekonomis_in_month"] = $umur_ekonomis_in_month;

        $response = [
            "success" => true,
            "message" => "get detail data success",
            "data" => $aset
        ];

        return response()->json($response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        $validate = Validator::make($request->all(), [
            'aset_name' => 'required',
            'aset_tipe' => 'required',
            'aset_jenis' => 'required|numeric',
            'aset_kondisi' => 'required|numeric',
            'aset_kode' => 'required',
            'nomor_sap' => 'required',
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
        ]);

        $response = [
            "success" => false,
            "message" => "validation errors",
            "data" => $validate
        ];

        if ($validate->fails()) {
            return response()->json($response, 400);
        }

        $aset = [
            'aset_name' => $request->aset_name,
            'aset_tipe' => $request->aset_tipe,
            'aset_jenis' => $request->aset_jenis,
            'aset_kondisi' => $request->aset_kondisi,
            'aset_kode' => $request->aset_kode,
            'nomor_sap' => $request->nomor_sap,
            'geo_tag1' => $request->geo_tag1,
            'geo_tag2' => $request->geo_tag2,
            'geo_tag3' => $request->geo_tag3,
            'geo_tag4' => $request->geo_tag4,
            'aset_luas' => $request->aset_luas,
            'tgl_input' => $request->tgl_input,
            'tgl_oleh' => $request->tgl_oleh,
            'nilai_residu' => $request->nilai_residu,
            'nilai_oleh' => $request->nilai_oleh,
            'nomor_bast' => $request->nomor_bast,
            'masa_susut' => $request->masa_susut,
            'keterangan' => $request->keterangan,
        ];

        if ($request->hasFile("foto_aset1")) {
            $aset['foto_aset1'] = Storage::url($request->file("foto_aset1")->store('aset', 'public'));
        }
        if ($request->hasFile("foto_aset2")) {
            $aset['foto_aset2'] = Storage::url($request->file("foto_aset2")->store('aset', 'public'));
        }

        if ($request->hasFile("foto_aset3")) {
            $aset['foto_aset3'] = Storage::url($request->file("foto_aset3")->store('public'));
        }

        if ($request->hasFile("foto_aset4")) {
            $aset['foto_aset4'] = Storage::url($request->file("foto_aset4")->store('public'));
        }

        if ($request->hasFile("ba_file")) {
            $aset['ba_file'] = Storage::url($request->file("ba_file")->store('file', 'public'));
        }

        $status = DB::table('data_aset')->where('aset_id', (int) $request->aset_id)->update($aset);

        if (!$status) {
            $response = [
                "success" => false,
                "message" => "data aset failed to update",
                "data" => $aset
            ];

            return response()->json($response, 400);
        }

        $response = [
            "status" => true,
            "message" => "data aset updated",
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

    public function approve($id)
    {
    }

    public function kirimDataAset($id)
    {
        $aset = Aset::FindOrFail($id);

        if ($aset->aset_sub_unit == 1 && $aset->status_posisi+1 == 1) {

            $aset->status_posisi = 4;
            $aset->update();
            return $aset;
        } else {

            $aset->status_posisi += 1;
            $aset->update();
        }

        return $aset;
    }
}
